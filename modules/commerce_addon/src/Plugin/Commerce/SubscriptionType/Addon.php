<?php

namespace Drupal\commerce_addon\Plugin\Commerce\SubscriptionType;

use Drupal\commerce_recurring\Plugin\Commerce\SubscriptionType\SubscriptionTypeBase;

/**
 * Provides the addon subscription type.
 *
 * @CommerceSubscriptionType(
 *   id = "addon",
 *   label = @Translation("Add-on"),
 *   purchasable_entity_type = "commerce_addon",
 * )
 */
class Addon extends SubscriptionTypeBase {}
