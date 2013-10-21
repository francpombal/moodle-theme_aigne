<?php
/**
 * top-of-the-page User Information Section
 * TODO: simplifie the code, join with function in renderers.php
 * 
 * @package    theme_aigne
 * @copyright  1997 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Gets the content
    global $CFG, $OUTPUT, $USER, $SESSION, $PAGE;
    $wwwroot = '';
    $forgot = '';
    $authplugin = '';
    $signup = '';
    $username = '';
    $loginlogout = '';
    $userph = get_string('username');
    $passph = get_string('password');
    $hassalut = (!empty($PAGE->theme->settings->welcomemsg));
    $hasusernavsalut = (!empty($PAGE->theme->settings->usernavsalut));
    $hasusernavinfo = (!empty($PAGE->theme->settings->usernavinfo));
    $hasusernavpic = (!empty($PAGE->theme->settings->usernavpic));
    $usernavout = ($PAGE->theme->settings->usernavout);
        
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
    
    //TODO -> Birthday greetings
    // Crear campo de 'birthday' en la ficha de alumno
    // Entonces, comprobar si esta rellenado y si hoy es el día

    // Set the greeting string
    if (!isloggedin() or isguestuser()) {
        $salut = get_string('loggedinnot');
    //} else if ($hasbirthdate) {
    //    $salut = get_string('birthday_greeting', 'theme_aigne');
    } else if ($hassalut) {
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
  
    // User not loggedin or guest user
        if (!isloggedin() or isguestuser()) {
            $loginlogout .= html_writer::start_tag('div', array('class'=>'loginhead'));
            $loginlogout .= html_writer::start_tag('form', array('class'=>'loginform', 'id'=>'login', 'method'=>'post', 'action'=>get_login_url()));


            $loginlogout .= html_writer::empty_tag('input', array('class'=>'form-input', 'type'=>'text', 'name'=>'username', 'id'=>'login_username', 'placeholder'=>$userph, 'value'=>$username));



            if (!empty($CFG->loginpasswordautocomplete)) {
                $loginlogout .= html_writer::empty_tag('input', array('class'=>'form-input', 'type'=>'password', 'name'=>'password', 'id'=>'login_password', 'placeholder'=>$passph, 'value'=>'', 'autocomplete'=>'off'));
            } else {
                $loginlogout .= html_writer::empty_tag('input', array('class'=>'form-input', 'type'=>'password', 'name'=>'password', 'id'=>'login_password', 'placeholder'=>$passph, 'value'=>''));
            }












            $loginlogout .= html_writer::empty_tag('input', array('type'=>'submit', 'value'=>get_string('login')));

            $loginlogout .= html_writer::end_tag('form');
            $loginlogout .= html_writer::end_tag('div');














    // User loggedin
		} else {
            $loginlogout .= html_writer::start_tag('div', array('class'=>'userinfohead'));
        // User Information Area: salutation
        if ($hasusernavsalut) {
            $loginlogout .= $salut;
            $loginlogout .= '&nbsp;&nbsp;&nbsp;';
        }
        // User Information Area: user name
        if ($hasusernavinfo) {
            $loginlogout .= '<a href="'. $wwwroot .'/user/editadvanced.php?id='.$USER->id.'" title="'.get_string('updatemyprofile').'">'.fullname($USER).'</a>';
            $loginlogout .= '&nbsp;&nbsp;&nbsp;';
        }

        //  User Information Area: user picture
        if ($hasusernavpic) {
            $loginlogout .= html_writer::start_tag('div', array('class'=>'userpic'));
            $loginlogout .= $OUTPUT->user_picture($USER, array('size'=>35));
            $loginlogout .= html_writer::end_tag('div');
        }









        // Logout option, select over three cases

        switch ($usernavout) {
            case 1:
                // Logout option in button style
                $loginlogout .= '<a href="'. $wwwroot .'/login/logout.php" class="logoutbtn" title="'.get_string('logout').'">'.get_string('logout').'</a>';
                $loginlogout .= '&nbsp;&nbsp;&nbsp;';
                break;
            case 2:
                // Logout option in moodle hyperlink style
                $loginlogout .= '<a href="'. $wwwroot .'/login/logout.php?sesskey='.sesskey().'" class="logoutlink" title="'.get_string('logout').'">('.get_string('logout').')</a>';
                $loginlogout .= '&nbsp;&nbsp;&nbsp;';
                break;
            case 3:
                // None logout option
                break;               
            default:
                // None logout option
                break;
            }
            $loginlogout .= html_writer::end_tag('div');

        }
        echo $loginlogout;



