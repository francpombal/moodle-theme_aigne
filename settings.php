<?php
/**
 * settings
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Null the standard construct for admin settings page
$settings = null;

defined('MOODLE_INTERNAL') || die;

if ($CFG->branch > 24) {
    $versioned = true;
} else {
    $versioned = false;
}

//theme aigne category
    $name = 'theme_aigne';
    $heading = get_string('pluginname','theme_aigne');
	$ADMIN->add('themes', new admin_category($name, $heading));

// ************************************************************************** //

// General Settings _ Page
    $name = 'theme_aigne_generalhead';
    $heading = get_string('generalhead', 'theme_aigne');
    $settemp = new admin_settingpage($name, $heading);

//Theme note box for all the settings pages
    $name = 'theme_aigne/notes';
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
    // Font Size setting
        $name = 'theme_aigne/bodyfont';
        $title = get_string('bodyfont','theme_aigne');
        $description = get_string('bodyfontdesc', 'theme_aigne');
        $default = '14';
        $choices = array(10=>'10px', 11=>'11px', 12=>'12px', 13=>'13px', 14=>'14px', 15=>'15px', 16=>'16px', 18=>'18px', 20=>'20px', 22=>'22px');
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Font Family setting
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
    // Default CSS Colour Scheme <- PENDIENTE ARREGLAR
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
        $choices = array('1'=>$css_color1, '2'=>$css_color2, '3'=>$css_color3, '4'=>$css_color4, '5'=>$css_color5, '6'=>$css_color6, '7'=>$css_color7);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    //TODO: +theme_aigne/color1 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color2 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color3 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color4 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/color5 -> admin_setting_configcolourpicker
    //TODO: +theme_aigne/fontcolor -> admin_setting_configcolourpicker
    // Background (Body Image) setting
        $name = 'theme_aigne/backbody';
        $title = get_string('backbody','theme_aigne');
        $description = get_string('backbodydesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'backbody');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Background (Body Image) Position setting
        $name = 'theme_aigne/bgposition';
        $title = get_string('bgposition','theme_aigne');
        $description = get_string('bgpositiondesc', 'theme_aigne');
        $default = 'no-repeat';
        $choices = array('no-repeat'=>get_string('no-repeat','theme_aigne'), 'repeat'=>get_string('repeat','theme_aigne'), 'repeat-x'=>get_string('repeat-x','theme_aigne'), 'repeat-y'=>get_string('repeat-y','theme_aigne'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Background Colour setting
        $name = 'theme_aigne/backcolor';
        $title = get_string('backcolor', 'theme_aigne');
        $description = get_string('backcolordesc', 'theme_aigne');
        $default = '#FFFFFF';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Link letter spacing efect setting
        $name = 'theme_aigne/aletters';
        $title = get_string('aletters','theme_aigne');
        $description = get_string('alettersdesc', 'theme_aigne');
        $default = '1';
        $choices = array('normal'=>get_string('alettersno','theme_aigne'), 1=>'1px', 2=>'2px', 3=>'3px', 4=>'4px', 5=>'5px');
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Custom CSS file
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
    // Keywords Meta Tag Setting
        $name = 'theme_aigne/mtkeywords';
        $title = get_string('mtkeywords', 'theme_aigne');
        $description = get_string('mtkeywordsdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 3);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Description Meta Tag Setting
        $name = 'theme_aigne/mtdescription';
        $title = get_string('mtdescription', 'theme_aigne');
        $description = get_string('mtdescriptiondesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 3);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // OPTIONAL META TAGs _ Show
        $name = 'theme_aigne/optionalmtag';
        $title = get_string('optionalmtag','theme_aigne');
        $description = get_string('optionalmtagdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Custom META TAGs
        $name = 'theme_aigne/custommtag';
        $title = get_string('custommtag', 'theme_aigne');
        $description = get_string('custommtagdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_RAW, 100, 5);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // COMPATIBILITY WITH 'Dublin Core Metadata Initiative' META TAGs _ Show
        $name = 'theme_aigne/dublinmtag';
        $title = get_string('dublinmtag','theme_aigne');
        $description = get_string('dublinmtagdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Marketing Settings
    $name = 'theme_aigne/marketinghead';
    $heading = get_string('marketinghead', 'theme_aigne');
    $information = get_string('marketingheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Header Information Image _ Show
        $name = 'theme_aigne/headbanner';
        $title = get_string('headbanner','theme_aigne');
        $description = get_string('headbannerdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Header Information Image setting
        $name = 'theme_aigne/headerinfo';
        $title = get_string('headerinfo', 'theme_aigne');
        $description = get_string('headerinfodesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'headerinfo');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // The Three FrontPage Box _ Show
        $name = 'theme_aigne/infobanner';
        $title = get_string('infobanner','theme_aigne');
        $description = get_string('infobannerdesc', 'theme_aigne');
        $banner0 = get_string('infobanner0', 'theme_aigne');
        $banner1 = get_string('infobanner1', 'theme_aigne');
        $banner2 = get_string('infobanner2', 'theme_aigne');
        $banner3 = get_string('infobanner3', 'theme_aigne');
        $banner4 = get_string('infobanner4', 'theme_aigne');
        $default = '3';
        $choices = array(0=>$banner0, 1=>$banner1, 2=>$banner2, 3=>$banner3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Moodle Format Settings _ Heading
    $name = 'theme_aigne/moodlehead';
    $heading = get_string('moodlehead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    
    // Grid Format for Categories List _ Show
        $name = 'theme_aigne/catstyle';
        $title = get_string('catstyle','theme_aigne');
        $description = get_string('catstyledesc', 'theme_aigne');
        $default = '0';
        $choices = array(0=>get_string('catstyle1', 'theme_aigne'), 1=>get_string('catstyle2', 'theme_aigne'));
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
    $name = 'theme_aigne/notes';
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
    // Logo file setting
        $name = 'theme_aigne/logo';
        $title = get_string('logo', 'theme_aigne');
        $description = get_string('logodesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Slogan Text (under logo)
        $name = 'theme_aigne/slogan';
        $title = get_string('slogan', 'theme_aigne');
        $description = get_string('slogandesc', 'theme_aigne');
        $default = 'slogan';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);        
    // Background Logo file setting
        $name = 'theme_aigne/backlogo';
        $title = get_string('backlogo', 'theme_aigne');
        $description = get_string('backlogodesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'backlogo');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Cutom Menu Settings
    $name = 'theme_aigne/custommenuhead';
    $heading = get_string('custommenuhead', 'theme_aigne');
    $information = get_string('custommenudesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Menu colour base setting
        $name = 'theme_aigne/menucolor';
        $title = get_string('menucolor', 'theme_aigne');
        $description = get_string('menucolordesc', 'theme_aigne');
        $default = '#007EBA';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Menu colour contrast setting
        $name = 'theme_aigne/menucolorhl';
        $title = get_string('menucolorhl', 'theme_aigne');
        $description = get_string('menucolorhldesc', 'theme_aigne');
        $default = '#CCDDEE';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // logout option in custom menu _ Show
        $name = 'theme_aigne/menulogout';
        $title = get_string('menulogout','theme_aigne');
        $description = get_string('menulogoutdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Navigation Bar (breadcrumbhead) Settings
    $name = 'theme_aigne/breadcrumbhead';
    $heading = get_string('breadcrumbhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // BreadCrumb Navigation Seperator
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
        $choices = array('►'=>$bcsep1, '»'=>$bcsep2, '|'=>$bcsep3, '/'=>$bcsep4, '_'=>$bcsep5, ':::'=>$bcsep6, '     '=>$bcsep7);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// User Login Area Settings
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

//Descriptor for the following user nav settings
    $name = 'theme_aigne/usernavheaddesc';
    $heading = '';
    $information = get_string('usernavheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Greeting _ Show
        $name = 'theme_aigne/usernavsalut';
        $title = get_string('usernavsalut','theme_aigne');
        $description = get_string('usernavsalutdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Custom Welcome message
        $name = 'theme_aigne/welcomemsg';
        $title = get_string('welcomemsg','theme_aigne');
        $description = '';
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
/*
    // Date 1 message _ datemessage
        $name = 'theme_aigne/datemessage';
        $title = get_string('datemessage','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, '', $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Date 1 message _ datestart
        $name = 'theme_aigne/datestart';
        $title = get_string('datestart','theme_aigne');
        $default = '15/12/2013';
        $setting = new admin_setting_configtext($name, $title, '', $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Date 1 message _ datefinis
        $name = 'theme_aigne/datefinis';
        $title = get_string('datefinis','theme_aigne');
        $default = '26/12/2013';
        $setting = new admin_setting_configtext($name, $title, '', $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
*/
    // User information _ Show
        $name = 'theme_aigne/usernavinfo';
        $title = get_string('usernavinfo','theme_aigne');
        $description = get_string('usernavinfodesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // User Picture _ Show
        $name = 'theme_aigne/usernavpic';
        $title = get_string('usernavpic','theme_aigne');
        $description = get_string('usernavpicdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Logout Buttom/Option
        $name = 'theme_aigne/usernavout';
        $title = get_string('usernavout','theme_aigne');
        $description = get_string('usernavoutdesc', 'theme_aigne');
        $default = '1';
        $choices = array(1=>get_string('outbutton','theme_aigne'), 2=>get_string('outmoodle','theme_aigne'), 3=>get_string('outnone','theme_aigne'));
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
    $name = 'theme_aigne/notes';
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
    // Navigation Help Page url
        $name = 'theme_aigne/navhelp';
        $title = get_string('navhelp','theme_aigne');
        $description = get_string('navhelpdesc', 'theme_aigne');
        $default = '/theme/aigne/layout/navhelp.php';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_PATH, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // tested compatibility _ Select
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
        $default = '0100010111';
        $choices = array('0'=>$nav_0, '1'=>$nav_1, '2'=>$nav_2, '3'=>$nav_3, '4'=>$nav_4, '5'=>$nav_5, '6'=>$nav_6, '7'=>$nav_7, '8'=>$nav_8, '9'=>$nav_9);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

// Contact settings
    $name = 'theme_aigne/contacthead';
    $heading = get_string('contacthead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // Corporation/Institution Web Site url setting
        $name = 'theme_aigne/corpweb';
        $title = get_string('corpweb', 'theme_aigne');
        $description = get_string('corpwebdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // email image setting _ To prevent spam copy of email info
        $name = 'theme_aigne/emailimg';
        $title = get_string('emailimg','theme_aigne');
        $description = get_string('emailimgdesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'emailimg');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Skype url setting
        $name = 'theme_aigne/skype';
        $title = get_string('skype', 'theme_aigne');
        $description = get_string('skypedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Contact note setting
        $name = 'theme_aigne/contactnote';
        $title = get_string('contactnote','theme_aigne');
        $description = get_string('contactnotedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default, PARAM_RAW, 80, 15);
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
    // LOGO DayViews url setting (Svenska) -> http://dayviews.com/
        $name = 'theme_aigne/dayviews';
        $title = get_string('dayviews','theme_aigne');
        $description = get_string('dayviewsdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO Flickr url setting <-moodle repository -> http://www.flickr.com -> CANAL
        $name = 'theme_aigne/flickr';
        $title = get_string('flickr','theme_aigne');
        $description = get_string('flickrdesc','theme_aigne');
        $default = 'http://www.flickr.com/photos/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO FotoLog url setting (France) -> http://www.fotolog.com
        $name = 'theme_aigne/fotolog';
        $title = get_string('fotolog','theme_aigne');
        $description = get_string('fotologdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO Instagram url setting  -> http://instagram.com
        $name = 'theme_aigne/instagram';
        $title = get_string('instagram','theme_aigne');
        $description = get_string('instagramdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO Picasa url setting <-moodle repository -> http://picasa.google.com/
        $name = 'theme_aigne/picasa';
        $title = get_string('picasa','theme_aigne');
        $description = get_string('picasadesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO PixaBay url setting (Deutschland) -> http://pixabay.com/ -> CANAL
        $name = 'theme_aigne/pixabay';
        $title = get_string('pixabay','theme_aigne');
        $description = get_string('pixabaydesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // photobucket.com -> http://www.photobucket.com
    // imageShack -> http://imageshack.us
    // panoramio -> http://www.panoramio.com/
$settemp->add(new admin_setting_heading('sep24d', new lang_string('sep_br','theme_aigne'), ''));
//VIDEO:
    // LOGO DailyMotion url setting (France) -> http://www.dailymotion.com
        $name = 'theme_aigne/dailymotion';
        $title = get_string('dailymotion','theme_aigne');
        $description = get_string('dailymotiondesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO SchoolTube url setting (USA) -> https://www.schooltube.com
        $name = 'theme_aigne/schooltube';
        $title = get_string('schooltube','theme_aigne');
        $description = get_string('schooltubedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // VideoLog url setting (Brasil) -> http://videolog.tv
        $name = 'theme_aigne/videolog';
        $title = get_string('videolog','theme_aigne');
        $description = get_string('videologdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // LOGO Vimeo url setting -> https://vimeo.com/
        $name = 'theme_aigne/vimeo';
        $title = get_string('vimeo','theme_aigne');
        $description = get_string('vimeodesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // YouTube url setting -> http://www.youtube.com/ -> CANAL
        $name = 'theme_aigne/youtube';
        $title = get_string('youtube','theme_aigne');
        $description = get_string('youtubedesc','theme_aigne');
        $default = 'http://www.youtube.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // archive.org
    // nico nico douga (japan) - only in japanese -> http://www.nicovideo.jp/
    // rutube.ru - only in russian
    // video.yahoo.com <-
    // vision.ameba.jp - only in japanese
    // youku - only in chinese
$settemp->add(new admin_setting_heading('sep24d', new lang_string('sep_br','theme_aigne'), ''));
// ART
    // deviantART url setting -> http://www.deviantart.com/
        $name = 'theme_aigne/deviantart';
        $title = get_string('deviantart','theme_aigne');
        $description = get_string('deviantartdesc','theme_aigne');
        $default = 'http://www.deviantart.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // myspace url setting
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
    // LinkedIn url setting
        $name = 'theme_aigne/linkedin';
        $title = get_string('linkedin','theme_aigne');
        $description = get_string('linkedindesc','theme_aigne');
        $default = 'http://www.linkedin.com/in/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Yelp (Local Business)
    // Xing
    // Focus.com
$settemp->add(new admin_setting_heading('sep24d', new lang_string('sep_br','theme_aigne'), ''));
    // Facebook url setting
        $name = 'theme_aigne/facebook';
        $title = get_string('facebook','theme_aigne');
        $description = get_string('facebookdesc','theme_aigne');
        $default = 'http://www.facebook.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Twitter url setting
        $name = 'theme_aigne/twitter';
        $title = get_string('twitter','theme_aigne');
        $description = get_string('twitterdesc','theme_aigne');
        $default = 'http://twitter.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Weibo (China)
    // Qzone (Tencent)(China)
    // FormSpring
    // Habbo
    // VKontakte url setting
        $name = 'theme_aigne/vkontakte';
        $title = get_string('vkontakte','theme_aigne');
        $description = get_string('vkontaktedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Ren Ren (Xiaonei)(China)
    // Bebo
    // Tagged
    // Orkut url setting
        $name = 'theme_aigne/orkut';
        $title = get_string('orkut','theme_aigne');
        $description = get_string('orkutdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // NetLog (FaceBox/NetBox)
    // FriendSter
    // Hi5
    // Classmates.com
    // Sonico.com
    // Odnoklassniki
    // Viadeo
    // mixi (Japan)
    // LINE (Japan)
    // Pinterest url setting
        $name = 'theme_aigne/pinterest';
        $title = get_string('pinterest','theme_aigne');
        $description = get_string('pinterestdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Nimbuzz
$settemp->add(new admin_setting_heading('sep24d', new lang_string('sep_br','theme_aigne'), ''));
    // Google+ url setting
        $name = 'theme_aigne/googleplus';
        $title = get_string('googleplus','theme_aigne');
        $description = get_string('googleplusdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // yahoo id
    // microsoft-MSN id
// DISABLED BLOGS
    // Tumblr url setting
    // Blogger url setting
    // LiveJournal (Russia)

// Credits settings
    $name = 'theme_aigne/creditshead';
    $heading = get_string('creditshead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settemp->add($setting);
    // moodlecredit _ Show
        $name = 'theme_aigne/moodlecredit';
        $title = get_string('moodlecredit','theme_aigne');
        $description = get_string('moodlecreditdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // compatcredit _ Show
        $name = 'theme_aigne/compatcredit';
        $title = get_string('compatcredit','theme_aigne');
        $description = get_string('compatcreditdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Accessibility tested _ Select
        $name = 'theme_aigne/compatwai';
        $title = get_string('compatwai' , 'theme_aigne');
        $description = get_string('compatwaidesc', 'theme_aigne');
        $compatwai1 = get_string('compatwai1', 'theme_aigne');
        $compatwai2 = get_string('compatwai2', 'theme_aigne');
        $compatwai3 = get_string('compatwai3', 'theme_aigne');
        $compatwai4 = get_string('compatwai4', 'theme_aigne');
        $default = '1';
        $choices = array('1'=>$compatwai1, '2'=>$compatwai2, '3'=>$compatwai3, '4'=>$compatwai4);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // tested compatibility _ Select
        $name = 'theme_aigne/compattested';
        $title = get_string('compattested','theme_aigne');
        $description = get_string('compattesteddesc', 'theme_aigne');
        $ctested_0 = get_string('ctested_1', 'theme_aigne');
        $ctested_1 = get_string('ctested_2', 'theme_aigne');
        $ctested_2 = get_string('ctested_3', 'theme_aigne');
        //$ctested_3 = get_string('ctested_4', 'theme_aigne');
        //$ctested_4 = get_string('ctested_5', 'theme_aigne');
        $default = '100';
        $choices = array('0'=>$ctested_0, '1'=>$ctested_1, '2'=>$ctested_2);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // Foot note setting
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
    // Copyright setting.
        $name = 'theme_aigne/copyrightstg';
        $title = get_string('copyrightstg', 'theme_aigne');
        $description = get_string('copyrightstgdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // sitelicensemsg message _ Show
        $name = 'theme_aigne/sitelicensemsg';
        $title = get_string('sitelicensemsg','theme_aigne');
        $description = get_string('sitelicensemsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // lastmodifiedmsg message _ Show
        $name = 'theme_aigne/lastmodifiedmsg';
        $title = get_string('lastmodifiedmsg','theme_aigne');
        $description = get_string('lastmodifiedmsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);
    // thanksvisitmsg message _ Show
        $name = 'theme_aigne/thanksvisitmsg';
        $title = get_string('thanksvisitmsg','theme_aigne');
        $description = get_string('thanksvisitmsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settemp->add($setting);

    $ADMIN->add('theme_aigne', $settemp);

// ************************************************************************** //
