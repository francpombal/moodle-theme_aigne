<?php
/**
 * theme_aigne config 
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// Name of the theme. Most likely the name of the directory in which this file resides.
$THEME->name = 'aigne';

// Determine if this theme is compliant with html5
//$THEME->doctype = 'html5';

// Which existing theme(s) in the /theme/ directory do you want this theme to extend.
$THEME->parents = array('base');

// An array of stylesheets not to inherit from the themes parents (We don't want these)
$THEME->parents_exclude_sheets = array('base'=>array(
    'pagelayout', 
    'blocks', 
    'calendar', 
    'dock', 
    'editor'
));

// An array of plugin sheets to ignore and not include.
// $THEME->plugins_exclude_sheets

// Categories List Style defined in Admin -> Apperance -> Themes -> AIGNE -> "catstyle"
    $catstyle = (empty($THEME->settings->catstyle)) ? false : ($THEME->settings->catstyle);
    switch ($catstyle) {
        case 0:
            $catstyle = '';
            break;
        case 1:
            $catstyle = 'aigne_cat1';
            break;
        default:
            $catstyle = '';
            break;
    }
// Name of the stylesheet(s) you've including in this theme's /styles/ directory.
$THEME->sheets = array(
    'aigne_pagelayout',  // Must come first: page layout
    'aigne_style',       // Must come second: default styles, including 'course', 'filemanager',
    'aigne_menu',
    'aigne_block',
    'aigne_mod',         // including 'calendar', 'glossary', 'forum', 'grade', (pending 'message', 'question',)
    'aigne_dialogue',    // Messages and Activities Selector
    $catstyle,
    'aigne_custom'
);

// An array of stylesheets to include within the body of the editor.
$THEME->editor_sheets = array('aigne_editor');

// These are all of the possible layouts in Moodle.
$THEME->layouts = array(
    // Most backwards compatible layout without the blocks
    // ► Logout Confirmation Message + Change password + Dividir mensaje en foro
    'base' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false, 
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>true, 'infobanner'=>false),         
    ),
    // Standard layout with blocks, this is recommended for most pages with default information
    // ► Viewing a profile + Viewing a calendar
    'standard' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>false, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>true, 'infobanner'=>false),                      
    ),
    // ► LOGIN PAGE
    'login' => array(
        'file' => 'default.php',
        'regions' => array(),
        'defaultregion' => '',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>true,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>false, 'infobanner'=>false),
    ),
    // The site home page.
    // ► Frontpage before and after login
    'frontpage' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>false, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>false, 'infobanner'=>true),
    ),
    // ► Help pages content, called by the Navigation Help Bar on the footer.
    'navhelppage' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>false, 'infobanner'=>false),
    ),   
    // ► Only categories list or courses list in specific category    
    'coursecategory' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>false, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>false, 'infobanner'=>false),
    ),
    // ► Main course page
    'course' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // Part of course, typical for modules
    // ► ACTIVITY OR RESOURCE PAGE
    // Intentar crear uno para SCORM + Actividades Externas
    'incourse' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // My dashboard page
    // ► My MOODLE + Viewing profile
    'mydashboard' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>false, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // ► My public page
    'mypublic' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>false, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>false, 'nofooter'=>false, 'infobanner'=>false),
    ), 
    // ► Server administration scripts.
    'admin' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true, 'nologininfo'=>true, 'nocustommenu'=>false, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>true, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // Embedded pages, like iframe/object embeded in moodleform - it needs as much space as possible
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array(),
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>true,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // The pagelayout used when a redirection is occuring.
    // ► Purge cache + Send forum message
    'redirect' => array(
        'file' => 'redirect.php',
        'regions' => array(),
        'options' => array(),
    ),
    // POPUP _ Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    'maintenance' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>true,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // POPUP _ Pages that appear in pop-up windows
    // ► ADMIN -> REPORTS + 
    'popup' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>true,
                           'noblocks'=>false, 'nocourseheaderfooter'=>true, 'nofooter'=>false, 'infobanner'=>false),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    // Actividades Externas + 
    'frametop' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>true, 'infobanner'=>false),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>true,
                           'noblocks'=>true, 'nocourseheaderfooter'=>true, 'nofooter'=>false, 'infobanner'=>false),
    ),
    // The pagelayout used for reports.
    // ► REPORTS _ ADMIN -> REPORTS
    'report' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>false, 'nologininfo'=>true, 'nocustommenu'=>true, 'nonavbar'=>false,
                           'noblocks'=>false, 'nocourseheaderfooter'=>true, 'nofooter'=>false, 'infobanner'=>false),
    ),
);

// If set to true the side dock is enabled for blocks 
$THEME->enable_dock = true;

// Used to hide a theme from the theme selector (unless theme designer mode is on). Accepts true or false.
$THEME->hidefromselector = false;

// Overrides the left arrow image used throughout Moodle
// $THEME->larrow

// Overrides the right arrow image used throughout Moodle
// $THEME->rarrow

// Used to control the colours used in the small media player for the filters
// $THEME->filter_mediaplugin_colors

// Controls the colours for the MP3 player
// $THEME->resource_mp3player_colors

// An array containing the names of JavaScript files located in /javascript/ to include in the theme.
// $THEME->javascripts = array();

// As above but will be included in the page footer.
// $THEME->javascripts_footer = array();

// An array of JavaScript files NOT to inherit from the themes parents
// $THEME->parents_exclude_javascripts

// Sets a custom render factory to use with the theme, used when working with custom renderers.
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Allows the user to provide the name of a function that all CSS should be passed to before being delivered.
$THEME->csspostprocess = 'theme_aigne_process_css';
