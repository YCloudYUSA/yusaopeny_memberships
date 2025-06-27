# Memberships Builder Framework for OpenY

## Description

By installing this module, you will have a complete solution for the membership search and selection functionality for your Open Y website.
It includes landing pages and an application for the memberships builder.

## Installation

You can install this module with the help of Composer. Please use these commands:

`composer config minimum-stability dev`
`composer require ycloudyusa/yusaopeny_memberships`

If you encounter an error when installing the commerce module due to incompatibility with inline_entity_form, use this command:
`composer require "drupal/inline_entity_form:2.0.0-rc10 as 1.0"`

We strongly recommend using Composer, because the OpenY Membership project requires many dependencies.

You need to build styles using these commands:

`cd modules/openy_memberships_front/app`
`npm install`
`cd ../../..`
`npm install`
`npm run scss-build`

### If you do not have a mail system installed

If you do not have a mail system installed and you need support for sending emails, please configure your mail system.

For example, you can use SMTP and Mail System:

Add it to your project with Composer:
```bash
composer require "drupal/smtp" "drupal/mailsystem"
drush en smtp mailsystem -y
```
And configure it via the UI with your SMTP provider settings.

## Upgrade to 2.4 version

Release 2.3 (https://github.com/ycloudyusa/yusaopeny_memberships/releases/tag/2.3) is needed as an intermediate step for the upgrade path.
In order to uninstall SwiftMailer, upgrade to the 2.3 release and uninstall the module from your Drupal installation.
Once uninstalled, proceed with upgrading to the 2.4 version of Open Y Memberships.

## Demo content for Memberships framework

To install the demo content, please follow these steps:
1. Enable the additional module:
`drush en openy_memberships_demo_content -y`
2. [Run demo content migrations from the module description](https://github.com/ycloudyusa/yusaopeny_memberships/tree/master/modules/openy_memberships_demo_content)

Steps for installation - CI sources: https://github.com/ymcatwincities/openy-cibox-build/blob/master/devops/reinstall/vars/environments/membership_framework_env.yml

- Install Open Y standard *without demo content* 
  run ```drush si openy openy_configure_profile.preset=standard openy_theme_select.theme=openy_carnation openy_select_content.content=0 openy_terms_of_use.agree_openy_terms=1 install_configure_form.enable_update_status_emails=NULL <your additional settings>```

1. run ```drush en openy_addthis -y```

2. run ```drush cset system.date country.default "US" -y```

3. run ```drush en openy_memberships_demo_content -y```

4. run ```drush mim --group=openy_demo_term```

5. run ```drush mim --group=openy_demo_nbranch```

6. run ```drush mim --group=openy_memberships_demo_content```

7. run ```drush cset system.site page.front "/membership-builder" -y```

- Visit /membership-builder page to check how it works. Step 4-5 installs demo content from yusaopeny, you can skip it if you are adding the Membership Framework to a currently installed Open Y.

## Add-ons

In the initial build of the Memberships framework, we had a robust Add-ons/Discounts functionality. The application had a separate step for that feature.
Since that step was very complex for many organizations, the development team hid it from the application.

To have the Discount Finder step included in the Membership builder, please revert the code from this PR: https://github.com/ycloudyusa/yusaopeny_memberships/pull/60 
And add the DiscountFinder step here: /admin/openy/memberships/settings (after the "Results" step).

## Documentation

### Marketing and Membership Content Admins: How to Configure Membership Pages

For site admins and content managers to configure and update their online membership experience.

[docs/Home.md](docs/Home.md) 
