# Charitable Code Snippet library

This is a library of code snippets designed to help end users and theme or plugin developers. 

## How to use the code snippets

If you are new to PHP or WordPress development, we recommend adding these code snippets using the [Code Snippets plugin](https://wordpress.org/plugins/code-snippets/). This allows you to add the code directly within your WordPress dashboard.

For those a little more familiar with WordPress development, you can use the snippets to create simple standalone plugins. Read the WordPress documentation about [creating a plugin](https://codex.wordpress.org/Writing_a_Plugin).

Alternatively, you could add the snippets directly to your theme or child theme's `functions.php` file. 

## Contributing a snippet

We welcome and encourage everyone to submit their code snippets. If you would like to submit your snippet, please [fork the repository](https://github.com/Charitable/library/fork) and then [create a pull request](https://github.com/Charitable/library/compare/).

## Directory

### General

- [Unhook default Charitable template functions](https://github.com/Charitable/library/tree/master/general/unhook-default-charitable-template-functions.php)
- [Add an "Hours" currency](https://github.com/Charitable/library/blob/master/general/add-hours-currency.php)
- [Add a new currency, with a currency symbol](https://github.com/Charitable/library/blob/master/general/add-currency.php)
- [Add the User Dashboard menu at the top of all User Dashboard pages](https://github.com/Charitable/library/blob/master/general/add-user-dashboard-menu.php)
- [Change plugin text](https://github.com/Charitable/library/blob/master/general/change-plugin-text.php)

### Editing Forms

- [Remove form fields](https://github.com/Charitable/library/tree/master/forms/general/remove-form-fields.php)
- [Change form fields](https://github.com/Charitable/library/tree/master/forms/general/change-form-fields.php)
- [Change the labels of form fields](https://github.com/Charitable/library/tree/master/forms/general/change-form-field-labels.php)
- [Change whether a form field is required](https://github.com/Charitable/library/tree/master/forms/general/make-form-fields-required-not-required.php)
- [Add HTML before form fields](https://github.com/Charitable/library/tree/master/forms/general/add-html-before-form-fields.php)
- [Add HTML after form fields](https://github.com/Charitable/library/tree/master/forms/general/add-html-after-form-fields.php)
- [Add a description/paragraph field to a form](https://github.com/Charitable/library/tree/master/forms/general/add-description-field.php)

### Donation form

#### Registering new fields (examples for charitable 1.5+)

- [Adding a text field (detailed example)](https://github.com/Charitable/library/blob/master/donation-form/register-new-donation-field-1.5.php)
- [Adding a text field (condensed example)](https://github.com/Charitable/library/blob/master/donation-form/collect-national-id-number.php)
- [Adding a checkbox field](https://github.com/Charitable/library/blob/master/donation-form/add-checkbox-field-to-donation-form.php)
- [Adding a select field](https://github.com/Charitable/library/blob/master/donation-form/add-select-field-to-donation-form.php)
- [Adding multiple fields at once](https://github.com/Charitable/library/blob/master/donation-form/register-multiple-donation-fields.php)

#### Changing fields & other

- [Change State field to Province](https://github.com/Charitable/library/blob/master/donation-form/change-state-to-province.php)
- [Make the donor address fields required](https://github.com/Charitable/library/blob/master/donation-form/make-donor-address-required.php)
- [Remove donation form fields](https://github.com/Charitable/library/blob/master/donation-form/remove-donation-form-fields.php)
- [Remove login form](https://github.com/Charitable/library/blob/master/donation-form/remove-login-form.php)
- [Set the minimum donation amount](https://github.com/Charitable/library/blob/master/donation-form/set-minimum-donation-amount.php)
- [Add campaign title as a header](https://github.com/Charitable/library/blob/master/donation-form/add-campaign-title-to-start.php)
- [Display a specific donation form](https://github.com/Charitable/library/blob/master/donation-form/display-donation-form.php)
- [Move donor details section to end of form, after payment form](https://github.com/Charitable/library/blob/master/donation-form/move-user-fields-in-donation-form.php)
- [Add an opt-out for receiving the donation receipt](https://github.com/Charitable/library/blob/master/donation-form/add-donation-receipt-opt-out-checkbox.php)
- [Show the Offline payment instructions in the donation form](https://github.com/Charitable/library/blob/master/gateways/add-offline-instructions-to-donation-form.php)

### Donation receipt

- [Display a link back to the campaign from the donation receipt](https://github.com/Charitable/library/blob/master/donation-receipt/add-campaign-link.php)
- [Display a summary of the amount raised for the campaign](https://github.com/Charitable/library/blob/master/donation-receipt/add-campaign-raised-summary.php)
- [Set a custom donation receipt page](https://github.com/Charitable/library/blob/master/donation-receipt/set-custom-donation-receipt-page.php)
- [Set a custom donation receipt page for offline donations](https://github.com/Charitable/library/blob/master/donation-receipt/set-custom-donation-receipt-page-for-offline-donations.php)

### Donations

- [Treat Pending donations as "Approved" donations](https://github.com/Charitable/library/blob/master/donations/add-pending-to-approved-statuses.php)
- [Automatically mark Offline donations as Paid](https://github.com/Charitable/library/blob/master/donations/auto-complete-offline-donations.php)
- [Add a Donate button with modal to your template](https://github.com/Charitable/library/tree/master/donations/add-donate-button.php)

### Emails

- [Add email headers](https://github.com/Charitable/library/blob/master/emails/add-email-headers.php)
- [Copy the donation receipt to the website admin](https://github.com/Charitable/library/blob/master/emails/copy-donation-receipt-to-admin.php)
- [Send donation notifications to admin for Offline donations that are Pending](https://github.com/Charitable/library/blob/master/emails/send-donation-notification-for-pending-offline-donations.php)
- [Send donation receipt to customer for Offline donations that are Pending](https://github.com/Charitable/library/blob/master/emails/send-donation-receipt-for-pending-offline-donations.php)
- [Remove campaign name from donation summaries in emails](https://github.com/Charitable/library/blob/master/emails/remove-campaign-name-from-donation-summary.php)
- [Add a custom campaign field to display in emails](https://github.com/Charitable/library/blob/master/emails/add-custom-campaign-field.php)
- [Add a custom donation field to display in emails](https://github.com/Charitable/library/blob/master/emails/add-custom-donation-field.php)
- [Add the offline payment instructions to donation emails](https://github.com/Charitable/library/blob/master/emails/add-offline-instructions-field.php)

### Campaigns 

- [Use the Page template for campaigns](https://github.com/Charitable/library/blob/master/campaigns/use-page-template-for-campaigns.php)
- [Add featured image to the top of the campaign](https://github.com/Charitable/library/blob/master/campaigns/add-featured-image.php)
- [Remove campaign summary block](https://github.com/Charitable/library/blob/master/campaigns/remove-stats-summary-block.php)
- [Remove campaign summary block from a specific campaign](https://github.com/Charitable/library/blob/master/campaigns/remove-stats-summary-block-from-specific-campaign.php)
- [Remove the donor count](https://github.com/Charitable/library/blob/master/general/unhook-default-charitable-template-functions.php)
- [Remove the donor count from a specific campaign](https://github.com/Charitable/library/blob/master/campaigns/remove-donor-count-from-specific-campaign.php)
- [Add a progress bar before the campaign summary block](https://github.com/Charitable/library/blob/master/campaigns/add-progress-bar-before-summary.php)
- [Move the campaign summary block below the Extended Description](https://github.com/Charitable/library/blob/master/campaigns/move-campaign-summary-below-content.php)
- [Remove the campaign descriptions from the [campaigns] output](https://github.com/Charitable/library/blob/master/campaign-loop/remove-campaign-description.php)
- [Add a custom field to the [campaigns] output](https://github.com/Charitable/library/blob/master/campaign-loop/add-custom-field.php)
- [Add a Read More link to the [campaigns] output](https://github.com/Charitable/library/blob/master/campaign-loop/add-read-more-link.php)
- [Change the Thumbnail size in the [campaigns] output](https://github.com/Charitable/library/blob/master/campaign-loop/set-campaign-thumbnail-size.php)
- [Disable description text santization](https://github.com/Charitable/library/blob/master/campaigns/disable-description-text-sanitization.php)
- [Round the percentage donated to a whole number](https://github.com/Charitable/library/blob/master/campaigns/round-percent-donated-to-whole-number.php)
- [Change the amount shown as donated to a particular campaign](https://github.com/Charitable/library/blob/master/campaigns/change-amount-donated.php)
- [Change the campaign slug base](https://github.com/Charitable/library/blob/master/campaigns/change-campaign-slug-base.php)
- [Change the campaign rewrite rules to disable the `with_front` setting](https://github.com/Charitable/library/blob/master/campaigns/change-campaign-rewrite-to-not-use-with-front.php)
- [Add a "Campaigns" menu tab to the WordPress dashboard](https://github.com/Charitable/library/blob/master/campaigns/add-campaigns-menu.php)

### Notifications

- [Send notification emails to the admin & new user when someone registers](https://github.com/Charitable/library/blob/master/notifications/send-notifications-on-user-registration.php) (credit: [altatof](https://github.com/altatof))

### Login form

- [Change the arguments passed to the login form (uses `wp_login_form()`)](https://github.com/Charitable/library/blob/master/login-form/change-login-form-arguments.php)
- [Redirect to the previous page after logging in](https://github.com/Charitable/library/blob/master/login-form/redirect-to-referer-after-login.php)

### Profile form

- [Remove a section](https://github.com/Charitable/library/blob/master/profile-form/remove-section.php)
- [Remove the organisation field](https://github.com/Charitable/library/blob/master/profile-form/remove-organisation-field.php)
- [Add a field to the "Your Details" section](https://github.com/Charitable/library/blob/master/profile-form/add-user-field.php)

### Registration form

- [Send emails to the new user and admin after a user registers](https://github.com/Charitable/library/blob/master/registration-form/send-new-user-notifications.php)
- [Redirect the user to a custom page after registration](https://github.com/Charitable/library/blob/master/registration-form/set-custom-redirection-after-registration.php)
- [Set the role of new users](https://github.com/Charitable/library/blob/master/registration-form/set-new-user-role.php)

### Styles

- [Change the default highlight colour](https://github.com/Charitable/library/blob/master/styles/set-default-highlight-colour.php)

### Export 

- [Add a column to the Donations export](https://github.com/Charitable/library/blob/master/export/add-extra-column.php)
- [Remove a column from the Donations export](https://github.com/Charitable/library/blob/master/export/remove-formatted-address-column.php)

### Payment Gateways

#### PayPal

- [Collect shipping information in PayPal](https://github.com/Charitable/library/blob/master/gateways/paypal/collect-shipping-information.php)
- [Set a custom item name for donations in PayPal](https://github.com/Charitable/library/blob/master/gateways/paypal/set-custom-item-name.php)
- [Set the locale in PayPal](https://github.com/Charitable/library/blob/master/gateways/paypal/set-locale.php)

#### Offline

- [Show the Offline payment instructions in the donation form](https://github.com/Charitable/library/blob/master/gateways/offline/add-offline-instructions-to-donation-form.php)
- [Set a custom donation receipt page for offline donations](https://github.com/Charitable/library/blob/master/donation-receipt/set-custom-donation-receipt-page-for-offline-donations.php)
- [Automatically mark Offline donations as Paid](https://github.com/Charitable/library/blob/master/donations/auto-complete-offline-donations.php)
- [Send the Campaign Creator Donation Notification for Offline donations when they're pending](https://github.com/Charitable/library/blob/master/extensions/ambassadors/emails/send-creator-donation-notification-for-pending-offline-donations.php)
- [Add the offline payment instructions to donation emails](https://github.com/Charitable/library/blob/master/emails/add-offline-instructions-field.php)

#### Stripe

- [Set a custom statement descriptor](https://github.com/Charitable/library/blob/master/gateways/stripe/set-statement-descriptor.php)

#### PayUMoney

- [Modify the arguments sent to PayUMoney](https://github.com/Charitable/library/blob/master/gateways/payumoney/modify-payment-args.php)

### Extensions: 

#### Charitable Ambassadors 

##### Campaign Form

- [Add select field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-select-field.php)
- [Remove all user fields except for the name & email fields](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/remove-all-user-fields-except-for-basics.php)
- [Add address fields to the "Your Details" section](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-address-fields-to-user-details.php)
- [Automatically approve campaigns](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/auto-approve-campaigns.php)
- [Allow ambassadors to edit the goal of an active campaign](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/edit-live-campaign-goal.php)
- [Change the categories & tags fields into dropdown (select) fields](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/change-category-field-to-select.php)
- [Remove the categories field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/remove-categories-field.php)
- [Remove the organisation field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/remove-organisation-field.php)
- [Remove the tags field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/remove-tags-field.php)
- [Remove the short description field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/remove-short-description-field.php)
- [Remove the user biography field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/remove-user-biography-field.php)
- [Set default text for full description field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/set-default-text-for-description-field.php)
- [Set default country for Ambassadors](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/set-default-ambassador-country.php)
- [Set the default category for new campaign submissions](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/set-campaign-category.php)
- [Add phone number field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-phone-number-field.php)
- [Change the Campaign Details header](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/rename-campaign-details-section-title.php)
- [Change field labels](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/change-field-labels.php)
- [Change editable fields to non-editable and vice versa](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/change-field-editable.php)
- [Remove the campaign length field and replace with an end date field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/replace-campaign-length-with-end-date-field.php)
- [Add start date field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-start-date-field.php)
- [Add user details to funds recipient information](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-user-details-to-funds-recipient-information.php)
- [Automatically set the Suggested Donations and custom donation settings](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/automatically-set-donation-options.php)
- [Automatically set the campaign parent for all submitted campaigns](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/set-campaign-parent.php)
- [Automatically set the campaign's end date](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/automatically-set-end-date.php)
- [Change the PayPal payout details field](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/change-payout-field.php)
- [Redirect logged out users to the registration page](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/redirect-logged-out-users-to-registration-page.php)
- [Only allow users to create one campaign](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/only-allow-one-campaign-per-user.php)
- [Prevent users from editing a published campaign](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/prevent-editing-of-published-campaigns.php)
- [Add a "Gallery" field to the campaign form and display the gallery on the campaign automatically](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-gallery-field.php)
- [Add a "Terms and Conditions" section to the campaign form](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/add-terms-field.php)
- [Redirect to the campaign after submitting the form](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/redirect-to-campaign-after-submission.php)
- [Change the recipient type labels for "Personal Causes" and "Your Organization"](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaign-submission-form/change-recipient-type-labels.php)

##### Campaigns

- [Remove the "Edit" link added by some themes](https://github.com/Charitable/library/blob/master/extensions/ambassadors/campaigns/remove-edit-post-link-from-campaigns.php)

##### My Campaigns Shortcode

- [Remove the "Actions" block (Edit Campaigns, Export Donors, etc.) from the campaigns](https://github.com/Charitable/library/blob/master/extensions/ambassadors/my-campaigns-shortcode/remove-campaign-actions-block.php)

##### Emails
- [Send the Campaign Creator Donation Notification for Offline donations when they're pending](https://github.com/Charitable/library/blob/master/extensions/ambassadors/emails/send-creator-donation-notification-for-pending-offline-donations.php)

#### Charitable Easy Digital Downloads Connect

- [Add {campaign_donations} email tag](https://github.com/Charitable/library/blob/master/extensions/edd-connect/add-campaign-donations-email-tag.php)
- [Add a custom checkout field for specific campaigns](https://github.com/Charitable/library/blob/master/extensions/edd-connect/add-campaign-donations-email-tag.php)
- [Show the Easy Digital Downloads gateway used for donations](https://github.com/Charitable/library/blob/master/extensions/edd-connect/set-gateway-label.php)

#### Charitable Recurring Donations

- [Change the recurring period to weekly](https://github.com/Charitable/library/blob/master/extensions/recurring-donations/change-recurring-period-to-weekly.php)
- [Change the recurring period to yearly](https://github.com/Charitable/library/blob/master/extensions/recurring-donations/change-recurring-period-to-yearly.php)
- [Set a fixed recurring donation amount](https://github.com/Charitable/library/blob/master/extensions/recurring-donations/set-fixed-recurring-donation-amount.php)
- [Do not send recurring emails for pending donations unless they are offline](https://github.com/Charitable/library/blob/master/extensions/recurring-donations/do-not-send-recurring-emails-for-pending-donations.php)

### Themes

#### Reach

- [Unhook a template](https://github.com/Charitable/library/blob/master/themes/reach/remove-reach-hooks.php)
- [Add the donate button to campaigns in a grid](https://github.com/Charitable/library/blob/master/themes/reach/add-donate-button-to-campaign-loop.php)
- [Add the read more link to campaigns in a grid](https://github.com/Charitable/library/blob/master/themes/reach/add-read-more-button-to-campaign-loop.php)
- [Re-order the social network links](https://github.com/Charitable/library/blob/master/themes/reach/reorder-social-network-links.php)
- [Move the donate button on the campaign page](https://github.com/Charitable/library/blob/master/themes/reach/move-donate-button-campaign-page.php)
- [Change the donation page title](https://github.com/Charitable/library/blob/master/themes/reach/change-donation-page-title.php)
- [Prevent the donation receipt from loading in the user dashboard](https://github.com/Charitable/library/blob/master/themes/reach/do-not-load-receipt-in-user-dashboard.php)
- [Turn off the campaign archive](https://github.com/Charitable/library/blob/master/themes/reach/turn-off-campaign-archive.php)

#### 3rd Party Themes

- [Charitas / Charitas Lite - Single campaign page](https://github.com/Charitable/library/blob/master/themes/charitas/single-campaign.php)
- [Alone - Campaign page (add the extended description)](https://github.com/Charitable/library/blob/master/themes/alone/campaign-page-with-extended-description.php)

### Legacy snippets

#### Pre Charitable 1-5

- [Adding a text field (condensed example)](https://github.com/Charitable/library/blob/master/donation-form/legacy/collect-national-id-number.php)
- [Adding a checkbox field](https://github.com/Charitable/library/blob/master/donation-form/legacy/add-checkbox-field-to-donation-form.php)
- [Adding a select field](https://github.com/Charitable/library/blob/master/donation-form/legacy/add-select-field-to-donation-form.php)
- [Add a shortcode for displaying donation forms](https://github.com/Charitable/library/blob/master/donation-form/legacy/add-donation-form-shortcode.php)