<?php
/**
 * lib
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();

/**
 * Makes the settings changes to the CSS
 *
 * @param string $css
 * @param theme_config $theme
 * @return string
 */
function theme_aigne_process_css($css, $theme) {
    global $OUTPUT;
// CSS Options
    // Set the font size -> body -> aigne_styles.css
    if (!empty($theme->settings->bodyfont)) {
        $bodyfont = $theme->settings->bodyfont;  
    } else {
        $bodyfont = '14';
    }
    $css = theme_aigne_set_bodyfont($css, $bodyfont);

    // Set the font family -> body -> aigne_styles.css
    if (!empty($theme->settings->fontfam)) {
        $fontfam = $theme->settings->fontfam;  
    } else {
        $fontfam = '"Eras Bk BT", eras, Helvetica, sans-serif';
    }
    $css = theme_aigne_set_fontfam($css, $fontfam);

    // Set the color Schema
    if (!empty($theme->settings->colorsch)) {
        $colorsch = $theme->settings->colorsch;  
    } else {
        $colorsch = '1';
    }
    $css = theme_aigne_set_colorsch($css, $colorsch);

    // Set the background image for the body _ FILE
    if (!empty($theme->settings->backbody)) {
        $backbody = $theme->setting_file_url('backbody', 'backbody');
    } else {
        $backbody = null;
    }
    $css = theme_aigne_set_backbody($css, $backbody);

    // Set the background image position
    if (!empty($theme->settings->bgposition)) {
       $bgposition = $theme->settings->bgposition;
    } else {
       $bgposition = 'no-repeat';
    }
    $css = theme_aigne_set_bgposition($css, $bgposition);

    // Set the background color
    if (!empty($theme->settings->backcolor)) {
        $backcolor = $theme->settings->backcolor;
    } else {
        $backcolor = '#FFFFFF';
    }
    $css = theme_aigne_set_backcolor($css, $backcolor);

    // Set the letter-spacing -> a:hover -> aigne_styles.css
    if (!empty($theme->settings->aletters)) {
        $aletters = $theme->settings->aletters;  
    } else {
        $aletters = '1';
    }
    $css = theme_aigne_set_aletters($css, $aletters);


    // Set custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_aigne_set_customcss($css, $customcss);

// CEO Settings
    // Set Custom Meta Tags
    if (!empty($theme->settings->custommtag)) {
        $custommtag = $theme->settings->custommtag;
    } else {
        $custommtag = null;
    }
    $css = theme_aigne_set_custommtag($css, $custommtag);

// Marketing Settings
    // Set the frontpage header info image _ FILE
    if (!empty($theme->settings->headerinfo)) {
        $headerinfo = $theme->setting_file_url('headerinfo', 'headerinfo');
    } else {
        $headerinfo = $OUTPUT->pix_url('carroussel/04', 'theme');
    }
    $css = theme_aigne_set_headerinfo($css, $headerinfo);

    // Set frontpage information style
    /*if (!empty($theme->settings->infobanner)) {
        $infobanner = $theme->settings->infobanner;  
    } else {
        $infobanner = '3';
    }
    $css = theme_aigne_set_infobanner($css, $infobanner);*/

// Moodle Format Settings
    // Set Grid Format for Categories List
    if (!empty($theme->settings->catstyle)) {
       $catstyle = $theme->settings->catstyle;
    } else {
       $catstyle = '0';
    }
    $css = theme_aigne_set_catstyle($css, $catstyle);

// Logo Options
    // Set the image for the logo _ FILE
    if (!empty($theme->settings->logo)) {
        $logo = $theme->setting_file_url('logo', 'logo');
    } else {
        $logo = $OUTPUT->pix_url('images/logo','theme');
    }
    $css = theme_aigne_set_logo($css, $logo);
   
    // Set the background image for the logo _ FILE
    if (!empty($theme->settings->backlogo)) {
        $backlogo = $theme->setting_file_url('backlogo', 'backlogo');
    } else {
        $backlogo = $OUTPUT->pix_url('images/backlogo','theme');
    }
    $css = theme_aigne_set_backlogo($css, $backlogo);

// Custom Menu Settings
    // Set the custom menu color
    if (!empty($theme->settings->menucolor)) {
        $menucolor = $theme->settings->menucolor;
    } else {
        $menucolor = '#007EBA';
    }
    $css = theme_aigne_set_menucolor($css, $menucolor);
    
    // Set the highlight custom menu color
    if (!empty($theme->settings->menucolorhl)) {
        $menucolorhl = $theme->settings->menucolorhl;
    } else {
        $menucolorhl = '#F3F7FF';
    }
    $css = theme_aigne_set_menucolorhl($css, $menucolorhl);

// NavBar Separator Options
    // Set the BreadCrumb Navigation Separator
    if (!empty($theme->settings->bcsep)) {
       $bcsep = $theme->settings->bcsep;
    } else {
       $bcsep = '►';
    }
    $css = theme_aigne_set_bcsep($css, $bcsep);

// User Information Area Options
    // User Information Area Type
    if (!empty($theme->settings->usernav)) {
       $usernav = $theme->settings->usernav;
    } else {
       $usernav = '2';
    }
    $css = theme_aigne_set_usernav($css, $usernav);

    // Logout Options
    if (!empty($theme->settings->usernavout)) {
       $usernavout = $theme->settings->usernavout;
    } else {
       $usernavout = '3';
    }
    $css = theme_aigne_set_usernavout($css, $usernavout);

// Contact Options
    // Set the eMail Image _ SPAM Protection _ FILE
    if (!empty($theme->settings->emailimg)) {
        $emailimg = $theme->setting_file_url('emailimg', 'emailimg');
    } else {
        $emailimg = null;
    }
    $css = theme_aigne_set_emailimg($css, $emailimg);

// Credits Options
    // Accessibility tested
    if (!empty($theme->settings->compatwai)) {
       $compatwai = $theme->settings->compatwai;
    } else {
       $compatwai = '4';
    }
    $css = theme_aigne_set_compatwai($css, $compatwai);

// Set the path to @font-face in aigne_style.css.
    $css = theme_aigne_set_fontface($css);

// End
    return $css;
}

