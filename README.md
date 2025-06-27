# Memberships Builder framework for OpenY.

## Description

By installing this module, you will have completed solution for the membership search and select functionality for you Open Y website.
It includes landing pages and application for memberships builder.

## Installation

You can install this module with help of composer. Please, use this command:

`composer config minimum-stability dev`
`composer require ycloudyusa/yusaopeny_memberships`

If you have error when installing commerce module no campability with inline_entity_form use this command:
`composer require "drupal/inline_entity_form:2.0.0-rc10 as 1.0"`

We strongly recomment to use composer, because OpenY Membership project requires a lot of dependencies.

You need to build styles using this commands

`cd modules/openy_memberships_front/app`
`npm install`
`cd ../../..`
`npm install`
`npm run scss-build`

### If you do not have mail system installed

If you do not have mail system installed, and you need support for sending emails, please configure your mail system.

For example, you can use smtp and mailsystem:

And it to your project with composer:
```bash
composer require "drupal/smtp" "drupal/mailsystem"
drush en smtp mailsystem -y
```
And configure over UI with you smtp provider settings.

## Upgrade to 2.4 version

Release 2.3 (https://github.com/ycloudyusa/yusaopeny_memberships/releases/tag/2.3) is needed as an intermediate state for the upgrade path.
In order to uninstall swiftmailer - upgrade to the 2.3 release and uninstall the module from your Drupal.
Once uninstalled - proceed with upgrading to the 2.4 version of Open Y Memberships

## Demo content for Memberships framework

To install the demo content, please do next steps:
1. Enable an additional module:
`drush en openy_memberships_demo_content -y`
2. [Run demo content migrations from the module description](https://github.com/ycloudyusa/yusaopeny_memberships/tree/master/modules/openy_memberships_demo_content)


Steps for installation - CI sources https://github.com/ymcatwincities/openy-cibox-build/blob/master/devops/reinstall/vars/environments/membership_framework_env.yml

- Install Open Y standard *without demo content* 
  run ```drush si openy openy_configure_profile.preset=standard openy_theme_select.theme=openy_carnation openy_select_content.content=0 openy_terms_of_use.agree_openy_terms=1 install_configure_form.enable_update_status_emails=NULL <you addtional settings>```

- run ```drush en openy_carnation -y```

- run ```drush cset system.date country.default "US" -y```

- run ```drush en openy_memberships_demo_content -y```

- run ```drush mim --group=openy_demo_fblock```

- run ```drush mim --group=openy_demo_term```

- run ```drush mim --group=openy_demo_nbranch```

- run ```drush mim --group=openy_memberships_demo_content```

- Visit /membership-builder page to check how it works. Step 6 installs demo branches. You can skip it if you are adding Membership Framework to currently installed Open Y.

## Add-ons

In the initial build of the Memberships framework we had a robust Addons/Discounts functionality. Application had a separate step for that feature.
Since that step was very complex for many organisations, dev team hided it from the application.

To have Discount Finder step included in Membership builder, please revert code from this pr https://github.com/ycloudyusa/yusaopeny_memberships/pull/60 
And add DiscountFinder step here /admin/openy/memberships/settings (after "Results" step)

## Documentation

### Marketing and Membership Content Admins: How to Configure Membership Pages

For site admins and content managers to configure and update their online membership experience.

https://github.com/ycloudyusa/yusaopeny_memberships/wiki
