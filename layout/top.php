<?php 
/**
 * top-of-the-page section _ Moodle adaptation
 * TODO: I like the nostalgic table, but... 
 * 
 * @package    theme_aigne
 * @copyright  1997 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$slogan = $PAGE->theme->settings->slogan;
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
            <td class="color_03" Style="width:16%;" colspan=4>&nbsp;
                <?php echo ''; ?>
            </td>
            <td class="color_04" Style="width:48%; text-align:right; padding-right:10px" colspan=12>
            <?php 
            switch ($hasusernav) {
                case 1:
                    include('userinfo.php');
                    break;
                case 2:
                    echo ' ';
                    break;
                case 3:
                    echo $OUTPUT->login_info();
                    break;
                case 4:
                    echo ' ';
                    break;
                default:
                    echo $OUTPUT->login_info();
                    break;
            } ?>
            </td>
        </tr>
        <tr Style="height:25px">
            <td class="color_05" Style="width:8%;" colspan=2>&nbsp;</td>
            <td class="color_03" Style="width:4%;" colspan=1>&nbsp;</td>
            <td class="color_03" Style="width:4%; font-size: 90%" colspan=1>
                <button id="decfontsize" title="<?php echo get_string('decfontsizetxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">-A</button>
            </td>
            <td class="color_03"  Style="width:4%;" colspan=1>
                <button id="defaultfontsize" title="<?php echo get_string('defaultfontsizetxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">A</button>
            </td>
            <td class="color_03"  Style="width:4%; font-size: 110%" colspan=1>
                <button id="incfontsize" title="<?php echo get_string('incfontsizetxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">+A</button>
            </td>
            <td class="color_03"  Style="width:4%;" colspan=1>&nbsp;</td>
            <td class="color_05"  Style="width:16%" colspan=4>&nbsp;</td>
            <td Style="width:4%; background-color:#CCDDEE" colspan=1>
                <button id="style1" title="<?php echo get_string('defaultstyletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">   </button>
            </td>
            <td Style="width:4%; background-color:#322C65" colspan=1>
                <button id="style2" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">   </button>
            </td>
            <td Style="width:4%; background-color:#004040" colspan=1>
                <button id="style3" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">   </button>
            </td>
            <td Style="width:4%; background-color:#EB8324" colspan=1>
                <button id="style4" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">   </button>
            </td>
            <td Style="width:4%; background-color:#990000" colspan=1>
                <button id="style5" title="<?php echo get_string('styletxt','theme_aigne'); ?>" onclick="alert('<?php echo get_string('noimplemented','theme_aigne'); ?>')">   </button>
            </td>
            <td class="color_03" Style="width:20%; min-width:220px;" colspan=5>
                <?php if ($haslangmenu) {
                    echo $OUTPUT->lang_menu();
                } ?>
            </td>
            <td Style="width:16%" colspan=4>&nbsp;</td>
        </tr>
    </table>
<?php echo $PAGE->headingmenu ?>
</div>

