<?php

define('PANTHEON_ENVIRONMENT', $_ENV['PANTHEON_ENVIRONMENT']);

// The environment the current site is running on.
// Possible values: local, dev, test, live.
// Configuration further in this file sets different settings for different
// environments.
if (defined('PANTHEON_ENVIRONMENT')) {
    if (isset($_SERVER['PRESSFLOW_SETTINGS'])) {
        // This can only happen at the top of settings.php because it
        // recreates $config.
        extract(json_decode($_SERVER['PRESSFLOW_SETTINGS'], true), EXTR_OVERWRITE);
    }
    switch (PANTHEON_ENVIRONMENT) {
    case 'kalabox':
    case 'lando':
        $settings['server_environment'] = 'local';
        break;
    case 'dev':
    case 'test':
    case 'live':
        $settings['server_environment'] = PANTHEON_ENVIRONMENT;
        break;
    // Multidevs.
    default:
        $settings['server_environment'] = 'dev';
    }
}
else {
    $settings['server_environment'] = 'local';
}

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
require __DIR__ . "/settings.pantheon.php";

/**
 * Place the config directory outside of the Drupal root.
 */
$settings['config_sync_directory'] = dirname(DRUPAL_ROOT) . '/config';

/**
 * Always install the 'standard' profile to stop the installer from
 * modifying settings.php.
 */
$settings['install_profile'] = 'standard';

$config['openkj.settings']['api_key'] = '12345';
$config['openkj.settings']['default_venue'] = '1';

// Configuration split.
if ($settings['server_environment'] === 'local') {
    $config['config_split.config_split.development']['status'] = true;
} 
else {
    $config['config_split.config_split.development']['status'] = false;
}


/**
 * If there is a local settings file, then include it.
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
    include $local_settings;
}
