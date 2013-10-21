<?php
/**
 * Theme version info
 *
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 *             in respect to modifications of the afterburner theme, @copyright 2011 Mary Evans
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Plugin version (update when tables change)
$plugin->version   = 2013101214;

// Required Moodle version
// 2.3.9 -> 2012062509
// 2.4.6 -> 2012120306
// 2.5.2 -> 2013051402
$plugin->requires  = 2013040500;

// Full name of the plugin (used for diagnostics)
$plugin->component = 'theme_aigne';

// Theme based on...
$plugin->dependencies = array(
    'theme_base'  => 2012061701,
);

// Software maturity level
$plugin->maturity = MATURITY_STABLE;

// User-friendly version number
$plugin->release = '1.4.0';

//END OF FILE
