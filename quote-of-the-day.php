<?php
/*
Plugin name: My Quote of The Day
Description: This plugin adds a random quote that changes daily
Author: Szymon Zygmunt
Version: 1.0
*/

require_once(plugin_dir_path(__FILE__) . 'quote-shortcode.php');
$quote_sc = new QuoteShortcode();

// require_once(plugin_dir_path(__FILE__) . 'quote-fields.php');
// $quote_f = new QuoteFields();
