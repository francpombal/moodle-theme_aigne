<?php
/**
 * renderers
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

class theme_aigne_core_renderer extends core_renderer {
    /**
     * The standard tags that should be included in the <head> tag.
     *
     * @return string HTML fragment. CAMBIO: Modificado para agregar componentes de página de AIGNE
     */
    // Included meta tags changes, to beginning with SEO tools in Moodle sites
    public function standard_head_html() {
        global $CFG, $SITE, $SESSION, $PAGE;

        $output = '';
        $hasmtkeywords = (!empty($PAGE->theme->settings->mtkeywords));
        $hasmtdescription = (!empty($PAGE->theme->settings->mtdescription));
        $hasoptionalmtag = (!empty($PAGE->theme->settings->optionalmtag));
        $hascustommtag = (!empty($PAGE->theme->settings->custommtag));
        $hasdublinmtag = (!empty($PAGE->theme->settings->dublinmtag));
        $sitens = $SITE->shortname;
        $sitenf = $SITE->fullname;
            $data = new stdClass;
            $data->sitename = $sitens; 
            
        //$output .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />' . "\n";
            $output .= '<META http-equiv="Content-Type" content="' . $this->contenttype . '" />';
            $output .= '<META http-equiv="Page-Exit" content="blendTrans(Duration=0.1)" />';
            $output .= '<META http-equiv="imagetoolbar" content="no" />';
        if (!$this->page->cacheable) {
            //$output .= '<meta http-equiv="pragma" content="no-cache" />' . "\n";
            $output .= '<META http-equiv="Cache-Control" content="no-cache" />';
            $output .= '<META http-equiv="expires" content="0" />';
        }
        // This is only set by the {@link redirect()} method
            $output .= $this->metarefreshtag;
                
        // Check if a periodic refresh delay has been set and make sure we arn't
        // already meta refreshing
        if ($this->metarefreshtag=='' && $this->page->periodicrefreshdelay!==null) {
            $output .= '<META http-equiv="refresh" content="'.$this->page->periodicrefreshdelay.';url='.$this->page->url->out().'" />';
        }
        // IMPORTANT META TAGs
            $output .= '<META name="language" content="' . current_language() . '" />';
        if ($hasmtkeywords) {
            $output .= '<META name="keywords" content="moodle, ' . ($PAGE->theme->settings->mtkeywords) . '" />';
        } else {
            //$output .= '<meta name="keywords" content="moodle, ' . $this->page->title . '" />' . "\n";
            $output .= '<META name="keywords" content="moodle, ' . get_string('metakeywords','theme_aigne') . '" />';
        }
        if ($hasmtdescription) {
            $output .= '<META name="description" content="' . ($PAGE->theme->settings->mtdescription) . '" />';
        } else {
            $output .= '<META name="description" content="' . get_string('metadescription','theme_aigne',$data) . '" />';
        }
        // OPTIONAL META TAGs
        if ($hasoptionalmtag) {
            $output .= '<META name="copyright" content="' . $sitens . ' © ' . gmdate("Y") . '" />';
            $output .= '<META name="author" content="' . $sitenf . ' & moodle community" />';
            $output .= '<META name="distribution" content="global" />';
            $output .= '<META name="revisit-after" content="31 Days" />';
            $output .= '<META name="robots" content="index,nofollow" />';
            $output .= '<META name="url" content="' . $CFG->wwwroot . '" />';
            $output .= '<META name="viewport" content="width=device-width, maximum-scale=1.0" />';
        }
        // Custom META TAGs
        if ($hascustommtag) {
            $output .= ($PAGE->theme->settings->custommtag);
        }
        // COMPATIBILITY WITH 'Dublin Core Metadata Initiative' META TAGs
        if ($hasdublinmtag) {
            $output .= '<META name="dc.language" content="' . current_language() . '" />';
            $output .= '<META name="dc.description" content="' . get_string('metadescription','theme_aigne',$data) . '" />';
            $output .= '<META name="dc.publisher" content="' . $sitens . ' © ' . gmdate("Y") . '" />';
        }

        // flow player embedding support
        $this->page->requires->js_function_call('M.util.load_flowplayer');

        // Set up help link popups for all links with the helptooltip class
        $this->page->requires->js_init_call('M.util.help_popups.setup');

        // Setup help icon overlays.
        $this->page->requires->yui_module('moodle-core-popuphelp', 'M.core.init_popuphelp');
        $this->page->requires->strings_for_js(array(
            'morehelp',
            'loadinghelp',
        ), 'moodle');

        $this->page->requires->js_function_call('setTimeout', array('fix_column_widths()', 20));

        $focus = $this->page->focuscontrol;
        if (!empty($focus)) {
            if (preg_match("#forms\['([a-zA-Z0-9]+)'\].elements\['([a-zA-Z0-9]+)'\]#", $focus, $matches)) {
                // This is a horrifically bad way to handle focus but it is passed in
                // through messy formslib::moodleform
                $this->page->requires->js_function_call('old_onload_focus', array($matches[1], $matches[2]));
            } else if (strpos($focus, '.')!==false) {
                // Old style of focus, bad way to do it
                debugging('This code is using the old style focus event, Please update this code to focus on an element id or the moodleform focus method.', DEBUG_DEVELOPER);
                $this->page->requires->js_function_call('old_onload_focus', explode('.', $focus, 2));
            } else {
                // Focus element with given id
                $this->page->requires->js_function_call('focuscontrol', array($focus));
            }
        }

        // Get the theme stylesheet - this has to be always first CSS, this loads also styles.css from all plugins;
        // any other custom CSS can not be overridden via themes and is highly discouraged
        $urls = $this->page->theme->css_urls($this->page);
        foreach ($urls as $url) {
            $this->page->requires->css_theme($url);
        }

        // Get the theme javascript head and footer
        if ($jsurl = $this->page->theme->javascript_url(true)) {
            $this->page->requires->js($jsurl, true);
        }
        if ($jsurl = $this->page->theme->javascript_url(false)) {
            $this->page->requires->js($jsurl);
        }

        // Get any HTML from the page_requirements_manager.
        $output .= $this->page->requires->get_head_code($this->page, $this);

        // List alternate versions.
        foreach ($this->page->alternateversions as $type => $alt) {
            $output .= html_writer::empty_tag('link', array('rel' => 'alternate',
                    'type' => $type, 'title' => $alt->title, 'href' => $alt->url));
        }

        if (!empty($CFG->additionalhtmlhead)) {
            $output .= "\n".$CFG->additionalhtmlhead;
        }

        return $output;
    }
    
    /**
     * Renders a custom menu object (located in outputcomponents.php)
     *
     * The custom menu this method override the render_custom_menu function
     * in outputrenderers.php
     * @staticvar int $menucount
     * @param custom_menu $menu
     * @return string
     */
    protected function render_custom_menu(custom_menu $menu) {
        global $PAGE;
        // If the menu has no children return an empty string
        if (!$menu->has_children()) {
            return '';
        }

        // Add a login or logout link
        $hasmenulogout = $PAGE->theme->settings->menulogout;
        if ($hasmenulogout) {
            if (isloggedin()) {
                $branchlabel = get_string('logout');
                $branchurl   = new moodle_url('/login/logout.php');
            } else {
                $branchlabel = get_string('login');
                $branchurl   = new moodle_url('/login/index.php');
            }
            $branch = $menu->add($branchlabel, $branchurl, $branchlabel, -1);
        }

        // Initialise this custom menu
        $content = html_writer::start_tag('ul', array('class'=>'dropdown dropdown-horizontal'));
        // Render each child
        foreach ($menu->get_children() as $item) {
            $content .= $this->render_custom_menu_item($item);
        }
        // Close the open tags
        $content .= html_writer::end_tag('ul');
        // Return the custom menu
        return $content;
    }

    /**
     * Renders a custom menu node as part of a submenu
     *
     * The custom menu this method override the render_custom_menu_item function
     * in outputrenderers.php
     *
     * @see render_custom_menu()
     *
     * @staticvar int $submenucount
     * @param custom_menu_item $menunode
     * @return string
     */
    protected function render_custom_menu_item(custom_menu_item $menunode) {
        // Required to ensure we get unique trackable id's
        static $submenucount = 0;
        $content = html_writer::start_tag('li');
        if ($menunode->has_children()) {
            // If the child has menus render it as a sub menu
            $submenucount++;
            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#cm_submenu_'.$submenucount;
            }
            $content .= html_writer::start_tag('span', array('class'=>'customitem'));
            $content .= html_writer::link($url, $menunode->get_text(), array('title'=>$menunode->get_title()));
            $content .= html_writer::end_tag('span');
            $content .= html_writer::start_tag('ul');
            foreach ($menunode->get_children() as $menunode) {
                $content .= $this->render_custom_menu_item($menunode);
            }
            $content .= html_writer::end_tag('ul');
        } else {
            // The node doesn't have children so produce a final menuitem

            if ($menunode->get_url() !== null) {
                $url = $menunode->get_url();
            } else {
                $url = '#';
            }
            $content .= html_writer::link($url, $menunode->get_text(), array('title'=>$menunode->get_title()));
        }
        $content .= html_writer::end_tag('li');
        // Return the sub menu
        return $content;
    }
}

