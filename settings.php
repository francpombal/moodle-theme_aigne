<?php
/**
 * settings
 * 
 * @package    theme_aigne
 * @copyright  2013-2014 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * 
 * General Settings: 21
 * Head Settings: 19
 * Footer Settings: 78
 * Total Settings: 118 (grouped 90)
 *     
 */

// Null the standard construct for admin settings page
$settings = null;

defined('MOODLE_INTERNAL') || die;

// theme_aigne category
    $name = 'theme_aigne';
    $heading = get_string('pluginname','theme_aigne');
	$ADMIN->add('themes', new admin_category($name, $heading));

// ************************************************************************** //

// General Settings _ Page
    $name = 'theme_aigne_generalhead';
    $heading = get_string('generalhead', 'theme_aigne');
    $settemp = new admin_settingpage($name, $heading);

//Theme note box for all the settings pages
    $name = 'theme_aigne/note1';
    $heading = '';
    $information = get_string('notesdesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);

// CSS Settings _ Heading
    $name = 'theme_aigne/csshead';
    $heading = get_string('csshead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Font Size _ Setting 1_01
        $name = 'theme_aigne/bodyfont';
        $title = get_string('bodyfont','theme_aigne');
        $description = get_string('bodyfontdesc', 'theme_aigne');
        $default = '14';
        $choices = array(10=>'10px', 
                         11=>'11px', 
                         12=>'12px', 
                         13=>'13px', 
                         14=>'14px', 
                         15=>'15px', 
                         16=>'16px', 
                         18=>'18px', 
                         20=>'20px', 
                         22=>'22px');
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Font Family _ Setting 1_02
        $name = 'theme_aigne/fontfam';
        $title = get_string('fontfam','theme_aigne');
        $description = get_string('fontfamdesc', 'theme_aigne');
        $fontfam1 = get_string('fontfam1', 'theme_aigne');
        $fontfam2 = get_string('fontfam2', 'theme_aigne');
        $fontfam3 = get_string('fontfam3', 'theme_aigne');
        $fontfam4 = get_string('fontfam4', 'theme_aigne');
        $fontfam5 = get_string('fontfam5', 'theme_aigne');
        $default = $fontfam1;
        $choices = array('Eras Bk BT'=>$fontfam1, 
                         'eras'=>$fontfam2, 
                         'aftasans'=>$fontfam3, 
                         'Arial'=>$fontfam4, 
                         'Tahoma'=>$fontfam5);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Default CSS Colour Scheme _ Setting 1_03 _ TODO
        $name = 'theme_aigne/colorsch';
        $title = get_string('colorsch' , 'theme_aigne');
        $css_color1 = get_string('css_color1', 'theme_aigne');
        $css_color2 = get_string('css_color2', 'theme_aigne');
        $css_color3 = get_string('css_color3', 'theme_aigne');
        $css_color4 = get_string('css_color4', 'theme_aigne');
        $css_color5 = get_string('css_color5', 'theme_aigne');
        $css_color6 = get_string('css_color6', 'theme_aigne');
        $css_color7 = get_string('css_color7', 'theme_aigne');
        $data = new stdClass;
        $data->css_color1 = $css_color1;
        $data->css_color2 = $css_color2;   
        $data->css_color3 = $css_color3;
        $data->css_color4 = $css_color4;
        $data->css_color5 = $css_color5;
        $data->css_color6 = $css_color6;
        $data->css_color7 = $css_color7;
        $description = get_string('colorschdesc', 'theme_aigne', $data);
        $default = '1';
        $choices = array('1'=>$css_color1, 
                         '2'=>$css_color2, 
                         '3'=>$css_color3, 
                         '4'=>$css_color4, 
                         '5'=>$css_color5, 
                         '6'=>$css_color6, 
                         '7'=>$css_color7);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    //TODO: +theme_aigne/color1 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color2 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color3 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color4 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color5 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/fontcolor -> admin_setting_configcolourpicker
    // Background (Body Image) _ Setting 1_04
        $name = 'theme_aigne/backbody';
        $title = get_string('backbody', 'theme_aigne');
        $description = get_string('backbodydesc', 'theme_aigne'); 
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'backbody');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Background (Body Image) Repeat Position _ Setting 1_05
        $name = 'theme_aigne/bgrepeat';
        $title = get_string('bgrepeat','theme_aigne');
        $bgrepeat01 = get_string('bgrepeat01', 'theme_aigne');
        $bgrepeat02 = get_string('bgrepeat02', 'theme_aigne');
        $bgrepeat03 = get_string('bgrepeat03', 'theme_aigne');
        $bgrepeat04 = get_string('bgrepeat04', 'theme_aigne');
        $description = get_string('bgrepeatdesc', 'theme_aigne');
        $default = 'no-repeat';
        $choices = array('no-repeat'=>$bgrepeat01, 
                         'repeat'=>$bgrepeat02, 
                         'repeat-x'=>$bgrepeat03, 
                         'repeat-y'=>$bgrepeat04);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Background (Body Image) Static Position _ Setting 1_06.
        $name = 'theme_aigne/bgposition';
        $title = get_string('bgposition', 'theme_aigne');
        $bgposition00 = get_string('bgposition00', 'theme_aigne');
        $bgposition01 = get_string('bgposition01', 'theme_aigne');
        $bgposition02 = get_string('bgposition02', 'theme_aigne');
        $bgposition03 = get_string('bgposition03', 'theme_aigne');
        $bgposition04 = get_string('bgposition04', 'theme_aigne');
        $bgposition05 = get_string('bgposition05', 'theme_aigne');
        $bgposition06 = get_string('bgposition06', 'theme_aigne');
        $bgposition07 = get_string('bgposition07', 'theme_aigne');
        $bgposition08 = get_string('bgposition08', 'theme_aigne');
        $bgposition09 = get_string('bgposition09', 'theme_aigne');
        $bgposition10 = get_string('bgposition10', 'theme_aigne');
        $bgposition11 = get_string('bgposition11', 'theme_aigne');
        $bgposition12 = get_string('bgposition12', 'theme_aigne');
        $bgposition13 = get_string('bgposition13', 'theme_aigne');
        $bgposition14 = get_string('bgposition14', 'theme_aigne');
        $bgposition15 = get_string('bgposition15', 'theme_aigne');
        $description = get_string('bgpositiondesc', 'theme_aigne');
        $default = '0 0';
        $choices = array('0 0'=>$bgposition00,
                         'top'=>$bgposition01,
                         'center'=>$bgposition02,
                         'bottom'=>$bgposition03,
                         'left'=>$bgposition04,
                         'right'=>$bgposition05,
                         'left top'=>$bgposition06,
                         'center top'=>$bgposition07,
                         'right top'=>$bgposition08,
                         'left center'=>$bgposition09,
                         'center center'=>$bgposition10,
                         'right center'=>$bgposition11,
                         'left bottom'=>$bgposition12,
                         'center bottom'=>$bgposition13,
                         'right bottom'=>$bgposition14,
                         '50% 50%'=>$bgposition15);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Background Colour _ Setting 1_07
        $name = 'theme_aigne/backcolor';
        $title = get_string('backcolor', 'theme_aigne');
        $description = get_string('backcolordesc', 'theme_aigne');
        $default = '#FFFFFF';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Link letter spacing efect _ Setting 1_08
        $name = 'theme_aigne/aletters';
        $title = get_string('aletters','theme_aigne');
        $description = get_string('alettersdesc', 'theme_aigne');
        $default = 'normal';
        $choices = array('normal'=>get_string('alettersno','theme_aigne'), 
                         1=>'1px', 
                         2=>'2px', 
                         3=>'3px', 
                         4=>'4px', 
                         5=>'5px');
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Custom CSS file _ Setting 1_09
        $name = 'theme_aigne/customcss';
        $title = get_string('customcss', 'theme_aigne');
        $description = get_string('customcssdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// CEO Settings
    $name = 'theme_aigne/mtaghead';
    $heading = get_string('mtaghead', 'theme_aigne');
    $information = get_string('mtagheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Keywords Meta Tag Setting _ Setting 1_10
        $name = 'theme_aigne/mtkeywords';
        $title = get_string('mtkeywords', 'theme_aigne');
        $description = get_string('mtkeywordsdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 3);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Description Meta Tag _ Setting 1_11
        $name = 'theme_aigne/mtdescription';
        $title = get_string('mtdescription', 'theme_aigne');
        $description = get_string('mtdescriptiondesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 3);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // OPTIONAL META TAGs _ Show _ Setting 1_12
        $name = 'theme_aigne/optionalmtag';
        $title = get_string('optionalmtag','theme_aigne');
        $description = get_string('optionalmtagdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Custom META TAGs _ Setting 1_13
        $name = 'theme_aigne/custommtag';
        $title = get_string('custommtag', 'theme_aigne');
        $description = get_string('custommtagdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, 100, 5);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // COMPATIBILITY WITH 'Dublin Core Metadata Initiative' META TAGs _ Show _ Setting 1_14
        $name = 'theme_aigne/dublinmtag';
        $title = get_string('dublinmtag','theme_aigne');
        $description = get_string('dublinmtagdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Marketing Settings
    $name = 'theme_aigne/marketinghead';
    $heading = get_string('marketinghead', 'theme_aigne');
    $information = get_string('marketingheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // The FrontPage Banner _ Setting 1_15
        $name = 'theme_aigne/headbanner';
        $title = get_string('headbanner', 'theme_aigne');
        $description = get_string('headbannerdesc', 'theme_aigne');
        $banner0 = get_string('infobanner0', 'theme_aigne');
        $banner1 = get_string('infobanner1', 'theme_aigne');
        $banner2 = get_string('infobanner2', 'theme_aigne');
        $banner3 = get_string('infobanner3', 'theme_aigne');
        $banner4 = get_string('infobanner4', 'theme_aigne');
        $banner5 = get_string('infobanner5', 'theme_aigne');
        $banner6 = get_string('infobanner6', 'theme_aigne');
        $default = '0';
        $choices = array(0=>$banner0, 
                         1=>$banner1, 
                         2=>$banner2,
                         3=>$banner3, 
                         4=>$banner4, 
                         5=>$banner5);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // The FrontPage Box Information _ Setting 1_16
        $name = 'theme_aigne/infobanner';
        $title = get_string('infobanner','theme_aigne');
        $description = get_string('infobannerdesc', 'theme_aigne');
        $banner0 = get_string('infobanner0', 'theme_aigne');
        $banner1 = get_string('infobanner1', 'theme_aigne');
        $banner2 = get_string('infobanner2', 'theme_aigne');
        $banner3 = get_string('infobanner3', 'theme_aigne');
        $banner4 = get_string('infobanner4', 'theme_aigne');
        $banner5 = get_string('infobanner5', 'theme_aigne');
        $banner6 = get_string('infobanner6', 'theme_aigne');
        $default = '4';
        $choices = array(0=>$banner0, 
                         1=>$banner1, 
                         2=>$banner2,
                         3=>$banner3, 
                         4=>$banner4, 
                         5=>$banner5);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // The FrontPage Banner Information Image _ Setting 1_17
        $name = 'theme_aigne/headerinfo';
        $title = get_string('headerinfo', 'theme_aigne');
        $description = get_string('headerinfodesc', 'theme_aigne');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'headerinfo');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Moodle Format Settings _ Heading
    $name = 'theme_aigne/moodlehead';
    $heading = get_string('moodlehead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Grid Format for Categories List _ Setting 1_18
        $name = 'theme_aigne/catstyle';
        $title = get_string('catstyle','theme_aigne');
        $description = get_string('catstyledesc', 'theme_aigne');
        $default = '0';
        $choices = array(0=>get_string('catstyle1', 'theme_aigne'), 
                         1=>get_string('catstyle2', 'theme_aigne'),
                         2=>get_string('catstyle3', 'theme_aigne'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Content Only in course page _ Show _ Setting 1_19
        $name = 'theme_aigne/contentcur';
        $title = get_string('contentcur','theme_aigne');
        $description = get_string('contentcurdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Content Only in activity page _ Show _ Setting 1_20
        $name = 'theme_aigne/contentact';
        $title = get_string('contentact','theme_aigne');
        $description = get_string('contentactdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Display mode of the Activity Head on moodle 2.7 version _ Show _ Setting 1_21
        $name = 'theme_aigne/headactivity';
        $title = get_string('headactivity','theme_aigne');
        $description = get_string('headactivitydesc', 'theme_aigne');
        $default = 'block';
        $choices = array('block'=>get_string('yes', 'moodle'),
                         'none'=>get_string('no', 'moodle'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Display author info & row options in Site News Forum _ Show _ Setting 1_21
        $name = 'theme_aigne/sitenewsi';
        $title = get_string('sitenewsi','theme_aigne');
        $description = get_string('sitenewsidesc', 'theme_aigne');
        $default = 'none';
        $choices = array('none'=>get_string('no', 'moodle'), 
                         'block'=>get_string('yes', 'moodle'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

    $ADMIN->add('theme_aigne', $settemp);

// ************************************************************************** //

// Header Settings _ Page
    $name = 'theme_aigne_headerhead';
    $heading = get_string('headerhead', 'theme_aigne');
    $settemp = new admin_settingpage($name, $heading);

//Theme note box for all the settings pages
    $name = 'theme_aigne/note2';
    $heading = '';
    $information = get_string('notesdesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);

// Logo Settings
    $name = 'theme_aigne/logohead';
    $heading = get_string('logohead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Logo file _ Setting 2_01
        $name = 'theme_aigne/logo';
        $title = get_string('logo', 'theme_aigne');
        $description = get_string('logodesc', 'theme_aigne');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Slogan Text (under logo) _ Setting 2_02
        $name = 'theme_aigne/slogan';
        $title = get_string('slogan', 'theme_aigne');
        $description = get_string('slogandesc', 'theme_aigne');
        $default = get_string('sloganaigne', 'theme_aigne');
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);        
    // Background Logo file setting _ Setting 2_03
        $name = 'theme_aigne/backlogo';
        $title = get_string('backlogo', 'theme_aigne');
        $description = get_string('backlogodesc', 'theme_aigne');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'backlogo');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Icon file setting _ Setting 2_04 _ TODO
        //$name = 'theme_aigne/icon';
        //$title = get_string('icon', 'theme_aigne');
        //$description = get_string('icondesc', 'theme_aigne');
        //$setting = new admin_setting_configstoredfile($name, $title, $description, 'icon');
        //$setting->set_updatedcallback('theme_reset_all_caches');
        //$settemp->add($setting);

// Cutom Menu Settings
    $name = 'theme_aigne/custommenuhead';
    $heading = get_string('custommenuhead', 'theme_aigne');
    $information = get_string('custommenudesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Menu colour base _ Setting 2_05
        $name = 'theme_aigne/menucolor';
        $title = get_string('menucolor', 'theme_aigne');
        $description = get_string('menucolordesc', 'theme_aigne');
        $default = '#007EBA';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Menu colour contrast _ Setting 2_06
        $name = 'theme_aigne/menucolorhl';
        $title = get_string('menucolorhl', 'theme_aigne');
        $description = get_string('menucolorhldesc', 'theme_aigne');
        $default = '#CCDDEE';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Display 'logout' option in custom menu _ Show _ Setting 2_07
        $name = 'theme_aigne/menulogout';
        $title = get_string('menulogout','theme_aigne');
        $description = get_string('menulogoutdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Display 'Dashboard' option in custom menu _ Show <- TODO _ Setting 2_08
        //$name = 'theme_aigne/menudashboard';
        //$title = get_string('menudashboard','theme_aigne');
        //$description = get_string('menudashboarddesc', 'theme_aigne');
        //$default = '0';
        //$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        //$setting->set_updatedcallback('theme_reset_all_caches');
        //$settemp->add($setting);
    // Display 'My courses' option in custom menu _ Show <- TODO _ Setting 2_09
        //$name = 'theme_aigne/menucourses';
        //$title = get_string('menucourses','theme_aigne');
        //$description = get_string('menucoursesdesc', 'theme_aigne');
        //$default = '1';
        //$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        //$setting->set_updatedcallback('theme_reset_all_caches');
        //$settemp->add($setting);

// Navigation Bar (breadcrumbhead) Settings
    $name = 'theme_aigne/breadcrumbhead';
    $heading = get_string('breadcrumbhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // BreadCrumb Navigation Seperator _ Setting 2_10
        $name = 'theme_aigne/bcsep';
        $title = get_string('bcsep' , 'theme_aigne');
        $description = get_string('bcsepdesc', 'theme_aigne');
        $bcsep1 = get_string('bcsep1', 'theme_aigne');
        $bcsep2 = get_string('bcsep2', 'theme_aigne');
        $bcsep3 = get_string('bcsep3', 'theme_aigne');
        $bcsep4 = get_string('bcsep4', 'theme_aigne');
        $bcsep5 = get_string('bcsep5', 'theme_aigne');
        $bcsep6 = get_string('bcsep6', 'theme_aigne');
        $bcsep7 = get_string('bcsep7', 'theme_aigne');
        $default = '►';
        $choices = array('►'=>$bcsep1, 
                         '»'=>$bcsep2, 
                         '|'=>$bcsep3, 
                         '/'=>$bcsep4, 
                         '_'=>$bcsep5, 
                         ':::'=>$bcsep6, 
                         '     '=>$bcsep7);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// User Login Area Settings _ Setting 2_11
    $name = 'theme_aigne/usernavhead';
    $heading = get_string('usernavhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // User Login Area _ Show
        $name = 'theme_aigne/usernav';
        $title = get_string('usernav','theme_aigne');
        $description = get_string('usernavdesc', 'theme_aigne');
        $default = '2';
        $choices = array(1 => get_string('useraigne','theme_aigne'), 
                         2 => get_string('userblock','theme_aigne'), 
                         3 => get_string('usermoodle','theme_aigne'), 
                         4 => get_string('usernone','theme_aigne'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

//Descriptor for the following user nav
    $name = 'theme_aigne/usernavheaddesc';
    $heading = '';
    $information = get_string('usernavheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Greeting _ Show _ Setting 2_12
        $name = 'theme_aigne/usernavsalut';
        $title = get_string('usernavsalut','theme_aigne');
        $description = get_string('usernavsalutdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Custom Welcome message _ Setting 2_13
        $name = 'theme_aigne/welcomemsg';
        $title = get_string('welcomemsg','theme_aigne');
        $description = '';
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
/* TODO TODO TODO
    // Date 1 message _ datemessage _ Setting 2_14
        $name = 'theme_aigne/datemessage';
        $title = get_string('datemessage','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, '', $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Date 1 message _ datestart _ Setting 2_15
        $name = 'theme_aigne/datestart';
        $title = get_string('datestart','theme_aigne');
        $default = '15/12/2013';
        $setting = new admin_setting_configtext($name, $title, '', $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Date 1 message _ datefinis _ Setting 2_16
        $name = 'theme_aigne/datefinis';
        $title = get_string('datefinis','theme_aigne');
        $default = '26/12/2013';
        $setting = new admin_setting_configtext($name, $title, '', $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
*/
    // User information _ Show _ Setting 2_17
        $name = 'theme_aigne/usernavinfo';
        $title = get_string('usernavinfo','theme_aigne');
        $description = get_string('usernavinfodesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // User Picture _ Show _ Setting 2_18
        $name = 'theme_aigne/usernavpic';
        $title = get_string('usernavpic','theme_aigne');
        $description = get_string('usernavpicdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Logout Buttom/Option _ Setting 2_19
        $name = 'theme_aigne/usernavout';
        $title = get_string('usernavout','theme_aigne');
        $description = get_string('usernavoutdesc', 'theme_aigne');
        $default = '1';
        $choices = array(1=>get_string('outbutton','theme_aigne'), 
                         2=>get_string('outmoodle','theme_aigne'), 
                         3=>get_string('outnone','theme_aigne'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

    $ADMIN->add('theme_aigne', $settemp);

// ************************************************************************** //
    
// Bottom of page Settings _ Heading
    $name = 'theme_aigne_bottomphead';
    $heading = get_string('bottomphead', 'theme_aigne');
    $settemp = new admin_settingpage($name, $heading);

//Theme note box for all the settings pages
    $name = 'theme_aigne/note3';
    $heading = '';
    $information = get_string('notesdesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);

// Navigation Help Bar Settings
    $name = 'theme_aigne/navhelphead';
    $heading = get_string('navhelphead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Navigation Help Page url _ Setting 3_01
        $name = 'theme_aigne/navhelp';
        $title = get_string('navhelp','theme_aigne');
        $description = get_string('navhelpdesc', 'theme_aigne');
        $default = '/theme/aigne/layout/navhelp.php';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_PATH, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // tested compatibility _ Setting 3_02
        $name = 'theme_aigne/navhelplinks';
        $title = get_string('navhelplinks','theme_aigne');
        $description = get_string('navhelplinksdesc', 'theme_aigne');
        $nav_0 = get_string('moodledocsdesc','theme_aigne');
        $nav_1 = get_string('helpdesc', 'theme_aigne');
        $nav_2 = get_string('webmapdesc', 'theme_aigne');
        $nav_3 = get_string('footsearchdesc', 'theme_aigne');
        $nav_4 = get_string('statsdesc', 'theme_aigne');
        $nav_5 = get_string('disclaimerdesc', 'theme_aigne');
        $nav_6 = get_string('policiesdesc', 'theme_aigne');
        $nav_7 = get_string('privacydesc', 'theme_aigne');
        $nav_8 = get_string('securitydesc', 'theme_aigne');
        $nav_9 = get_string('accessibilitydesc', 'theme_aigne');
        $default = '1100010001';
        $choices = array('0'=>$nav_0, 
                         '1'=>$nav_1, 
                         '2'=>$nav_2, 
                         '3'=>$nav_3, 
                         '4'=>$nav_4, 
                         '5'=>$nav_5, 
                         '6'=>$nav_6, 
                         '7'=>$nav_7, 
                         '8'=>$nav_8, 
                         '9'=>$nav_9);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Contact settings
    $name = 'theme_aigne/contacthead';
    $heading = get_string('contacthead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Corporation/Institution Web Site url _ Setting 3_12
        $name = 'theme_aigne/corpweb';
        $title = get_string('corpweb', 'theme_aigne');
        $description = get_string('corpwebdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // email image _ To prevent spam copy of email info _ Setting 3_13
        $name = 'theme_aigne/emailimg';
        $title = get_string('emailimg','theme_aigne');
        $description = get_string('emailimgdesc', 'theme_aigne');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'emailimg');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Skype url _ Setting 3_14
        $name = 'theme_aigne/skype';
        $title = get_string('skype', 'theme_aigne');
        $description = get_string('skypedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Contact note _ Setting 3_15
        $name = 'theme_aigne/contactnote';
        $title = get_string('contactnote','theme_aigne');
        $description = get_string('contactnotedesc', 'theme_aigne');
        $default = 'São Paulo - Brasil';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default, PARAM_RAW, 80, 15);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Map (Google maps / Bing Maps) url _ Setting 3_16
        $name = 'theme_aigne/maplink';
        $title = get_string('maplink', 'theme_aigne');
        $description = get_string('maplinkdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
// Social Networks settings
    $name = 'theme_aigne/socialcontenthead';
    $heading = get_string('socialcontenthead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
//STORAGE:
    // Alfresco <-moodle repository
    // Amazon S3 <-moodle repository
    // box.net <-moodle repository
    // DropBox <-moodle repository -> https://www.dropbox.com/login ***
    // EQUELLA <-moodle repository
    // Google Docs <-moodle repository
    // Mahara ePortfolio <-moodle portfolio
    // Merlot.org <-moodle repository
//GENERAL CONTENT:
    // Wikimedia <-moodle repository -> http://www.wikimedia.com/ ***
// PHOTOS:
    // DayViews url (Svenska) -> http://dayviews.com/ _ Setting 3_17
        $name = 'theme_aigne/dayviews';
        $title = get_string('dayviews','theme_aigne');
        $description = get_string('dayviewsdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Flickr url <-moodle repository -> http://www.flickr.com _ Setting 3_18
        $name = 'theme_aigne/flickr';
        $title = get_string('flickr','theme_aigne');
        $description = get_string('flickrdesc','theme_aigne');
        $default = 'http://www.flickr.com/photos/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // FotoLog url (France) -> http://www.fotolog.com _ Setting 3_19
        $name = 'theme_aigne/fotolog';
        $title = get_string('fotolog','theme_aigne');
        $description = get_string('fotologdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Instagram url  -> http://instagram.com _ Setting 3_20
        $name = 'theme_aigne/instagram';
        $title = get_string('instagram','theme_aigne');
        $description = get_string('instagramdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Panoramio url (Spain-USA) -> http://www.panoramio.com _ Setting 3_21
        $name = 'theme_aigne/panoramio';
        $title = get_string('panoramio','theme_aigne');
        $description = get_string('panoramiodesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Picasa url <-moodle repository -> http://picasa.google.com/ _ Setting 3_22
        $name = 'theme_aigne/picasa';
        $title = get_string('picasa','theme_aigne');
        $description = get_string('picasadesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // PixaBay url (Deutschland) -> http://pixabay.com/ _ Setting 3_23
        $name = 'theme_aigne/pixabay';
        $title = get_string('pixabay','theme_aigne');
        $description = get_string('pixabaydesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Photobucket url () -> http://www.photobucket.com _ Setting 3_24
        $name = 'theme_aigne/photobucket';
        $title = get_string('photobucket','theme_aigne');
        $description = get_string('photobucketdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // imageShack -> http://imageshack.us -> PAYED
$settemp->add(new admin_setting_heading('sep21d', new lang_string('sep_br','theme_aigne'), ''));
//VIDEO:
    // DailyMotion url (France) -> http://www.dailymotion.com _ Setting 3_25
        $name = 'theme_aigne/dailymotion';
        $title = get_string('dailymotion','theme_aigne');
        $description = get_string('dailymotiondesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // SchoolTube url (USA) -> https://www.schooltube.com _ Setting 3_26
        $name = 'theme_aigne/schooltube';
        $title = get_string('schooltube','theme_aigne');
        $description = get_string('schooltubedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // VideoLog url (Brasil) -> http://videolog.tv _ Setting 3_27
        $name = 'theme_aigne/videolog';
        $title = get_string('videolog','theme_aigne');
        $description = get_string('videologdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Vimeo url -> https://vimeo.com/ _ Setting 3_28
        $name = 'theme_aigne/vimeo';
        $title = get_string('vimeo','theme_aigne');
        $description = get_string('vimeodesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // YouTube url -> http://www.youtube.com/ _ Setting 3_29
        $name = 'theme_aigne/youtube';
        $title = get_string('youtube','theme_aigne');
        $description = get_string('youtubedesc','theme_aigne');
        $default = 'http://www.youtube.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // nico nico douga -> ONLY in japanese -> http://www.nicovideo.jp/
    // rutube.ru -> ONLY in russian
    // vision.ameba.jp -> ONLY in japanese
    // youku -> ONLY in chinese
$settemp->add(new admin_setting_heading('sep22d', new lang_string('sep_br','theme_aigne'), ''));
// ART
    // deviantART url -> http://www.deviantart.com/ _ Setting 3_30
        $name = 'theme_aigne/deviantart';
        $title = get_string('deviantart','theme_aigne');
        $description = get_string('deviantartdesc','theme_aigne');
        $default = 'http://www.deviantart.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // myspace url _ Setting 3_31
        $name = 'theme_aigne/myspace';
        $title = get_string('myspace','theme_aigne');
        $description = get_string('myspacedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Social Networks settings
    $name = 'theme_aigne/socialhead';
    $heading = get_string('socialhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // LinkedIn url (USA) _ Setting 3_32
        $name = 'theme_aigne/linkedin';
        $title = get_string('linkedin','theme_aigne');
        $description = get_string('linkedindesc','theme_aigne');
        $default = 'http://www.linkedin.com/in/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Xing url (deutschland) _ Setting 3_33
        $name = 'theme_aigne/xing';
        $title = get_string('xing','theme_aigne');
        $description = get_string('xingdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Yelp url (USA) _ Setting 3_34
        $name = 'theme_aigne/yelp';
        $title = get_string('yelp','theme_aigne');
        $description = get_string('yelpdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

$settemp->add(new admin_setting_heading('sep23d', new lang_string('sep_br','theme_aigne'), ''));
    // Facebook url setting _ Setting 3_35
        $name = 'theme_aigne/facebook';
        $title = get_string('facebook','theme_aigne');
        $description = get_string('facebookdesc','theme_aigne');
        $default = 'http://www.facebook.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Twitter url setting _ Setting 3_36
        $name = 'theme_aigne/twitter';
        $title = get_string('twitter','theme_aigne');
        $description = get_string('twitterdesc','theme_aigne');
        $default = 'http://twitter.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Bebo
    // Classmates.com
    // FormSpring
    // FriendSter
    // Habbo
    // Hi5
    // LINE (Japan)
    // mixi (Japan)
    // NetLog (FaceBox/NetBox)
    // Nimbuzz
    // Odnoklassniki
    // Orkut url setting _ Setting 3_37
        $name = 'theme_aigne/orkut';
        $title = get_string('orkut','theme_aigne');
        $description = get_string('orkutdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Pinterest url setting _ Setting 3_38
        $name = 'theme_aigne/pinterest';
        $title = get_string('pinterest','theme_aigne');
        $description = get_string('pinterestdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Qzone (Tencent)(China)
    // Ren Ren (Xiaonei)(China)
    // Sonico.com
    // Tagged
    // Viadeo
    // VKontakte url setting _ Setting 3_39
        $name = 'theme_aigne/vkontakte';
        $title = get_string('vkontakte','theme_aigne');
        $description = get_string('vkontaktedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Weibo (China)

$settemp->add(new admin_setting_heading('sep24d', new lang_string('sep_br','theme_aigne'), ''));
    // AIM url _ Setting 3_40
        $name = 'theme_aigne/aim';
        $title = get_string('aim','theme_aigne');
        $description = get_string('aimdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Google+ url _ Setting 3_41
        $name = 'theme_aigne/googleplus';
        $title = get_string('googleplus','theme_aigne');
        $description = get_string('googleplusdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Microsoft url _ Setting 3_42
        $name = 'theme_aigne/microsoftid';
        $title = get_string('microsoftid','theme_aigne');
        $description = get_string('microsoftiddesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Openid url _ Setting 3_43
        $name = 'theme_aigne/openid';
        $title = get_string('openid','theme_aigne');
        $description = get_string('openiddesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Yahoo url _ Setting 3_44
        $name = 'theme_aigne/yahooid';
        $title = get_string('yahooid','theme_aigne');
        $description = get_string('yahooiddesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// DISABLED BLOGS
    // Tumblr url setting
    // Blogger url setting
    // LiveJournal (Russia)

$settemp->add(new admin_setting_heading('sep25d', new lang_string('sep_br','theme_aigne'), ''));
    // 1. Custom social url _ Setting 3_45
        $name = 'theme_aigne/social1url';
        $title = get_string('social1url','theme_aigne');
        $description = get_string('social1urldesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Social Icon for the 1. custom social url _ Setting 3_46
        $name = 'theme_aigne/social1ico';
        $title = get_string('social1ico','theme_aigne');
        $description = get_string('social1icodesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Credits settings
    $name = 'theme_aigne/creditshead';
    $heading = get_string('creditshead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // moodlecredit _ Show _ Setting 3_47
        $name = 'theme_aigne/moodlecredit';
        $title = get_string('moodlecredit','theme_aigne');
        $description = get_string('moodlecreditdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // compatcredit _ Show _ Setting 3_48
        $name = 'theme_aigne/compatcredit';
        $title = get_string('compatcredit','theme_aigne');
        $description = get_string('compatcreditdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
//Nota para aclarar las responsabilidades de usar estos iconos
    $name = 'theme_aigne/compatnote';
    $heading = '';
    $information = get_string('compatnotedesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Child + Woman + Race + Adult compatibility _ Setting 3_49
        $name = 'theme_aigne/compatsocial';
        $title = get_string('compatsocial','theme_aigne');
        $description = get_string('compatsocialdesc', 'theme_aigne');
        $csocial_0 = get_string('csocial_1', 'theme_aigne'); // child protect
        $csocial_1 = get_string('csocial_2', 'theme_aigne'); // eqqual woman
        $csocial_2 = get_string('csocial_3', 'theme_aigne'); // blind compliance
        //$csocial_3 = get_string('csocial_4', 'theme_aigne'); // racism free
        //$csocial_4 = get_string('csocial_5', 'theme_aigne'); // violence free
        $default = '011';
        $choices = array('0'=>$csocial_0, 
                         '1'=>$csocial_1, 
                         '2'=>$csocial_2);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Accessibility tested _ Setting 3_52
        $name = 'theme_aigne/compatwai';
        $title = get_string('compatwai' , 'theme_aigne');
        $description = get_string('compatwaidesc', 'theme_aigne');
        $compatwai1 = get_string('compatwai1', 'theme_aigne');
        $compatwai2 = get_string('compatwai2', 'theme_aigne');
        $compatwai3 = get_string('compatwai3', 'theme_aigne');
        $compatwai4 = get_string('compatwai4', 'theme_aigne');
        $default = '0';
        $choices = array('0'=>$compatwai1, 
                         '1'=>$compatwai2, 
                         '2'=>$compatwai3, 
                         '3'=>$compatwai4);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Programming compatibility _ Setting 3_56
        $name = 'theme_aigne/compattested';
        $title = get_string('compattested','theme_aigne');
        $description = get_string('compattesteddesc', 'theme_aigne');
        $ctested_0 = get_string('ctested_1', 'theme_aigne');
        $ctested_1 = get_string('ctested_2', 'theme_aigne');
        $ctested_2 = get_string('ctested_3', 'theme_aigne');
        $default = '100';
        $choices = array('0'=>$ctested_0, 
                         '1'=>$ctested_1, 
                         '2'=>$ctested_2);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Browser compatibility _ Setting 3_59
        $name = 'theme_aigne/compatbrowser';
        $title = get_string('compatbrowser','theme_aigne');
        $description = get_string('compatbrowserdesc', 'theme_aigne');
        $cbrowser_0 = get_string('browser_1', 'theme_aigne');
        $cbrowser_1 = get_string('browser_2', 'theme_aigne');
        $cbrowser_2 = get_string('browser_3', 'theme_aigne');
        $cbrowser_3 = get_string('browser_4', 'theme_aigne');
        $default = '1100';
        $choices = array('0'=>$cbrowser_0, 
                         '1'=>$cbrowser_1, 
                         '2'=>$cbrowser_2, 
                         '3'=>$cbrowser_3);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Operating System compatibility _ Setting 3_63
        $name = 'theme_aigne/compatos';
        $title = get_string('compatos','theme_aigne');
        //$description = get_string('compatosdesc', 'theme_aigne');
        $cosystem_0 = get_string('osystem_1', 'theme_aigne');
        $cosystem_1 = get_string('osystem_2', 'theme_aigne');
        $cosystem_2 = get_string('osystem_3', 'theme_aigne');
        $cosystem_3 = get_string('osystem_4', 'theme_aigne');
        $cosystem_4 = get_string('osystem_5', 'theme_aigne');
        $default = '00000';
        $choices = array('0'=>$cosystem_0, 
                         '1'=>$cosystem_1, 
                         '2'=>$cosystem_2, 
                         '3'=>$cosystem_3, 
                         '4'=>$cosystem_4);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Device compatibility _ Setting 3_68
        $name = 'theme_aigne/compatdevice';
        $title = get_string('compatdevice','theme_aigne');
        $description = get_string('compatdevicedesc', 'theme_aigne');
        $cdevice_0 = get_string('device_1', 'theme_aigne');
        $cdevice_1 = get_string('device_2', 'theme_aigne');
        $cdevice_2 = get_string('device_3', 'theme_aigne');
        $cdevice_3 = get_string('device_4', 'theme_aigne');
        $cdevice_4 = get_string('device_5', 'theme_aigne');
        $default = '01100';
        $choices = array('0'=>$cdevice_0, 
                         '1'=>$cdevice_1, 
                         '2'=>$cdevice_2, 
                         '3'=>$cdevice_3, 
                         '4'=>$cdevice_4);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Foot note _ Show _ Setting 3_73
        $name = 'theme_aigne/footnoteshow';
        $title = get_string('footnoteshow','theme_aigne');
        $description = get_string('footnoteshowdesc','theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Foot note _ Setting 3_74
        $name = 'theme_aigne/footnote';
        $title = get_string('footnote','theme_aigne');
        $description = get_string('footnotedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default, PARAM_RAW, 80, 15);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Cortesy settings
    $name = 'theme_aigne/cortesyhead';
    $heading = get_string('cortesyhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Copyright _ Setting 3_75
        $name = 'theme_aigne/copyrightstg';
        $title = get_string('copyrightstg', 'theme_aigne');
        $description = get_string('copyrightstgdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // sitelicensemsg message _ Show _ Setting 3_76
        $name = 'theme_aigne/sitelicensemsg';
        $title = get_string('sitelicensemsg','theme_aigne');
        $description = get_string('sitelicensemsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // lastmodifiedmsg message _ Show _ Setting 3_77
        $name = 'theme_aigne/lastmodifiedmsg';
        $title = get_string('lastmodifiedmsg','theme_aigne');
        $description = get_string('lastmodifiedmsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // thanksvisitmsg message _ Show _ Setting 3_78
        $name = 'theme_aigne/thanksvisitmsg';
        $title = get_string('thanksvisitmsg','theme_aigne');
        $description = get_string('thanksvisitmsgdesc','theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

    $ADMIN->add('theme_aigne', $settemp);

// ************************************************************************** //
