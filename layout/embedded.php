<?php
/**
 * embeded page. 
 *
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$courseheader = $coursecontentheader = $coursecontentfooter = $coursefooter = '';
    if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
        $courseheader = $OUTPUT->course_header();
        $coursecontentheader = $OUTPUT->course_content_header();
        if (empty($PAGE->layout_options['nocoursefooter'])) {
            $coursecontentfooter = $OUTPUT->course_content_footer();
            $coursefooter = $OUTPUT->course_footer();
        }
    }
    
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title> 
    <link href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" rel="shortcut icon" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <link href="<?php echo $CFG->wwwroot ?>/theme/aigne/style/aigne_print.css" rel="stylesheet" type="text/css"media="print" />
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">

    <?php echo $OUTPUT->standard_top_of_body_html() ?>
    
<div id="page">
<!-- main center content -->           
        <div id="region-main">       
            <div class="region-content">
                <?php echo $coursecontentheader; ?>
                <?php echo $OUTPUT->main_content() ?>
                <?php echo $coursecontentfooter; ?>
            </div>
        </div>
</div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>
    <div class="clearfix"></div>
</div>
<!-- LEGACY -->
<div id="page-wrapper" style="display: none;"></div>
<div id="region-main-box" style="display: none;"></div>
</body>
</html>
