Welcome to the openy_memberships wiki!

## Documentation

### For Marketing and Membership Content Admins: How to Configure Membership Pages

This is documentation for site admins and content managers to configure and update their online membership experience.

#### 1. Landing Pages:

#### Membership Builder

- Go to [YOURWEBSITE]/node/add/landing_page

- Title: Membership Builder

- Layout: Two Columns with left sidebar

- Header Area: add “Small banner” paragraph and fill the fields

- Content area: add “Memberships” paragraph (it has pre-filled fields)

- Sidebar Area: add “Block Container” paragraph with “Memberships Desktop Sidebar” skin

  - Block_ref:  choose “Paragraph container” with “Memberships Menu Container” title 

- Sidebar Area: add “Simple content” with “Memberships Button” skin and link to builder in content: 
```
<p><a class="btn btn-primary" href="/membership-builder"><span class="text">JOIN THE Y</span></a></p>
```
- Sidebar Area: add “Sidebar Menu” with "Memberships Sidebar Menu" skin to create your Memberships Menu with these items:
  
  - Membership Types
  
  - Member Benefits
  
  - Discounts
 
  - Corporate wellness
 
  - Free Trial

![HZQ0zUKCP](https://user-images.githubusercontent.com/83423820/118317830-67dfe380-b4ad-11eb-8ec5-83077ab5b185.png)

- Sidebar Area: add “Block container” with "Memberships Feature card" skin. Use “Feature Card” block type with any content allowed in this block

- Save the landing page

#### Membership Types

- Go to [YOURWEBSITE]/node/add/landing_page

- Title: Membership Types

- Layout: Two Columns with left sidebar

- Header Area: add “Small banner” paragraph and fill the fields

- Content Area: 

  - add “Simple content” paragraph with “Membership Simple Content” skin and text
 
  - add “Membership Types Listing” with “Membership Types” skin

- Sidebar Area: follow the same steps for “Membership Builder” page

- Save the landing page

#### Member Benefits

- Go to [YOURWEBSITE]/node/add/landing_page

- Title: Membership Types

- Layout: Two Columns with left sidebar

- Header Area: add “Small banner” paragraph and fill the fields

- Content Area: fill the area with content. An example is shown in the next screenshot

- Sidebar Area: follow the same steps for “Membership Builder” page

- Save the landing page

![CuhrzgmBC](https://user-images.githubusercontent.com/83423820/118320709-792aef00-b4b1-11eb-9ce8-840927f7f849.png)

#### Discounts

- Go to [YOURWEBSITE]/node/add/landing_page

- Title: Corporate wellness

- Layout: Two Columns with left sidebar

- Header Area: add “Small banner” paragraph and fill the fields

- Content Area: fill the area with content. An example is shown in the next screenshot

- Sidebar Area: follow the same steps for “Membership Builder” page

- Save the landing page

![LIGavGIkm](https://user-images.githubusercontent.com/83423820/118321014-db83ef80-b4b1-11eb-9160-8d1827a47515.png)

#### Corporate Wellness

- Go to [YOURWEBSITE]/node/add/landing_page

- Title: Corporate wellness

- Layout: Two Columns with left sidebar

- Header Area: add “Small banner” paragraph and fill the fields

- Content Area: fill the area with content. An example is shown in the next screenshot

- Sidebar Area: follow the same steps for “Membership Builder” page

- Save the landing page

![sHXtooVz0](https://user-images.githubusercontent.com/83423820/118321263-387fa580-b4b2-11eb-8655-bd2670dcb660.png)

#### Free Trial

- Go to [YOURWEBSITE]/node/add/landing_page

- Title: Free Trial

- Layout: Two Columns with left sidebar

- Header Area: add “Small banner” paragraph and fill the fields

- Content Area: add “Simple content” with a description

- Content Area: add ”Webform” with “Memberships Free Trial Webform” skin and “Memberships Free Trial” webform

- Sidebar Area: follow the same steps for “Membership Builder” page

#### 2. Membership Products:

- Go to [YOURWEBSITE]/admin/commerce/products

- Click on “+ Add product” button, then choose “Membership”

- You'll see these fields:

  - Title

  - Description

  - Add-ons (used in specific cases, skip for default setup)

  - Total Available

- Subfields:

  - Related Add-on (skip for default functionality)

  - Age groups (select age groups, usually Adults, Youth, Seniors)

  - Total Available (number of people allowed for age group selected above for the membership product. You can add multiple groups by clicking “Add another item” for Family memberships)

  - Total Free (designed for cases where extra people are allowed in the membership, but with an additional fee. Fill with the same value as Total Available for default functionality)

- Branches in the product (use if a membership is specific to a branch. If "None" is selected, the membership will appear for all branches)

- A typical setup is shown in the following screenshot

![pSrGIjlLA](https://user-images.githubusercontent.com/83423820/118322817-9614f180-b4b4-11eb-84f6-1ce5e169248e.png)

- Click on the “Save and add variations” button (or go to the “Variations” tab if editing a previously created product)

- A typical setup for variations of a membership is shown in the following screenshot

![-1vNz3Ikq](https://user-images.githubusercontent.com/83423820/118323091-f9068880-b4b4-11eb-8bde-e3c02dac848c.png)

