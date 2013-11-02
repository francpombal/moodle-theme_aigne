<?php
/**
 * bottom-of-the-page section _ Moodle adaptation
 * 
 * @package    theme_aigne
 * @copyright  1997 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasfooter = (empty($PAGE->layout_options['nofooter']));

$hasmoodledocslink = (!empty($PAGE->theme->settings->moodledocslink));
$navhelpurl = $PAGE->theme->settings->navhelp;
$haswebmap = (!empty($PAGE->theme->settings->webmap));
$hashelp = (!empty($PAGE->theme->settings->help));
$hasfootsearch = (!empty($PAGE->theme->settings->footsearch));
$hasstats = (!empty($PAGE->theme->settings->stats));
$hasdisclaimer = (!empty($PAGE->theme->settings->disclaimer));
$haspolicies = (!empty($PAGE->theme->settings->policies));
$hasprivacy = (!empty($PAGE->theme->settings->privacy));
$hassecurity = (!empty($PAGE->theme->settings->security));
$hasaccessibility = (!empty($PAGE->theme->settings->accessibility));

$hascopyrightstg = (!empty($PAGE->theme->settings->copyrightstg));
$hassitelicensemsg = (!empty($PAGE->theme->settings->sitelicensemsg));
$haslastmodifiedmsg = (!empty($PAGE->theme->settings->lastmodifiedmsg));
$hasthanksvisitmsg = (!empty($PAGE->theme->settings->thanksvisitmsg));

?>
<!-- 01 bottom section _ course footer -->
<div id="bottom_1">
    <?php if (!empty($coursefooter)) { ?>
        <div id="course-footer"><?php echo $coursefooter; ?></div>
    <?php } ?>
</div>
<!-- 02 bottom section _ 'HASFOOTER' variable sensitive -->
<div id="bottom_2">
    <!-- Navigation help _ Show NavHelp only if is logged in, whatever show login info link -->
    <div class="navhelp">
        <?php if (!isloggedin() or isguestuser()) { 
            echo $OUTPUT->login_info(); 
        } else { ?>
            <?php if ($hasmoodledocslink) { echo page_doc_link(get_string('moodledocslink')); } ?>
            |
            <?php if ($hashelp) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=2" title="<?php echo get_string('help','theme_aigne');?> ... ">
            <?php echo get_string('help','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($haswebmap) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=1" title="<?php echo get_string('webmap','theme_aigne');?> ... ">
            <?php echo get_string('webmap','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($hasfootsearch) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=3" title="<?php echo get_string('footsearch','theme_aigne');?> ... ">
            <?php echo get_string('footsearch','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($hasstats) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=4" title="<?php echo get_string('stats','theme_aigne');?> ... ">
            <?php echo get_string('stats','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($hasdisclaimer) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=5" title="<?php echo get_string('disclaimer','theme_aigne');?> ... ">
            <?php echo get_string('disclaimer','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($haspolicies) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=6" title="<?php echo get_string('policies','theme_aigne');?> ... ">
            <?php echo get_string('policies','theme_aigne');?></a>
            |<?php } ?>           
            <?php if ($hasprivacy) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=7" title="<?php echo get_string('privacy','theme_aigne');?> ... ">
            <?php echo get_string('privacy','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($hassecurity) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=8" title="<?php echo get_string('security','theme_aigne');?> ... ">
            <?php echo get_string('security','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($hasaccessibility) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=9" title="<?php echo get_string('accessibility','theme_aigne');?> ... ">
            <?php echo get_string('accessibility','theme_aigne');?></a>
            |<?php } ?>
            <a href="<?php echo $CFG->wwwroot ?>/login/logout.php?sesskey=<?php echo sesskey(); ?>" title="<?php echo get_string('logout');?>">
            <?php echo get_string('logout');?></a>
            |
        <?php } ?>
    </div>
</div>
<!-- 03 bottom section _ 'HASFOOTER' variable sensitive -->
<div id="standardfooter">
    <?php if ($hasfooter) { ?>
        <?php include('bottomhf.php') ?>
    <?php } ?>
</div>
<!-- 04 bottom section _ LEGACY _ leave this empty -->
<div id="bottom_4">

</div>
<!-- 05 bottom section _ copyright -->
<div id="bottom_5">
    <div class="copyright">
    <?php if ($hascopyrightstg) {
        echo $PAGE->theme->settings->copyrightstg;
    } else { 
        echo $SITE->shortname . ' © ' . gmdate("Y");
    }
    if ($hassitelicensemsg) { echo '&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;' . get_string($CFG->sitedefaultlicense,'license');}
    if ($haslastmodifiedmsg) { echo '&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;' . get_string('lastmodified','moodle').': '.gmdate('d.m.Y');}
    if ($hasthanksvisitmsg) { echo '&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;' . get_string('thanksvisit','theme_aigne');}
    //echo html_writer::empty_tag('HR');
    echo $OUTPUT->standard_footer_html(); ?>
    </div>
</div>
