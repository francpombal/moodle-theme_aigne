<?php
/**
 * bottom-of-the-page section _ Moodle adaptation
 * 
 * @package    theme_aigne
 * @copyright  1997-2014 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasfooter = (empty($PAGE->layout_options['nofooter']));

$navhelpurl = $PAGE->theme->settings->navhelp;
$navhelplinks = $PAGE->theme->settings->navhelplinks;
$navlink0 = (!empty($navhelplinks[0]));
$navlink1 = (!empty($navhelplinks[1]));
$navlink2 = (!empty($navhelplinks[2]));
$navlink3 = (!empty($navhelplinks[3]));
$navlink4 = (!empty($navhelplinks[4]));
$navlink5 = (!empty($navhelplinks[5]));
$navlink6 = (!empty($navhelplinks[6]));
$navlink7 = (!empty($navhelplinks[7]));
$navlink8 = (!empty($navhelplinks[8]));
$navlink9 = (!empty($navhelplinks[9]));

?>
<!-- 01 bottom section _ course footer -->
<div id="bottom_1">
    <?php if (!empty($coursefooter)) { ?>
        <div id="course-footer"><?php echo $coursefooter; ?></div>
    <?php } ?>
</div>
<!-- 02 bottom section _ navhelp links -->
<div id="bottom_2">
    <!-- Navigation help _ Show NavHelp only if is logged in, whatever show login info link -->
    <div class="navhelp">
        <?php if (!isloggedin() or isguestuser()) { 
            echo $OUTPUT->login_info(); 
        } else { ?>
            <?php if ($navlink0) { echo page_doc_link(textlib::strtolower(get_string('moodledocslink'))); } ?>
            |
            <?php if ($navlink1) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=2" title="<?php echo get_string('help','theme_aigne');?> ... ">
            <?php echo get_string('help','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink2) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=1" title="<?php echo get_string('webmap','theme_aigne');?> ... ">
            <?php echo get_string('webmap','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink3) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=3" title="<?php echo get_string('footsearch','theme_aigne');?> ... ">
            <?php echo get_string('footsearch','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink4) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=4" title="<?php echo get_string('stats','theme_aigne');?> ... ">
            <?php echo get_string('stats','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink5) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=5" title="<?php echo get_string('disclaimer','theme_aigne');?> ... ">
            <?php echo get_string('disclaimer','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink6) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=6" title="<?php echo get_string('policies','theme_aigne');?> ... ">
            <?php echo get_string('policies','theme_aigne');?></a>
            |<?php } ?>           
            <?php if ($navlink7) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=7" title="<?php echo get_string('privacy','theme_aigne');?> ... ">
            <?php echo get_string('privacy','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink8) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=8" title="<?php echo get_string('security','theme_aigne');?> ... ">
            <?php echo get_string('security','theme_aigne');?></a>
            |<?php } ?>
            <?php if ($navlink9) {?><a href="<?php echo $CFG->wwwroot.$navhelpurl.'?';?>type=9" title="<?php echo get_string('accessibility','theme_aigne');?> ... ">
            <?php echo get_string('accessibility','theme_aigne');?></a>
            |<?php } ?>
            <a href="<?php echo $CFG->wwwroot ?>/login/logout.php?sesskey=<?php echo sesskey(); ?>" title="<?php echo get_string('logout');?> ... ">
            <?php echo textlib::strtolower(get_string('logout'));?></a>
            |
        <?php } ?>
    </div>
</div>
<!-- 03 bottom section _ 'HASFOOTER' variable sensitive -->
<div id="standardfooter">
    <?php if ($hasfooter) { ?>
        <?php include('bottom3.php') ?>
    <?php } ?>
</div>
<!-- 04 bottom section _ LEGACY _ leave this empty -->
<div id="bottom_4">

</div>
<!-- 05 bottom section _ copyright -->
    <?php include('bottom5.php') ?>
