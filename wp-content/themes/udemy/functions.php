<?php

// Setup
define('YM_DEV_MODE', true);

// Includes
include(get_theme_file_path('/includes/enqueue/enqueue.php'));

// Hooks
add_action('wp_enqueue_scripts', 'ym_enqueue');

// Shortcuts
