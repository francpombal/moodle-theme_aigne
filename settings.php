<?php
/**
 * settings
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die;

if ($CFG->branch > 24) {
    $versioned = true;
} else {
    $versioned = false;
}

if ($ADMIN->fulltree) {

//Theme admin page
    //$name = 'theme_aigne';
    //$heading = '';
    //$information = get_string('configtitle','theme_aigne');
    //$setting = new admin_settingpage($name, $heading, $information);
    //$settings->add($setting);

//Theme note box for all the settings pages
    $name = 'theme_aigne/notes';
    $heading = '';
    $information = get_string('notesdesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

// CSS and General Settings
    $name = 'theme_aigne/csshead';
    $heading = get_string('csshead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    //TODO: +theme_aigne/fontfam -> admin_setting_configselect -> 3 choices
    // Font Size setting
        $name = 'theme_aigne/bodyfont';
        $title = get_string('bodyfont','theme_aigne');
        $description = get_string('bodyfontdesc', 'theme_aigne');
        $default = '14';
        $choices = array(10=>'10px', 11=>'11px', 12=>'12px', 13=>'13px', 14=>'14px', 15=>'15px', 16=>'16px', 18=>'18px', 20=>'20px', 22=>'22px');
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Default CSS Colour Scheme <- PENDIENTE ARREGLAR
        $name = 'theme_aigne/colorsch';
        $title = get_string('colorsch' , 'theme_aigne');
        $css_color1 = get_string('css_color1', 'theme_aigne');
        $css_color2 = get_string('css_color2', 'theme_aigne');
        $css_color3 = get_string('css_color3', 'theme_aigne');
        $css_color4 = get_string('css_color4', 'theme_aigne');
        $css_color5 = get_string('css_color5', 'theme_aigne');
        $data = new stdClass;
        $data->css_color1 = $css_color1;
        $data->css_color2 = $css_color2;   
        $data->css_color3 = $css_color3;
        $data->css_color4 = $css_color4;
        $data->css_color5 = $css_color5;
        $description = get_string('colorschdesc', 'theme_aigne', $data);
        $default = '1';
        $choices = array('1'=>$css_color1, '2'=>$css_color2, '3'=>$css_color3, '4'=>$css_color4, '5'=>$css_color5);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
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
            $setting = new admin_setting_configtext($name, $title, $description, $default);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Background (Body Image) Position setting
        $name = 'theme_aigne/bgposition';
        $title = get_string('bgposition','theme_aigne');
        $description = get_string('bgpositiondesc', 'theme_aigne');
        $default = 'no-repeat';
        $choices = array('no-repeat'=>get_string('no-repeat','theme_aigne'), 'repeat'=>get_string('repeat','theme_aigne'), 'repeat-x'=>get_string('repeat-x','theme_aigne'), 'repeat-y'=>get_string('repeat-y','theme_aigne'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Background Colour setting
        $name = 'theme_aigne/backcolor';
        $title = get_string('backcolor', 'theme_aigne');
        $description = get_string('backcolordesc', 'theme_aigne');
        $default = '#FFFFFF';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);        
    // Custom CSS file
        $name = 'theme_aigne/customcss';
        $title = get_string('customcss', 'theme_aigne');
        $description = get_string('customcssdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep1', new lang_string('sep_bhr','theme_aigne'), ''));
// Logo Settings
    $name = 'theme_aigne/logohead';
    $heading = get_string('logohead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Logo file setting
        $name = 'theme_aigne/logo';
        $title = get_string('logo', 'theme_aigne');
        $description = get_string('logodesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Slogan Text (under logo)
        $name = 'theme_aigne/slogan';
        $title = get_string('slogan', 'theme_aigne');
        $description = get_string('slogandesc', 'theme_aigne');
        $default = get_string('sloganaigne', 'theme_aigne');
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);        
    // Background Logo file setting
        $name = 'theme_aigne/backlogo';
        $title = get_string('backlogo', 'theme_aigne');
        $description = get_string('backlogodesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'backlogo');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep2', new lang_string('sep_hr','theme_aigne'), ''));
// CEO Settings
    $name = 'theme_aigne/mtaghead';
    $heading = get_string('mtaghead', 'theme_aigne');
    $information = get_string('mtagheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Keywords Meta Tag Setting
        $name = 'theme_aigne/mtkeywords';
        $title = get_string('mtkeywords', 'theme_aigne');
        $description = get_string('mtkeywordsdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 3);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Description Meta Tag Setting
        $name = 'theme_aigne/mtdescription';
        $title = get_string('mtdescription', 'theme_aigne');
        $description = get_string('mtdescriptiondesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 3);  
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // OPTIONAL META TAGs _ Show
        $name = 'theme_aigne/optionalmtag';
        $title = get_string('optionalmtag','theme_aigne');
        $description = get_string('optionalmtagdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Custom META TAGs
        $name = 'theme_aigne/custommtag';
        $title = get_string('custommtag', 'theme_aigne');
        $description = get_string('custommtagdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default, PARAM_TEXT, 100, 5);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // COMPATIBILITY WITH 'Dublin Core Metadata Initiative' META TAGs _ Show
        $name = 'theme_aigne/dublinmtag';
        $title = get_string('dublinmtag','theme_aigne');
        $description = get_string('dublinmtagdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep3', new lang_string('sep_hr','theme_aigne'), ''));
// Marketing Settings
    $name = 'theme_aigne/marketinghead';
    $heading = get_string('marketinghead', 'theme_aigne');
    $information = get_string('marketingheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Header Information Image _ Show
        $name = 'theme_aigne/headbanner';
        $title = get_string('headbanner','theme_aigne');
        $description = get_string('headbannerdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Header Information Image setting
        $name = 'theme_aigne/headerinfo';
        $title = get_string('headerinfo', 'theme_aigne');
        $description = get_string('headerinfodesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'headerinfo');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // The Three FrontPage Box _ Show <- TODO -> not finished
        $name = 'theme_aigne/quadrobanner';
        $title = get_string('quadrobanner','theme_aigne');
        $description = get_string('quadrobannerdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
        
$settings->add(new admin_setting_heading('sep4', new lang_string('sep_bhr','theme_aigne'), ''));
// Cutom Menu Settings
    $name = 'theme_aigne/custommenuhead';
    $heading = get_string('custommenuhead', 'theme_aigne');
    $information = get_string('custommenudesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Menu colour base setting
        $name = 'theme_aigne/menucolor';
        $title = get_string('menucolor', 'theme_aigne');
        $description = get_string('menucolordesc', 'theme_aigne');
        $default = '#007EBA';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Menu colour contrast setting
        $name = 'theme_aigne/menucolorhl';
        $title = get_string('menucolorhl', 'theme_aigne');
        $description = get_string('menucolorhldesc', 'theme_aigne');
        $default = '#CCDDEE';
        $previewconfig = NULL;
        $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // logout option in custom menu _ Show
        $name = 'theme_aigne/menulogout';
        $title = get_string('menulogout','theme_aigne');
        $description = get_string('menulogoutdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
        
$settings->add(new admin_setting_heading('sep5', new lang_string('sep_bhr','theme_aigne'), ''));
// Navigation Bar (breadcrumbhead) Settings
    $name = 'theme_aigne/breadcrumbhead';
    $heading = get_string('breadcrumbhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
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
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep6', new lang_string('sep_bhr','theme_aigne'), ''));
// User Login Area Settings
    $name = 'theme_aigne/usernavhead';
    $heading = get_string('usernavhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
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
        $settings->add($setting);
//Descriptor for the following user nav settings
    $name = 'theme_aigne/usernavheaddesc';
    $heading = '';
    $information = get_string('usernavheaddesc', 'theme_aigne');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Greeting in User Login Area _ Show
        $name = 'theme_aigne/usernavsalut';
        $title = get_string('usernavsalut','theme_aigne');
        $description = get_string('usernavsalutdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Custom Welcome message in User Login Area _ Show
        $name = 'theme_aigne/welcomemsg';
        $title = get_string('welcomemsg','theme_aigne');
        $description = get_string('welcomemsgdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // User information in User Login Area _ Show
        $name = 'theme_aigne/usernavinfo';
        $title = get_string('usernavinfo','theme_aigne');
        $description = get_string('usernavinfodesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // User Picture in User Login Area _ Show
        $name = 'theme_aigne/usernavpic';
        $title = get_string('usernavpic','theme_aigne');
        $description = get_string('usernavpicdesc', 'theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Logout Buttom/Option in User Login Area _ Show
        $name = 'theme_aigne/usernavout';
        $title = get_string('usernavout','theme_aigne');
        $description = get_string('usernavoutdesc', 'theme_aigne');
        $default = '1';
        $choices = array(1=>get_string('outbutton','theme_aigne'), 2=>get_string('outmoodle','theme_aigne'), 3=>get_string('outnone','theme_aigne'));
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep20', new lang_string('sep_br','theme_aigne'), ''));
$settings->add(new admin_setting_heading('sep21', new lang_string('sep_br','theme_aigne'), ''));
// Bottom of page Settings _ Heading
    $name = 'theme_aigne/bottomphead';
    $heading = get_string('bottomphead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

$settings->add(new admin_setting_heading('sep22', new lang_string('sep_hr','theme_aigne'), ''));
// Navigation Help Bar Settings
    $name = 'theme_aigne/navhelphead';
    $heading = get_string('navhelphead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Navigation Help Page url
        $name = 'theme_aigne/navhelp';
        $title = get_string('navhelp','theme_aigne');
        $description = get_string('navhelpdesc', 'theme_aigne');
        $default = '/theme/aigne/layout/navhelp.php';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_PATH, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    //TODO: Make all the following options ONE -> admin_setting_configmulticheckbox2
    // webmap Link _ Show
        $name = 'theme_aigne/webmap';
        $title = get_string('webmap','theme_aigne');
        $description = get_string('webmapdesc', 'theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // help Link _ Show
        $name = 'theme_aigne/help';
        $title = get_string('help','theme_aigne');
        $description = get_string('helpdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // footsearch Link _ Show
        $name = 'theme_aigne/footsearch';
        $title = get_string('footsearch','theme_aigne');
        $description = get_string('footsearchdesc','theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // stats Link _ Show
        $name = 'theme_aigne/stats';
        $title = get_string('stats','theme_aigne');
        $description = get_string('statsdesc','theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // disclaimer Link _ Show
        $name = 'theme_aigne/disclaimer';
        $title = get_string('disclaimer','theme_aigne');
        $description = get_string('disclaimerdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // policies Link _ Show
        $name = 'theme_aigne/policies';
        $title = get_string('policies','theme_aigne');
        $description = get_string('policiesdesc','theme_aigne');
        $default = '0';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // privacy Link _ Show
        $name = 'theme_aigne/privacy';
        $title = get_string('privacy','theme_aigne');
        $description = get_string('privacydesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // security Link _ Show
        $name = 'theme_aigne/security';
        $title = get_string('security','theme_aigne');
        $description = get_string('securitydesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // accessibility Link _ Show
        $name = 'theme_aigne/accessibility';
        $title = get_string('accessibility','theme_aigne');
        $description = get_string('accessibilitydesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep23', new lang_string('sep_bhr','theme_aigne'), ''));
// Contact settings
    $name = 'theme_aigne/contacthead';
    $heading = get_string('contacthead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Corporation/Institution Web Site url setting
        $name = 'theme_aigne/corpweb';
        $title = get_string('corpweb', 'theme_aigne');
        $description = get_string('corpwebdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // email image setting _ To prevent spam copy of email info
        $name = 'theme_aigne/emailimg';
        $title = get_string('emailimg','theme_aigne');
        $description = get_string('emailimgdesc', 'theme_aigne');
        if ($versioned) { 
            $setting = new admin_setting_configstoredfile($name, $title, $description, 'emailimg');
        } else { 
            $default = '';
            $setting = new admin_setting_configtext($name, $title, $description, $default);
        }
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Skype url setting
        $name = 'theme_aigne/skype';
        $title = get_string('skype', 'theme_aigne');
        $description = get_string('skypedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Contact note setting
        $name = 'theme_aigne/contactnote';
        $title = get_string('contactnote','theme_aigne');
        $description = get_string('contactnotedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default, PARAM_RAW, 80, 15);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep24', new lang_string('sep_bhr','theme_aigne'), ''));
// Social Networks settings
    $name = 'theme_aigne/socialcontenthead';
    $heading = get_string('socialcontenthead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
//STORAGE:
    // Alfresco <-moodle repository
    // Amazon S3 <-moodle repository
    // box.net <-moodle repository
    // DropBox <-moodle repository -> https://www.dropbox.com/login ***
    // EQUELLA <-moodle repository
    // Google Docs <-moodle repository
    // Mahara ePortfolio <-moodle portfolio
    // Merlot.org <-moodle repository
//$settings->add(new admin_setting_heading('sep24b', new lang_string('sep_br2','theme_aigne'), ''));
//GENERAL CONTENT:
    // Wikimedia <-moodle repository -> http://www.wikimedia.com/ ***
//$settings->add(new admin_setting_heading('sep24c', new lang_string('sep_br2','theme_aigne'), ''));
// PHOTOS:
    // LOGO DayViews url setting (Svenska) -> http://dayviews.com/
        $name = 'theme_aigne/dayviews';
        $title = get_string('dayviews','theme_aigne');
        $description = get_string('dayviewsdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO Flickr url setting <-moodle repository -> http://www.flickr.com -> CANAL
        $name = 'theme_aigne/flickr';
        $title = get_string('flickr','theme_aigne');
        $description = get_string('flickrdesc','theme_aigne');
        $default = 'http://www.flickr.com/photos/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO FotoLog url setting (France) -> http://www.fotolog.com
        $name = 'theme_aigne/fotolog';
        $title = get_string('fotolog','theme_aigne');
        $description = get_string('fotologdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO Instagram url setting  -> http://instagram.com
        $name = 'theme_aigne/instagram';
        $title = get_string('instagram','theme_aigne');
        $description = get_string('instagramdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO Picasa url setting <-moodle repository -> http://picasa.google.com/
        $name = 'theme_aigne/picasa';
        $title = get_string('picasa','theme_aigne');
        $description = get_string('picasadesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO PixaBay url setting (Deutschland) -> http://pixabay.com/ -> CANAL
        $name = 'theme_aigne/pixabay';
        $title = get_string('pixabay','theme_aigne');
        $description = get_string('pixabaydesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // photobucket.com -> http://www.photobucket.com
    // imageShack -> http://imageshack.us
    // panoramio -> http://www.panoramio.com/
$settings->add(new admin_setting_heading('sep24d', new lang_string('sep_hr2','theme_aigne'), ''));
//VIDEO:
    // LOGO DailyMotion url setting (France) -> http://www.dailymotion.com
        $name = 'theme_aigne/dailymotion';
        $title = get_string('dailymotion','theme_aigne');
        $description = get_string('dailymotiondesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO SchoolTube url setting (USA) -> https://www.schooltube.com
        $name = 'theme_aigne/schooltube';
        $title = get_string('schooltube','theme_aigne');
        $description = get_string('schooltubedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // VideoLog url setting (Brasil) -> http://videolog.tv
        $name = 'theme_aigne/videolog';
        $title = get_string('videolog','theme_aigne');
        $description = get_string('videologdesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // LOGO Vimeo url setting -> https://vimeo.com/
        $name = 'theme_aigne/vimeo';
        $title = get_string('vimeo','theme_aigne');
        $description = get_string('vimeodesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // YouTube url setting -> http://www.youtube.com/ -> CANAL
        $name = 'theme_aigne/youtube';
        $title = get_string('youtube','theme_aigne');
        $description = get_string('youtubedesc','theme_aigne');
        $default = 'http://www.youtube.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // archive.org
    // nico nico douga (japan) - only in japanese -> http://www.nicovideo.jp/
    // rutube.ru - only in russian
    // video.yahoo.com <-
    // vision.ameba.jp - only in japanese
    // youku - only in chinese
$settings->add(new admin_setting_heading('sep24e', new lang_string('sep_hr2','theme_aigne'), ''));
// ART
    // deviantART url setting -> http://www.deviantart.com/
        $name = 'theme_aigne/deviantart';
        $title = get_string('deviantart','theme_aigne');
        $description = get_string('deviantartdesc','theme_aigne');
        $default = 'http://www.deviantart.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // myspace url setting
        $name = 'theme_aigne/myspace';
        $title = get_string('myspace','theme_aigne');
        $description = get_string('myspacedesc','theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep25', new lang_string('sep_bhr','theme_aigne'), ''));
// Social Networks settings
    $name = 'theme_aigne/socialhead';
    $heading = get_string('socialhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // LinkedIn url setting
        $name = 'theme_aigne/linkedin';
        $title = get_string('linkedin','theme_aigne');
        $description = get_string('linkedindesc','theme_aigne');
        $default = 'http://www.linkedin.com/in/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Yelp (Local Business)
    // Xing
    // Focus.com
$settings->add(new admin_setting_heading('sep25a', new lang_string('sep_hr2','theme_aigne'), ''));
    // Facebook url setting
        $name = 'theme_aigne/facebook';
        $title = get_string('facebook','theme_aigne');
        $description = get_string('facebookdesc','theme_aigne');
        $default = 'http://www.facebook.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Twitter url setting
        $name = 'theme_aigne/twitter';
        $title = get_string('twitter','theme_aigne');
        $description = get_string('twitterdesc','theme_aigne');
        $default = 'http://twitter.com/my_college';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
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
        $settings->add($setting);
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
        $settings->add($setting);
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
        $settings->add($setting);
    // Nimbuzz
$settings->add(new admin_setting_heading('sep25b', new lang_string('sep_hr2','theme_aigne'), ''));
    // Google+ url setting
        $name = 'theme_aigne/googleplus';
        $title = get_string('googleplus','theme_aigne');
        $description = get_string('googleplusdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL, 80);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // yahoo id
    // microsoft-MSN id
// DISABLED BLOGS
    // Tumblr url setting
    // Blogger url setting
    // LiveJournal (Russia)

$settings->add(new admin_setting_heading('sep30', new lang_string('sep_bhr','theme_aigne'), ''));
// Credits settings
    $name = 'theme_aigne/creditshead';
    $heading = get_string('creditshead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // moodlecredit _ Show
        $name = 'theme_aigne/moodlecredit';
        $title = get_string('moodlecredit','theme_aigne');
        $description = get_string('moodlecreditdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // moodledocslink _ Show
        $name = 'theme_aigne/moodledocslink';
        $title = get_string('moodledocslink','theme_aigne');
        $description = get_string('moodledocslinkdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // compatcredit _ Show
        $name = 'theme_aigne/compatcredit';
        $title = get_string('compatcredit','theme_aigne');
        $description = get_string('compatcreditdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
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
        $settings->add($setting);
    // tested compatibility _ Select
        $name = 'theme_aigne/compattested';
        $title = get_string('compattested','theme_aigne');
        $description = get_string('compattesteddesc', 'theme_aigne');
        $ctested_1 = get_string('ctested_1', 'theme_aigne');
        $ctested_2 = get_string('ctested_2', 'theme_aigne');
        $ctested_3 = get_string('ctested_3', 'theme_aigne');
        //$ctested_4 = get_string('ctested_4', 'theme_aigne');
        //$ctested_5 = get_string('ctested_5', 'theme_aigne');
        $default = '1,00';
        $choices = array('1'=>$ctested_1, '2'=>$ctested_2, '3'=>$ctested_3);
        $setting = new admin_setting_configmulticheckbox2($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // Foot note setting
        $name = 'theme_aigne/footnote';
        $title = get_string('footnote','theme_aigne');
        $description = get_string('footnotedesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default, PARAM_RAW, 80, 15);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

$settings->add(new admin_setting_heading('sep31', new lang_string('sep_bhr','theme_aigne'), ''));
// Cortesy settings
    $name = 'theme_aigne/cortesyhead';
    $heading = get_string('cortesyhead', 'theme_aigne');
    $information = '';
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    // Copyright setting.
        $name = 'theme_aigne/copyrightstg';
        $title = get_string('copyrightstg', 'theme_aigne');
        $description = get_string('copyrightstgdesc', 'theme_aigne');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_TEXT, 35);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // sitelicensemsg message _ Show
        $name = 'theme_aigne/sitelicensemsg';
        $title = get_string('sitelicensemsg','theme_aigne');
        $description = get_string('sitelicensemsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // lastmodifiedmsg message _ Show
        $name = 'theme_aigne/lastmodifiedmsg';
        $title = get_string('lastmodifiedmsg','theme_aigne');
        $description = get_string('lastmodifiedmsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);
    // thanksvisitmsg message _ Show
        $name = 'theme_aigne/thanksvisitmsg';
        $title = get_string('thanksvisitmsg','theme_aigne');
        $description = get_string('thanksvisitmsgdesc','theme_aigne');
        $default = '1';
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

}
