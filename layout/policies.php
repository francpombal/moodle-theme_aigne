<?php
/**
 * Site Policies page call
 * 
 * @package    theme_aigne
 * @copyright  2014 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../../config.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/theme/aigne/layout/policies.php'));
$PAGE->set_popup_notification_allowed(false);

    if ((!isloggedin() or isguestuser())) {
        $strpolicies = (get_string('policies','theme_aigne'));
        $PAGE->set_pagelayout('login');
        $PAGE->set_title($SITE->shortname.' _ '.$strpolicies);
        $PAGE->set_heading($strpolicies);
        // Añadir opciones a la barra de navegación breadcumb
        $PAGE->navbar->add($SITE->shortname);
        $PAGE->navbar->add($strpolicies);
        // Inciar publicación
        echo $OUTPUT->header();
        echo $OUTPUT->heading($strpolicies);
        
        echo get_string('policiespage','theme_aigne');
        
        echo $OUTPUT->footer();
    } else {
        echo get_string('policiespage','theme_aigne');
    }




?>
