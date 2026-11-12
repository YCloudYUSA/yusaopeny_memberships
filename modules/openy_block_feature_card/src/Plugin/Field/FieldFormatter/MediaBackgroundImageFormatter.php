<?php

namespace Drupal\openy_block_feature_card\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\image\Entity\ImageStyle;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;
use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Field\FieldDefinitionInterface;

/**
 * Plugin implementation of the 'media_background_image' formatter.
 *
 * @FieldFormatter(
 *   id = "media_background_image",
 *   label = @Translation("Background Image"),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class MediaBackgroundImageFormatter extends ImageFormatter {

  /**
   * The renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    // The ImageFormatter constructor signature changes between core
    // releases, so let the parent build itself and inject extras afterwards.
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->renderer = $container->get('renderer');
    return $instance;
  }

  /**
   * {@inheritdoc}
   *
   * This has to be overridden because FileFormatterBase expects $item to be
   * of type \Drupal\file\Plugin\Field\FieldType\FileItem and calls
   * isDisplayed() which is not in FieldItemInterface.
   */
  protected function needsEntityLoad(EntityReferenceItem $item) {
    return !$item->hasNewEntity();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $element = parent::settingsForm($form, $form_state);
    unset($element['image_link']);
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $media_items = $this->getEntitiesToView($items, $langcode);

    // Early opt-out if the field is empty.
    if (empty($media_items)) {
      return $elements;
    }

    $image_style_setting = $this->getSetting('image_style');

    /** @var \Drupal\media\MediaInterface[] $media_items */
    foreach ($media_items as $delta => $media) {
      /** @var \Drupal\image\Plugin\Field\FieldType\ImageItem $item */
      $item = $media->get('thumbnail')->first();
      /** @var \Drupal\file\Entity\File $file */
      $file = $item->entity;

      $uri = $file->get('uri')->first()->getValue()['value'];
      if (!empty($image_style_setting)) {
        $style = ImageStyle::load($image_style_setting);
        $imageUrl = $style->buildUrl($uri);
      }
      else {
        $imageUrl = \Drupal::service('file_url_generator')->generateAbsoluteString($uri);
      }

      $elements[$delta] = [
        '#type' => 'html_tag',
        '#tag' => 'div',
        '#attributes' => [
          'style' => "background-image: url(\"{$imageUrl}\");"
        ]
      ];

      // Add cacheability of each item in the field.
      $this->renderer->addCacheableDependency($elements[$delta], $media);
    }

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition) {
    // This formatter is only available for entity types that reference
    // media items.
    return ($field_definition->getFieldStorageDefinition()->getSetting('target_type') == 'media');
  }

}
