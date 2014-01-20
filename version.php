<?php
/**
 * Theme version info
 *
 * @package    theme_aigne
 * @copyright  2013-2014 Franc Pombal (www.aigne.com)
 *             modifications of the afterburner theme, @copyright 2011 Mary Evans
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Plugin version (update when tables change)
$plugin->version   = 2014012018;

// Required Moodle version
// 1.9.19 -> 2007101592 <-
// 2.0.10 -> 2011033010 <-
// 2.1.10 -> 2011070110
// 2.2.11 -> 2011120511
// 2.3.9  -> 2012062509
// 2.4.6  -> 2012120306
// 2.5.2  -> 2013051402 <-
// 2.6.0  -> 2013111800
$plugin->requires  = 2013051400;

// Full name of the plugin (used for diagnostics)
$plugin->component = 'theme_aigne';

// Theme based on...
// 1.9.x version -> N/A
// 2.0.x version -> 2011033000
// 2.5.x version -> 2013050100
$plugin->dependencies = array(
    'theme_base'  => 2013050100,
);

// Software maturity level
$plugin->maturity = MATURITY_STABLE;

// User-friendly version number
$plugin->release = '1.8.0';

//END OF FILE
