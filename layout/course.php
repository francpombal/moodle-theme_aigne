<?php
/**
 * course page. 
 *
 * @package    theme_aigne
 * @copyright  2013-2014 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());

$bodyclasses = array();
$bodyclasses[] = 'content-only';

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
<!-- START OF HEADER --> 
    <?php if ($hasheading) { ?>    
        <div id="page-header">
            <?php include('top.php') ?>
        </div>
    <?php } ?> 
<!-- START CUSTOMMENU AND NAVBAR -->
    <div id="navcontainer">
        <?php if ($hasnavbar) { ?>
            <div id="navbar">
                <div class="breadcrumb">
                     <?php //echo $OUTPUT->navbar(); ?>
                </div>
                <div class="navbutton">
                     <?php echo $PAGE->button; ?>
                </div>
            </div>
        <?php } ?> 
    </div>

<!-- START OF CONTENT --><!-- onselect + ondragstart: to prevent content copies -->
    <div id="page-content" ondragstart="alert('<?php echo get_string('nocontentdrag','theme_aigne'); ?>'); return false">
<!-- main center content -->
        <div id="region-main">
            <div class="region-content">
                <?php echo $OUTPUT->main_content() ?>
            </div>
        </div>

<!-- PRINT COPYRIGHT PROTECTION -->
    <div id="print">
        <?php 
            $data = new stdClass;
            $data->sitename = format_string($SITE->fullname);
            $data->disclaimer = get_string('disclaimer','theme_aigne');    
            echo get_string('nocontentprint','theme_aigne', $data); 
        ?>
    </div>

<!-- BOTTOM -->
    <div id="page-footer">
        <?php include('bottom5.php') ?>
    </div>
    <?php echo $OUTPUT->standard_end_of_body_html() ?>
    <div class="clearfix"></div>
</div>
<!-- LEGACY -->
<div id="page-wrapper" style="display: none;"></div>
<div id="region-main-box" style="display: none;"></div>
</body>
</html>

