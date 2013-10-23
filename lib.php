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
// CSS Options
    // Set the font size -> body -> aigne_styles.css
    if (!empty($theme->settings->bodyfont)) {
        $bodyfont = $theme->settings->bodyfont;  
    } else {
        $bodyfont = '14';
    }
    $css = theme_aigne_set_bodyfont($css, $bodyfont);

    // Set the color Schema
    if (!empty($theme->settings->colorsch)) {
        $colorsch = $theme->settings->colorsch;  
    } else {
        $colorsch = '1';
    }
    $css = theme_aigne_set_colorsch($css, $colorsch);

    // Set the background image for the body _ FILE
    $backbody = $theme->setting_file_url('backbody', 'backbody');
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

    // Set custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_aigne_set_customcss($css, $customcss);

// Logo Options
    // Set the image for the logo _ FILE
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_aigne_set_logo($css, $logo);
   
    // Set the background image for the logo _ FILE
    $backlogo = $theme->setting_file_url('backlogo', 'backlogo');
    $css = theme_aigne_set_backlogo($css, $backlogo);

// Meta Tags options
    // Set Custom Meta Tags
    if (!empty($theme->settings->custommtag)) {
        $custommtag = $theme->settings->custommtag;
    } else {
        $custommtag = null;
    }
    $css = theme_aigne_set_custommtag($css, $custommtag);
    
// Frontpage _ Marketing Options
    // Set the frontpage header info image _ FILE
    $headerinfo = $theme->setting_file_url('headerinfo', 'headerinfo');
    $css = theme_aigne_set_headerinfo($css, $headerinfo);

// Custom Menu colours
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
    $emailimg = $theme->setting_file_url('emailimg', 'emailimg');
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
// CSS Options
    // Set the font size -> body -> aigne_styles.css
function theme_aigne_set_bodyfont($css, $bodyfont) {
    $tag = '[[setting:bodyfont]]';
    $css = str_replace($tag, $bodyfont.'px', $css);
    return $css;
}

    // Set the color Schema
function theme_aigne_set_colorsch($css, $colorsch) {
    switch ($colorsch) {
        case 1:
            $corsch_1 = '#322C65';
            $corsch_2 = '#007EBA';
            $corsch_3 = '#CCDDEE';
            $corsch_4 = '#F3F7FF';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#3C3C3C';
            break;
        case 2:
            $corsch_1 = '#F3F7FF';
            $corsch_2 = '#CCDDEE';
            $corsch_3 = '#322C65';
            $corsch_4 = '#000033';
            $corsch_5 = '#322C65';
            $corsch_B = '#322C65';
            $corsch_T = '#FFFFFF';
            break;
        case 3:
            $corsch_1 = '#001A1A';
            $corsch_2 = '#004040';
            $corsch_3 = '#4CA9BC';
            $corsch_4 = '#F2FFEB';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#3C3C3C';
            break;
        case 4:
            $corsch_1 = '#522500';
            $corsch_2 = '#EB8324';
            $corsch_3 = '#F6CC87';
            $corsch_4 = '#FFFFCC';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#3C3C3C';
            break;
        case 5:
            $corsch_1 = '#520000';
            $corsch_2 = '#AA0000';
            $corsch_3 = '#FFA6A6';
            $corsch_4 = '#FFF2F2';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#3C3C3C';
            break;
        default:
            $corsch_1 = '#322C65';
            $corsch_2 = '#007EBA';
            $corsch_3 = '#CCDDEE';
            $corsch_4 = '#F3F7FF';
            $corsch_5 = '#FFFFFF';
            $corsch_B = '#FFFFFF';
            $corsch_T = '#3C3C3C';
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

    // Set the background image for the body _ FILE
function theme_aigne_set_backbody($css, $backbody) {
    global $OUTPUT;
    $tag = '[[setting:backbody]]';
    $replacement = $backbody;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

    // Set the background image position
function theme_aigne_set_bgposition($css, $bgposition) {
    $tag = '[[setting:bgposition]]';
    $replacement = $bgposition;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

    // Set the background color
function theme_aigne_set_backcolor($css, $backcolor) {
    $tag = '[[setting:backcolor]]';
    $replacement = $backcolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

    // Set custom CSS
function theme_aigne_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $css = str_replace($tag, $customcss, $css);
    return $css;
}

// Logo Options
    // Set the image for the logo _ FILE
function theme_aigne_set_logo($css, $logo) {
    global $OUTPUT;
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('images/logo','theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
    
    // Set the background image for the logo _ FILE
function theme_aigne_set_backlogo($css, $backlogo) {
    global $OUTPUT;
    $tag = '[[setting:backlogo]]';
    $replacement = $backlogo;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('images/backlogo','theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// Meta Tags options
    // Set Custom Meta Tags
function theme_aigne_set_custommtag($css, $custommtag) {
    $tag = '[[setting:custommtag]]';
    $css = str_replace($tag, $custommtag, $css);
    return $css;
}

// Frontpage _ Marketing Options
    // Set the frontpage header info image _ FILE
function theme_aigne_set_headerinfo($css, $headerinfo) {
    global $OUTPUT;
    $tag = '[[setting:headerinfo]]';
    $replacement = $headerinfo;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('carroussel/trolley', 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// Custom Menu colours
    // Set the custom menu color
function theme_aigne_set_menucolor($css, $menucolor) {
    $tag = '[[setting:menucolor]]';
    $replacement = $menucolor;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
    
    // Set the highlight custom menu color
function theme_aigne_set_menucolorhl($css, $menucolorhl) {
    $tag = '[[setting:menucolorhl]]';
    $replacement = $menucolorhl;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// NavBar Separator Options
    // Set the BreadCrumb Navigation Separator
function theme_aigne_set_bcsep($css, $bcsep) {
    $tag = '[[setting:bcsep]]';
    $replacement = $bcsep;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// User Information Area Options
    // User Information Area Type
function theme_aigne_set_usernav($css, $usernav) {
    $tag = '[[setting:usernav]]';
    $replacement = $usernav;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

    // Logout Options
function theme_aigne_set_usernavout($css, $usernavout) {
    $tag = '[[setting:usernavout]]';
    $replacement = $usernavout;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// Contact Options
    // Set the eMail Image _ SPAM Protection _ FILE
function theme_aigne_set_emailimg($css, $emailimg) {
    global $OUTPUT;
    $tag = '[[setting:emailimg]]';
    $replacement = $emailimg;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// Credits Options
    // Accessibility tested
function theme_aigne_set_compatwai($css, $compatwai) {
    $tag = '[[setting:compatwai]]';
    $replacement = $compatwai;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

// Set the path to @font-face in aigne_style.css.
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

