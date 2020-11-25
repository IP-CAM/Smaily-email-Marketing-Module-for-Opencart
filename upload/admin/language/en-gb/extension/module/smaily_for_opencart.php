<?php
// Heading
$_['heading_title']     = 'Smaily for OpenCart';

// Sections
$_['section_general']   = 'General';
$_['section_customer']  = 'Subscriber Synchronization';
$_['section_abandoned'] = 'Abandoned Cart';
$_['section_rss']       = 'RSS Feed';
$_['section_status']    = 'Abandoned Cart Status';
$_['section_newsletter'] = 'Newsletter Widget';

// Text
$_['text_module']         = 'Modules';
$_['text_success']        = 'Success: You have modified Smaily for OpenCart module!';
$_['text_edit']           = 'Smaily for OpenCart Settings';
$_['text_enabled']        = 'Enabled';
$_['text_disabled']       = 'Disabled';
$_['text_ascending']      = 'Ascending';
$_['text_descending']     = 'Descending';
// Customer sync additional fields
$_['firstname']           = 'First name';
$_['lastname']            = 'Last name';
$_['telephone']           = 'Telephone';
$_['date_added']          = 'Date added';
// Abandoned cart additional fields
$_['customer_first_name'] = 'Customer first name';
$_['customer_last_name']  = 'Customer last name';
$_['product_name']        = 'Product name';
$_['product_description'] = 'Product description';
$_['product_sku']         = 'Product SKU';
$_['product_quantity']    = 'Product quantity';
$_['product_price']       = 'Product price';
$_['product_base_price']  = 'Product base price';

// Enable
$_['entry_enable_module_title']        = 'Enable Smaily Module';
$_['entry_enable_subscriber_title']    = 'Enable Customer Synchronization';
$_['entry_enable_abandoned_title']     = 'Enable Abandoned Cart Synchronization';
// First general form
$_['entry_enable_newsletter_widget']   = 'Enable Newsletter Widget';
$_['entry_subdomain_title']            = 'Subdomain*';
$_['entry_username_title']             = 'Username*';
$_['entry_password_title']             = 'Password*';
$_['validate_title']                   = 'Validate credentials';
$_['reset_credentials_title']          = 'Reset credentials';
$_['rss_feed_title']                   = 'Product RSS feed';
$_['rss_feed_text']                    = "Copy this URL into your template editor's RSS block, to receive RSS-feed";
// Customer sync form
$_['entry_customer_sync_fields_title'] = 'Customer Synchronization fields';
$_['sync_token_title']                 = 'Customer Cron Token*';
$_['sync_customer_url_title']          = 'Cron url';
$_['customer_cron_text']               = 'Use this url to run cron.';
// Abandoned cart form
$_['entry_autoresponder_title']        = 'Autoresponder ID*';
$_['abandoned_sync_fields_title']      = 'Abandoned Cart additional fields';
$_['delay_title']                      = 'Abandoned cart delay time';
$_['abandoned_minutes']                = 'minutes';
$_['cart_token_title']                 = 'Abandoned Cart Token*';
$_['sync_cart_url_title']              = 'Abandoned Cart Url';
$_['cart_cron_text']                   = 'Use this url to run cron.';
// Rss form
$_['rss_category_title']               = 'Product category';
$_['rss_sort_by_title']                = 'Sort products by';
$_['rss_sort_order_title']             = 'Sort direction';
$_['rss_limit_title']                  = 'Product limit';
$_['rss_limit_products']               = 'products';
$_['name']                             = 'Name';
$_['model']                            = 'Model';
$_['price']                            = 'Price';
$_['status']                           = 'Status';
$_['sort_order']                       = 'Sort Order';
// Abandoned cart status table
$_['header_id']                        = 'Customer ID';
$_['header_name']                      = 'Customer Name';
$_['header_email']                     = 'Customer E-Mail';
$_['header_cart']                      = 'Shopping Cart';
$_['header_date']                      = 'Email Date & Time';
$_['header_status']                    = 'Status';


//Placeholders
$_['placeholder_subdomain']  = 'Please enter subdomain';
$_['placeholder_username']   = 'Please enter username';
$_['placeholder_password']   = 'Please enter password';
$_['sync_token_placeholder'] = 'Please enter token for customer sync';
$_['cart_token_placeholder'] = 'Please enter token for abandoned cart sync';

// Error
$_['error_permission']              = 'Warning: You do not have permission to modify Smaily for OpenCart!';
$_['error_subdomain']               = 'Subdomain can\'t be empty';
$_['error_username']                = 'Username can\'t be empty';
$_['error_password']                = 'Password can\'t be empty';
$_['error_validate']                = 'Please validate credentials before saving settings';
$_['error_validate_empty']          = 'Please fill out all fields before validating';
$_['abandoned_autoresponder_error'] = 'Please select autoresponder for abandoned cart';
$_['cart_delay_error']              = 'Delay time must be atleast 15 minutes';
$_['rss_limit_error']               = 'RSS product limit value must be between 1 and 250';

// Buttons
$_['button_save']              = 'Save';
$_['button_cancel']            = 'Cancel';
$_['button_validate']          = 'Validate';
$_['button_reset_credentials'] = 'Reset';

// Validation responses
$_['validated_success']         = 'Validated!';
$_['validated_unauthorized']    = 'Wrong credentials!';
$_['validated_subdomain_error'] = 'Wrong subdomain!';
$_['validated_error']           = 'Something went wrong with validating!';
$_['credentials_reset']         = 'Credentials successfully reset!';

// Small text
$_['small_subdomain']       = 'For example "demo" from https://demo.sendsmaily.net/';
$_['small_password']        = 'How to create API credentials?';
$_['small_sync_additional'] = 'Select fields you wish to synchronize';
$_['small_cart_additional'] = 'Select fields wish to send to Smaily template.';
$_['small_cart_delay']      = 'Time when cart is considered abandoned. Minimum 15 minutes.';
$_['small_token']           = 'Token is required for cron security. Use this auto generated one or replace with your own.';
