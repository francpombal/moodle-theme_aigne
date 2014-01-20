<?php
/**
 * bottom-of-the-page section 5 _ Moodle adaptation
 * 
 * @package    theme_aigne
 * @copyright  1997-2014 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$hascopyrightstg = (!empty($PAGE->theme->settings->copyrightstg));
$hassitelicensemsg = (!empty($PAGE->theme->settings->sitelicensemsg));
$haslastmodifiedmsg = (!empty($PAGE->theme->settings->lastmodifiedmsg));
$hasthanksvisitmsg = (!empty($PAGE->theme->settings->thanksvisitmsg));

?>
<div id="bottom_5">
    <div class="copyright">
    <?php
        if ($hascopyrightstg) {
            echo $PAGE->theme->settings->copyrightstg;
        } else { 
            echo $SITE->shortname . ' © ' . gmdate("Y");
        }
        $textsep = '&nbsp;&nbsp;&nbsp;:&nbsp;:&nbsp;&nbsp;&nbsp;';
        if ($hassitelicensemsg) { echo $textsep . get_string($CFG->sitedefaultlicense,'license');}
        if ($haslastmodifiedmsg) { echo $textsep . get_string('lastmodified','moodle').': '.gmdate('d.m.Y');}
        if ($hasthanksvisitmsg) { echo $textsep . get_string('thanksvisit','theme_aigne');}
    ?>
    </div>
    <div class="footerhtml">
        <?php echo $OUTPUT->standard_footer_html(); ?>
    </div>
</div>
