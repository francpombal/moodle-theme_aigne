<?php 
/**
 * top-of-the-page section _ Moodle adaptation
 * 
 * @package    theme_aigne
 * @copyright  1997-2014 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

If (!empty($PAGE->theme->settings->slogan)) {
    $slogan = $PAGE->theme->settings->slogan;
} else {
    $slogan = get_string('sloganaigne','theme_aigne');
}
$hasusernav = $PAGE->theme->settings->usernav;
$haslangmenu = (!empty($PAGE->layout_options['langmenu']));

?>

<div id="headerlogo">
    <a href="<?php echo $CFG->wwwroot; ?>" title="<?php print_string('home'); ?>">
        <div class="logo"></div>
        <p class="slogan"><?php echo $slogan ?></p>
    </a>
</div>

<div id="headeroptions">
    <table class="headerop">
         <tr Style="height:25px">
            <td class="color_01" Style="width:20%;" colspan=5>&nbsp;</td>
            <td class="color_02" Style="width:16%;" colspan=4>&nbsp;</td>
            <td class="color_03" Style="width:16%;" colspan=4>
                <?php echo ''; ?>
            </td>
            <td class="color_04" Style="width:48%; text-align:right; padding-right:10px" colspan=12>
            <?php 
            switch ($hasusernav) {
                case 1: //in head
                    include('userinfo.php');
                    break;
                case 2: //in block
                    echo '&nbsp;';
                    break;
                case 3: //moodle standard
                    echo $OUTPUT->login_info();
                    break;
                case 4: //none
                    echo '&nbsp;';
                    break;
                default:
                    echo $OUTPUT->login_info();
                    break;
            } ?>
            </td>
        </tr>
        <tr Style="height:25px">
            <td class="color_05" Style="width:8%;" colspan=2>&nbsp;</td>
            <td class="color_03" Style="width:20%;" colspan=5>
                <button id="decfontsize" title="<?php echo get_string('decfontsizetxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
                <button id="defaultfontsize" title="<?php echo get_string('defaultfontsizetxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
                <button id="incfontsize" title="<?php echo get_string('incfontsizetxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
            </td>
            <td class="color_05"  Style="width:16%" colspan=4>&nbsp;</td>
            <td Style="width:4%; background-color:#CCDDEE" colspan=1>
                <button id="style1" title="<?php echo get_string('defaultstyletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
            </td>
            <td Style="width:4%; background-color:#322C65" colspan=1>
                <button id="style2" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
            </td>
            <td Style="width:4%; background-color:#004040" colspan=1>
                <button id="style3" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
            </td>
            <td Style="width:4%; background-color:#EB8324" colspan=1>
                <button id="style4" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
            </td>
            <td Style="width:4%; background-color:#990000" colspan=1>
                <button id="style5" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">&nbsp;</button>
            </td>
            <td class="color_03" Style="width:20%; min-width:225px;" colspan=5>
                <?php if ($haslangmenu) {
                    echo $OUTPUT->lang_menu();
                } ?>
            </td>
            <td Style="width:16%" colspan=4>&nbsp;</td>
        </tr>
    </table>
<?php echo $PAGE->headingmenu ?>
</div>