//****************************************************************************//

class theme_aigne_block_navigation_renderer extends plugin_renderer_base {
/**
 * Returns the content of the navigation tree.
 *
 * @param global_navigation $navigation
 * @param int $expansionlimit
 * @param array $options
 * @return string $content
 */
public function navigation_tree(global_navigation $navigation, $expansionlimit, array $options = array()) {
    //CHANGED -> Options to include the usernav on the Navigation Block
    global $PAGE;
        $usernav = '';
        $content = '';
        $usernav = (empty($PAGE->theme->settings->usernav)) ? false : ($PAGE->theme->settings->usernav);
        if ($usernav == 2) { $content .= $this->theme_aigne_user_info(); }
    //END OF CHANGED

        $navigation->add_class('navigation_node');
        $content .= $this->navigation_node(array($navigation), array('class'=>'block_tree list'), $expansionlimit, $options);
        if (isset($navigation->id) && !is_numeric($navigation->id) && !empty($content)) {
            $content .= $this->output->box($content, 'block_tree_box', $navigation->id);
        }
    return $content;
        
}

/**
 * Produces a navigation node for the navigation tree
 *
 * @param array $items
 * @param array $attrs
 * @param int $expansionlimit
 * @param array $options
 * @param int $depth
 * @return string
 */
protected function navigation_node($items, $attrs=array(), $expansionlimit=null, array $options = array(), $depth=1) {
    // exit if empty, we don't want an empty ul element
    if (count($items)==0) {
        return '';
    }

    // array of nested li elements
    $lis = array();
    foreach ($items as $item) {
            if (!$item->display && !$item->contains_active_node()) {
                continue;
            }
            $content = $item->get_content();
            $title = $item->get_title();

            $isexpandable = (empty($expansionlimit) || ($item->type > navigation_node::TYPE_ACTIVITY || $item->type < $expansionlimit) || ($item->contains_active_node() && $item->children->count() > 0));
            $isbranch = $isexpandable && ($item->children->count() > 0 || ($item->has_children() && (isloggedin() || $item->type <= navigation_node::TYPE_CATEGORY)));

            // Skip elements which have no content and no action - no point in showing them
            if (!$isexpandable && empty($item->action)) {
                continue;
            }

            $hasicon = ((!$isbranch || $item->type == navigation_node::TYPE_ACTIVITY || $item->type == navigation_node::TYPE_RESOURCE) && $item->icon instanceof renderable);

            if ($hasicon) {
                $icon = $this->output->render($item->icon);
            } else {
                $icon = '';
            }
            $content = $icon.$content; // use CSS for spacing of icons
            if ($item->helpbutton !== null) {
                $content = trim($item->helpbutton).html_writer::tag('span', $content, array('class'=>'clearhelpbutton'));
            }

            if ($content === '') {
                continue;
            }

            $attributes = array();
            if ($title !== '') {
                $attributes['title'] = $title;
            }
            if ($item->hidden) {
                $attributes['class'] = 'dimmed_text';
            }
            if (is_string($item->action) || empty($item->action) || ($item->type === navigation_node::TYPE_CATEGORY && empty($options['linkcategories']))) {
                $attributes['tabindex'] = '0'; //add tab support to span but still maintain character stream sequence.
                $content = html_writer::tag('span', $content, $attributes);
            } else if ($item->action instanceof action_link) {
                //TODO: to be replaced with something else
                $link = $item->action;
                $link->text = $icon.$link->text;
                $link->attributes = array_merge($link->attributes, $attributes);
                $content = $this->output->render($link);
                $linkrendered = true;
            } else if ($item->action instanceof moodle_url) {
                $content = html_writer::link($item->action, $content, $attributes);
            }

            // this applies to the li item which contains all child lists too
            $liclasses = array($item->get_css_type(), 'depth_'.$depth);
            $liexpandable = array();
            if ($item->has_children() && (!$item->forceopen || $item->collapse)) {
                $liclasses[] = 'collapsed';
            }
            if ($isbranch) {
                $liclasses[] = 'contains_branch';
                $liexpandable = array('aria-expanded' => in_array('collapsed', $liclasses) ? "false" : "true");
            } else if ($hasicon) {
                $liclasses[] = 'item_with_icon';
            }
            if ($item->isactive === true) {
                $liclasses[] = 'current_branch';
            }
            $liattr = array('class' => join(' ',$liclasses)) + $liexpandable;
            // class attribute on the div item which only contains the item content
            $divclasses = array('tree_item');
            if ($isbranch) {
                $divclasses[] = 'branch';
            } else {
                $divclasses[] = 'leaf';
            }
            if ($hasicon) {
                $divclasses[] = 'hasicon';
            }
            if (!empty($item->classes) && count($item->classes)>0) {
                $divclasses[] = join(' ', $item->classes);
            }
            $divattr = array('class'=>join(' ', $divclasses));
            if (!empty($item->id)) {
                $divattr['id'] = $item->id;
            }
            $content = html_writer::tag('p', $content, $divattr);
            if ($isexpandable) {
                $content .= $this->navigation_node($item->children, array(), $expansionlimit, $options, $depth+1);
            }
            if (!empty($item->preceedwithhr) && $item->preceedwithhr===true) {
                $content = html_writer::empty_tag('hr') . $content;
            }
            $content = html_writer::tag('li', $content, $liattr);
            $lis[] = $content;
    }

    if (count($lis)) {
        return html_writer::tag('ul', implode("\n", $lis), $attrs);
    } else {
        return '';
    }
}

/**
 * Returns the 'User Information Area' over the block 'Navigation', 
 * while configured in theme settings
 *
 */
public function theme_aigne_user_info() {
    global $CFG, $OUTPUT, $USER, $PAGE;
    $wwwroot = '';
    $forgot = '';
    $authplugin = '';
    $signup = '';
    $username = '';
    $loginlogout = '';
    $haswelsalut =  0;
    $hassalut = (!empty($PAGE->theme->settings->usernavsalut));
    $haswelsalut = (!empty($PAGE->theme->settings->welcomemsg));
/*
    $today = time();
    TODO -> Birthday greetings
    TODO -> Crear campo de 'birthday' en la ficha de alumno
    If (!empty(TABLA_USER -> CAMPO_BIRTHDATE)) {
        $hasbirthdate = 1;
        $birthdate = TABLA_USER -> CAMPO_BIRTHDATE;
    }
    TODO -> Special date greetings
    $hasdatemessage = 0;
    If (!empty($PAGE->theme->settings->datemessage)) {
        $hasdatemessage = 1;
        $datemessage = $PAGE->theme->settings->datemessage;
        $datestart = $PAGE->theme->settings->datestart;
        $datefinis = $PAGE->theme->settings->datefinis;
    }
*/
    // normal link or https
    if (empty($CFG->loginhttps)) {
        $wwwroot = $CFG->wwwroot;
    } else {
        $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
    }

    // forgot password link
    $forgot = $wwwroot . '/login/forgot_password.php';
    
    // sign up link
    if (!empty($CFG->registerauth)) {
        $authplugin = get_auth_plugin($CFG->registerauth);
        if ($authplugin->can_signup()) {
            $signup = $wwwroot . '/login/signup.php';
        }
    }

    $cookiename = get_moodle_cookie();
    // populate username with cookie either standard name
    if (empty($cookiename)) {
        $username = '';
    } else {
        $username = s($cookiename);
    }

    if (!empty($CFG->loginpasswordautocomplete)) {
        $autocomplete = 'autocomplete="off"';
    } else {
        $autocomplete = '';
    }
   
    // Set the greeting string
    if ($hassalut) {
        if (!isloggedin() or isguestuser()) {
            $salut = get_string('loggedinnot');
        //} else if ($hasbirthdate and ($birthdate = $today)) {
        //    $salut = get_string('birthday_greeting', 'theme_aigne');
        //} else if ($hasdatemessage and (($datestart <= $today) and ($datefinis >= $today))) {
        //    $salut = $today;
        } else if ($haswelsalut) {
            $salut = ($PAGE->theme->settings->welcomemsg);
        } else { 
            $utz = get_user_timezone_offset();
            if ($utz == 99) {
                $ut = (date('G')*3600 + date('i')*60 + date('s'))/3600;
            } else {
                $ut = ((gmdate('G') + get_user_timezone_offset())*3600 + gmdate('i')*60 + gmdate('s'))/3600;
                If ($ut <= 0) { $ut = 24 + $ut; }
                If ($ut > 24) { $ut = $ut - 24; }
            }
        // Define the daylight target and search the string in lang/xx/theme_aigne
            if (($ut >=6 ) and ($ut <12 )) {
                $salut =  get_string('morning_greeting', 'theme_aigne');
            } elseif (($ut >=12 ) and ($ut < 18 )) {
                $salut = get_string('afternoon_greeting', 'theme_aigne');
            } else {
                $salut = get_string('night_greeting', 'theme_aigne');              
            }
        }
    }

    // User Information Area: greeting on the block title <- ISSUE -> No coje el título, porque lo define mucho antes
    //if ($hasusernavsalut) {
    //    $this->title = $salut;
    //} else {
    //    $this->title = get_string('pluginname', $this->blockname);
    //}

    // User not loggedin or guest user
        if (!isloggedin() or isguestuser()) {
            $userph = get_string('username');
            $passph = get_string('password');
            $loginlogout .= html_writer::start_tag('div', array('class'=>'loginform'));
            $loginlogout .= html_writer::start_tag('form', array('class'=>'loginform', 'id'=>'login', 'method'=>'post', 'action'=>get_login_url()));
            //$loginlogout .= html_writer::tag('label', get_string('username'), array('class'=>'form-label', 'for'=>'login_username'));
            $loginlogout .= html_writer::empty_tag('input', array('class'=>'form-input', 'type'=>'text', 'size'=>'25', 'name'=>'username', 'id'=>'login_username', 'placeholder'=>$userph, 'value'=>$username));
            //$loginlogout .= html_writer::tag('label', get_string('password'), array('class'=>'form-label', 'for'=>'login_password'));
            $loginlogout .= html_writer::empty_tag('input', array('class'=>'form-input', 'type'=>'password', 'size'=>'25', 'name'=>'password', 'id'=>'login_password', 'placeholder'=>$passph, 'value'=>'', $autocomplete));
            $loginlogout .= '<DIV class="clearer"><!-- --></DIV>';
            if (isset($CFG->rememberusername) and $CFG->rememberusername == 2) {
                if ($username) {
                    $loginlogout .= html_writer::empty_tag('input', array('type'=>'checkbox', 'title'=>get_string('rememberusername', 'admin'), 'name'=>'rememberusername', 'id'=>'rememberusername', 'value'=>'1', 'checked'=>'checked'));
                } else {
                    $loginlogout .= html_writer::empty_tag('input', array('type'=>'checkbox', 'title'=>get_string('rememberusername', 'admin'), 'name'=>'rememberusername', 'id'=>'rememberusername', 'value'=>'1'));
                }
                $loginlogout .= html_writer::tag('label', get_string('rememberusername', 'admin'), array('for'=>'rememberusername'));
            }
            $loginlogout .= '<DIV class="clearer"><!-- --></DIV>';
            $loginlogout .= html_writer::empty_tag('input', array('type'=>'submit', 'value'=>get_string('login')));
            $loginlogout .= html_writer::end_tag('form');
            $loginlogout .= html_writer::end_tag('div');
            $loginlogout .= '<DIV class="clearer"><!-- --></DIV>';
            $loginlogout .= html_writer::empty_tag('HR');
    // User not loggedin but forgot password
            if (!empty($forgot)) {
                $loginlogout .= html_writer::start_tag('div');
                $loginlogout .= html_writer::link(new moodle_url($forgot), get_string('forgotten'));
                $loginlogout .= html_writer::end_tag('div');
            }
    // User not loggedin but want sign up
            if (!empty($signup)) {
                $loginlogout .= html_writer::start_tag('div');
                $loginlogout .= html_writer::link(new moodle_url($signup), get_string('startsignup'));
                $loginlogout .= html_writer::end_tag('div');
            }
        $loginlogout .= html_writer::empty_tag('HR');
    // User loggedin
		} else {
            $hasusernavsalut = (!empty($PAGE->theme->settings->usernavsalut));
            $hasusernavinfo = (!empty($PAGE->theme->settings->usernavinfo));
            $hasusernavpic = (!empty($PAGE->theme->settings->usernavpic));
            $usernavout = (empty($PAGE->theme->settings->usernavout)) ? false : ($PAGE->theme->settings->usernavout);
            $loginlogout .= html_writer::start_tag('div', array('class'=>'userinfo'));
        // User Information Area: salutation
        if ($hasusernavsalut) {
            $loginlogout .= $salut;
            $loginlogout .= '&nbsp;&nbsp;&nbsp;';
        }
        // User Information Area: user name
        if ($hasusernavinfo) {
            $loginlogout .= '<a href="'. $wwwroot .'/user/editadvanced.php?id='.$USER->id.'" title="'.get_string('updatemyprofile').'">'.fullname($USER).'</a>';
        }
            $loginlogout .= html_writer::empty_tag('br');
        //  User Information Area: user picture
        if ($hasusernavpic) {

            $loginlogout .= $OUTPUT->user_picture($USER, array('size'=>70, 'class'=>'profilepicture'));
            $loginlogout .= html_writer::empty_tag('br');
        }
        // Enlace para editar el perfil del usuario en modo avanzado
            //$loginlogout .= html_writer::link(new moodle_url('/user/editadvanced.php', array('id'=>$USER->id)), get_string('updatemyprofile'));
            //$loginlogout .= html_writer::empty_tag('br');
        // Información de la última sesión (Se podría mostrar el tiempo que lleva conectado)
            //if($USER->lastlogin){
                //$lastloginfo ='('.get_string('lastlogin').': '.userdate($USER->lastlogin, get_string('strftimerecent')).')';
                //$loginlogout .= html_writer::tag('div', $lastloginfo, array('class'=>'lastloginfo'));
            //}
            //$loginlogout .= html_writer::empty_tag('br');
        // Logout option, select over three cases
            $loginlogout .= html_writer::empty_tag('HR');
        switch ($usernavout) {
            case 1:
                // Logout option in button style
                $loginlogout .= '<a href="'. $wwwroot .'/login/logout.php" class="logoutbtn" title="'.get_string('logout').'">'.get_string('logout').'</a>';

                break;
            case 2:
                // Logout option in moodle hyperlink style
                $loginlogout .= '<a href="'. $wwwroot .'/login/logout.php?sesskey='.sesskey().'" class="logoutlink" title="'.get_string('logout').'">('.get_string('logout').')</a>';

                break;
            case 3:
                // None logout option
                break;               
            default:
                // None logout option
                break;
            }
            $loginlogout .= html_writer::end_tag('div');
            $loginlogout .= html_writer::empty_tag('HR');
        }
        return $loginlogout;
    }
}

//****************************************************************************//
