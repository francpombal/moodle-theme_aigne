<?php
/**
 * embeded page. 
 *
 * @package    theme_aigne
 * @copyright  2013-2014 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

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
    <div id="page-header">
        <div id="headerlogo">
            <div class="logo"></div>
        </div>
    </div>
<!-- START CUSTOMMENU AND NAVBAR -->
    <div id="navcontainer">
    </div>
<!-- START OF CONTENT --><!-- onselect + ondragstart: to prevent content copies -->
    <div id="page-content">           
        <div id="region-main">       
            <div class="region-content" style="text-align: center;">
                <br />
                <br />
                <?php echo $OUTPUT->main_content() ?>
                <br />
                <br />
            </div>
        </div>
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

