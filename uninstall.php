<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}
// Remove plugin options
delete_option('tldr_key');
delete_option('tldr_limit');
delete_option('tldr_border_color');