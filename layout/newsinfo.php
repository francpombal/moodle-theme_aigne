<?php
/**
 * Help pages _ Moodle adaptation
 * 
 * @package    theme_aigne
 * @copyright  1997-2014 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../../config.php');

$PAGE->set_context(context_system::instance());
$newinfotype = optional_param('type', 0, PARAM_INT);
$newsinfostr = (get_string('newsinfo','theme_aigne'));

// Comprobar si esta algo mal con la dirección. En tal caso cargará la página anterior.
if (!empty($SESSION->wantsurl)) {
    $return = $SESSION->wantsurl;
} else {
    $return = $CFG->wwwroot.'/';
}

// Start the Page 
$PAGE->set_url(new moodle_url('/theme/aigne/layout/navhelp.php'));
$PAGE->set_popup_notification_allowed(false);
$PAGE->set_pagelayout('aigne1');
$PAGE->set_title($SITE->shortname.' _ '.$newsinfostr);
$PAGE->set_heading($newsinfostr);
// Añadir opciones a la barra de navegación breadcumb
$PAGE->navbar->add($SITE->shortname);
$PAGE->navbar->add($newsinfostr);
// Inciar publicación
echo $OUTPUT->header();

// SELECT CASE _ integer optional param in the page
switch ($newinfotype) {
    case 1:
        $data = new stdClass;
        $data->link = $CFG->wwwroot;
        echo get_string('newsinfo1','theme_aigne', $data);
        break;
    case 2:
        echo get_string('newsinfo2','theme_aigne');
        break;
    case 3:
        echo get_string('newsinfo3','theme_aigne');
        break;
    case 4:
        echo get_string('newsinfo4','theme_aigne');
        break;
    case 5:
        echo get_string('newsinfo5','theme_aigne');
        break;                                                       
    default:
        echo get_string('newsinfo1','theme_aigne');
        break;
}

echo $OUTPUT->footer();

?>