/**
 * Adds objects to the CSS before it is cached.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_aigne_set_bodyfont($css, $bodyfont) {
    $tag = '[[setting:bodyfont]]';
    $css = str_replace($tag, $bodyfont.'px', $css);
    return $css;
}

function theme_aigne_set_fontfam($css, $fontfam) {
    $tag = '[[setting:fontfam]]';
    $css = str_replace($tag, $fontfam, $css);
    return $css;
}
    // FIXED COLOURS: RED_#CC0000 + BUTTON_BG_#D5E1DD
    // GREY_1: #777777
    // GREY_2: #CCCCCC
    // GREY_3: #E0E0E0
    // DISABLED ITEM: #AAAAAA
function theme_aigne_set_colorsch($css, $colorsch) {
    switch ($colorsch) {
        case 1: //BLUE _ aigne default
            $corsch_1 = '#322C65';
            $corsch_2 = '#007EBA';
            $corsch_3 = '#CCDDEE';
            $corsch_4 = '#F3F7FF';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#333333';
            break;
        case 2: //GREEN _ 
            $corsch_1 = '#004040';
            $corsch_2 = '#006666';
            $corsch_3 = '#00CC00';
            $corsch_4 = '#EEFFDD';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#333333';
            break;
        case 3: //ORANGE _ SPRING
            $corsch_1 = '#522500';
            $corsch_2 = '#EB8324';
            $corsch_3 = '#F6CC87';
            $corsch_4 = '#FFF7ED';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#333333';
            break;
        case 4: //RED _ SUMMER
            $corsch_1 = '#520000';
            $corsch_2 = '#AA0000';
            $corsch_3 = '#FFA6A6';
            $corsch_4 = '#FFEEFF';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#333333';
            break;
        case 5: //BROWN _ FALL _ WOOD
            $corsch_1 = '#520000';
            $corsch_2 = '#AA0000';
            $corsch_3 = '#FFA6A6';
            $corsch_4 = '#FFF2F2';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#333333';
            break;
        case 6: //GREY _ WINTER
            $corsch_1 = '#222222';
            $corsch_2 = '#666666';
            $corsch_3 = '#AAAAAA';
            $corsch_4 = '#F0F0F0';
            $corsch_5 = '#FBFBFB';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#000000';
            break;
        case 7: //CONTRAST BLUE _ 
            $corsch_1 = '#F3F7FF';
            $corsch_2 = '#CCDDEE';
            $corsch_3 = '#322C65';
            $corsch_4 = '#000033';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#322C65';
            $corsch_T = '#FFFFFF';
            break;
        default:
            $corsch_1 = '#322C65';
            $corsch_2 = '#007EBA';
            $corsch_3 = '#CCDDEE';
            $corsch_4 = '#F3F7FF';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#333333';
            break;
    }

    $tag = '[[setting:colorsch]]';

    $tagcs1 = '[[setting:corsch_1]]';
    $tagcs2 = '[[setting:corsch_2]]';
    $tagcs3 = '[[setting:corsch_3]]';
    $tagcs4 = '[[setting:corsch_4]]';
    $tagcs5 = '[[setting:corsch_5]]';
    $tagcsB = '[[setting:corsch_B]]';
    $tagcsT = '[[setting:corsch_T]]';

    $css = str_replace($tag, $colorsch, $css);
    $css = str_replace($tagcs1, $corsch_1, $css);
    $css = str_replace($tagcs2, $corsch_2, $css);
    $css = str_replace($tagcs3, $corsch_3, $css);
    $css = str_replace($tagcs4, $corsch_4, $css);
    $css = str_replace($tagcs5, $corsch_5, $css);
    $css = str_replace($tagcsB, $corsch_B, $css);
    $css = str_replace($tagcsT, $corsch_T, $css);
    return $css;
}
function theme_aigne_set_backbody($css, $backbody) { // _ FILE
    $tag = '[[setting:backbody]]';
    $css = str_replace($tag, $backbody, $css);
    return $css;
}
function theme_aigne_set_bgposition($css, $bgposition) {
    $tag = '[[setting:bgposition]]';
    $css = str_replace($tag, $bgposition, $css);
    return $css;
}
function theme_aigne_set_backcolor($css, $backcolor) {
    $tag = '[[setting:backcolor]]';
    $css = str_replace($tag, $backcolor, $css);
    return $css;
}
function theme_aigne_set_aletters($css, $aletters) {
    $tag = '[[setting:aletters]]';
    $css = str_replace($tag, $aletters.'px', $css);
    return $css;
}
function theme_aigne_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $css = str_replace($tag, $customcss, $css);
    return $css;
}
function theme_aigne_set_custommtag($css, $custommtag) {
    $tag = '[[setting:custommtag]]';
    $css = str_replace($tag, $custommtag, $css);
    return $css;
}
function theme_aigne_set_headerinfo($css, $headerinfo) { // _ FILE
    $tag = '[[setting:headerinfo]]';
    $css = str_replace($tag, $headerinfo, $css);
    return $css;
}
function theme_aigne_set_infobanner($css, $infobanner) {
    $tag = '[[setting:infobanner]]';
    $css = str_replace($tag, $infobanner, $css);
    return $css;
}
function theme_aigne_set_catstyle($css, $catstyle) {
    $tag = '[[setting:catstyle]]';
    $css = str_replace($tag, $catstyle, $css);
    return $css;
}
function theme_aigne_set_logo($css, $logo) { // _ FILE
    $tag = '[[setting:logo]]';
    $css = str_replace($tag, $logo, $css);
    return $css;
}
function theme_aigne_set_backlogo($css, $backlogo) { // _ FILE
    $tag = '[[setting:backlogo]]';
    $css = str_replace($tag, $backlogo, $css);
    return $css;
}
function theme_aigne_set_menucolor($css, $menucolor) {
    $tag = '[[setting:menucolor]]';
    $css = str_replace($tag, $menucolor, $css);
    return $css;
}
function theme_aigne_set_menucolorhl($css, $menucolorhl) {
    $tag = '[[setting:menucolorhl]]';
    $css = str_replace($tag, $menucolorhl, $css);
    return $css;
}
function theme_aigne_set_bcsep($css, $bcsep) {
    $tag = '[[setting:bcsep]]';
    $css = str_replace($tag, $bcsep, $css);
    return $css;
}
function theme_aigne_set_usernav($css, $usernav) {
    $tag = '[[setting:usernav]]';
    $css = str_replace($tag, $usernav, $css);
    return $css;
}
function theme_aigne_set_usernavout($css, $usernavout) {
    $tag = '[[setting:usernavout]]';
    $css = str_replace($tag, $usernavout, $css);
    return $css;
}
function theme_aigne_set_emailimg($css, $emailimg) { // _ FILE
    $tag = '[[setting:emailimg]]';
    $css = str_replace($tag, $emailimg, $css);
    return $css;
}
function theme_aigne_set_compatwai($css, $compatwai) {
    $tag = '[[setting:compatwai]]';
    $css = str_replace($tag, $compatwai, $css);
    return $css;
}
function theme_aigne_set_fontface($css) {
    global $CFG;
    $tag = '[[setting:fontroot]]';
    $replacement = $CFG->wwwroot.'/theme/aigne/fonts/';
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_aigne_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('aigne');
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } else if ($filearea === 'backlogo') {
            return $theme->setting_file_serve('backlogo', $args, $forcedownload, $options);
        } else if ($filearea === 'backbody') {
            return $theme->setting_file_serve('backbody', $args, $forcedownload, $options);
        } else if ($filearea === 'headerinfo') {
            return $theme->setting_file_serve('headerinfo', $args, $forcedownload, $options);                
        } else if ($filearea === 'emailimg') {
            return $theme->setting_file_serve('emailimg', $args, $forcedownload, $options);
        } else {
            send_file_not_found();
        }
    }
}

