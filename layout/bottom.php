<?php
/**
 * bottom-of-the-page section _ Moodle adaptation
 * TODO: Transfer somethins to default.php. HERE only hasfooter options 
 * 
 * @package    theme_aigne
 * @copyright  1997 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasfooter = (empty($PAGE->layout_options['nofooter']));

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

$hascorpweb = (!empty($PAGE->theme->settings->corpweb));
$hassupportemail = (!empty($CFG->supportemail)); 
$hasemailimg = (!empty($PAGE->theme->settings->emailimg));
$hasskype = (!empty($PAGE->theme->settings->skype));

$hascontactnote = (!empty($PAGE->theme->settings->contactnote));

$hasdropbox = (!empty($PAGE->theme->settings->dropbox));
$hasdayviews = (!empty($PAGE->theme->settings->dayviews));
$hasflickr = (!empty($PAGE->theme->settings->flickr));
$hasfotolog = (!empty($PAGE->theme->settings->fotolog));
$hasinstagram = (!empty($PAGE->theme->settings->instagram));
$haspicasa = (!empty($PAGE->theme->settings->picasa));
$haspixabay = (!empty($PAGE->theme->settings->pixabay));
$hasdailymotion = (!empty($PAGE->theme->settings->dailymotion));
$hasschooltube = (!empty($PAGE->theme->settings->schooltube));
$hasvideolog = (!empty($PAGE->theme->settings->videolog));
$hasvimeo = (!empty($PAGE->theme->settings->vimeo));
$hasyoutube = (!empty($PAGE->theme->settings->youtube));
$hasdeviantart = (!empty($PAGE->theme->settings->deviantart));

$haslinkedin = (!empty($PAGE->theme->settings->linkedin));
$hasfacebook = (!empty($PAGE->theme->settings->facebook));
$hastwitter = (!empty($PAGE->theme->settings->twitter));
$hasgoogleplus = (!empty($PAGE->theme->settings->googleplus));
$hasvkontakte = (!empty($PAGE->theme->settings->vkontakte));
$hasorkut = (!empty($PAGE->theme->settings->orkut));
$hasmyspace = (!empty($PAGE->theme->settings->myspace));
$haspinterest = (!empty($PAGE->theme->settings->pinterest));

$hasmoodlecredit = (!empty($PAGE->theme->settings->moodlecredit));
$hasmoodledocslink = (!empty($PAGE->theme->settings->moodledocslink));
$hascompatcredit = (!empty($PAGE->theme->settings->compatcredit));
$compatwai = $PAGE->theme->settings->compatwai;
$compattested = $PAGE->theme->settings->compattested;
$compattested1 = (!empty($compattested[0]));
$compattested2 = (!empty($compattested[1]));
$compattested3 = (!empty($compattested[2]));
$compattested4 = (!empty($compattested[3]));
$compattested5 = (!empty($compattested[4]));
$hasfootnote = (!empty($PAGE->theme->settings->footnote));

$hascopyrightstg = (!empty($PAGE->theme->settings->copyrightstg));
$hassitelicensemsg = (!empty($PAGE->theme->settings->sitelicensemsg));
$haslastmodifiedmsg = (!empty($PAGE->theme->settings->lastmodifiedmsg));
$hasthanksvisitmsg = (!empty($PAGE->theme->settings->thanksvisitmsg));

?>
<!-- 01 bottom section _ course footer -->
<div id="bottom_1">

</div>
<!-- 02 bottom section _ leave this empty -->
<div id="bottom_2">
    
</div>
<!-- 03 bottom section _ 'HASFOOTER' variable sensitive -->
<div id="standardfooter">
        <!-- Navigation help _ Show NavHelp only if is logged in, whatever show login info link -->
        <div class="navhelp">
            <?php if (!isloggedin() or isguestuser()) { 
                echo $OUTPUT->login_info(); 
            } else {?>
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
    <?php if ($hasfooter) { ?>
        <!-- Contact information and links _ LEFT(contact) + CENTER(contact note _site adm-> appearance -> themes -> aigne) + RIGHT(social links) -->
        <div class="contact">
            <div class="contact" id="left">
                <?php echo get_string('contact','theme_aigne');?><br>
                <!-- Corporation / Institution Web Site -->
                <?php if ($hascorpweb) {?><a href="<?php echo $PAGE->theme->settings->corpweb;?>" title="::: corpweb :::" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('social/corpweb', 'theme')?>" alt="corpweb"></a>
                <?php } ?>
                <!-- Official eMail -->
                <?php if ($hassupportemail) { ?>
                    <a  href="mailto:<?php echo get_config('moodle','supportemail');?>?subject=Información <?php echo $SITE->fullname;?>" title="<?php echo get_string('sendadminemail','theme_aigne');?>" target="_blank">
                        <img src="<?php echo $OUTPUT->pix_url('social/email_img', 'theme')?>" alt="email">
                    <?php if ($hasemailimg) { ?>
                        <img src="<?php echo $PAGE->theme->setting_file_url('emailimg', 'emailimg')?>" alt="email">
                    <?php } else { ?>
                        <img src="<?php echo $OUTPUT->pix_url('social/email_txt', 'theme')?>" alt="email">                
                    <?php } ?>
                    </a>
                <?php } ?>
                <!-- Skype Contact User Name -->
                <?php if ($hasskype) {?><a href="<?php echo $PAGE->theme->settings->skype;?>" title="::: skype :::" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('social/skype', 'theme')?>" alt="skype"></a>
                <?php } ?>
                <?php if ($hascontactnote) { ?><?php } ?>
            </div>
            <div class="contact" id="center">
                <!-- Fisical Site Address -->
                <?php if ($hascontactnote) { ?>
                    <br>
                    <div class="fisicalsite"><img src="<?php echo $OUTPUT->pix_url('social/site', 'theme')?>" alt="fisical site"></div>
                    <div class="fisicalsite"><?php echo $PAGE->theme->settings->contactnote; ?></div>
                <?php } ?>
            </div>
            <div class="contact" id="right">
            <?php echo get_string('sociallinks','theme_aigne');?><br>
                <!-- Web Site PHOTO Content Social Links -->
                <?php if ($hasdayviews) {?><a href="<?php echo $PAGE->theme->settings->dayviews;?>" title="::: DayViews :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/dayviews', 'theme')?>" alt="dayviews"></a> <?php } ?>
                <?php if ($hasflickr) {?><a href="<?php echo $PAGE->theme->settings->flickr;?>" title="::: Flickr :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/flickr', 'theme')?>" alt="flickr"></a> <?php } ?>
                <?php if ($hasfotolog) {?><a href="<?php echo $PAGE->theme->settings->fotolog;?>" title="::: FotoLog :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/fotolog', 'theme')?>" alt="fotolog"></a> <?php } ?>
                <?php if ($hasinstagram) {?><a href="<?php echo $PAGE->theme->settings->instagram;?>" title="::: Instagram :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/instagram', 'theme')?>" alt="instagram"></a> <?php } ?>
                <?php if ($haspicasa) {?><a href="<?php echo $PAGE->theme->settings->picasa;?>" title="::: Picasa :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/picasa', 'theme')?>" alt="picasa"></a> <?php } ?>
                <?php if ($haspixabay) {?><a href="<?php echo $PAGE->theme->settings->pixabay;?>" title="::: PixaBay :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/pixabay', 'theme')?>" alt="pixabay"></a> <?php } ?>
                <!-- Web Site VIDEO Content Social Links -->
                <?php if ($hasdailymotion) {?><a href="<?php echo $PAGE->theme->settings->dailymotion;?>" title="::: DailyMotion :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/dailymotion', 'theme')?>" alt="dailymotion"></a> <?php } ?>
                <?php if ($hasschooltube) {?><a href="<?php echo $PAGE->theme->settings->schooltube;?>" title="::: SchoolTube :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/schooltube', 'theme')?>" alt="schooltube"></a> <?php } ?>
                <?php if ($hasvideolog) {?><a href="<?php echo $PAGE->theme->settings->videolog;?>" title="::: VideoLog :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/videolog', 'theme')?>" alt="videolog"></a> <?php } ?>
                <?php if ($hasvimeo) {?><a href="<?php echo $PAGE->theme->settings->vimeo;?>" title="::: Vimeo :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/vimeo', 'theme')?>" alt="vimeo"></a> <?php } ?>
                <?php if ($hasyoutube) {?><a href="<?php echo $PAGE->theme->settings->youtube;?>" title="::: YouTube :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/youtube', 'theme')?>" alt="youtube"></a> <?php } ?>
                <!-- Web Site ART Content Social Links -->
                <?php if ($hasdeviantart) {?><a href="<?php echo $PAGE->theme->settings->deviantart;?>" title="::: DeviantArt :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/deviantart', 'theme')?>" alt="deviantart"></a> <?php } ?>
                <?php if ($hasmyspace) {?><a href="<?php echo $PAGE->theme->settings->myspace;?>" title="::: MySpace :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/myspace', 'theme')?>" alt="MySpace"> </a><?php }?>
                <!-- Web Site Professional Social Links -->
                <?php if ($haslinkedin) {?><a href="<?php echo $PAGE->theme->settings->linkedin;?>" title="::: Linked In :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/linkedin', 'theme')?>" alt="linked in"></a> <?php } ?>
                <!-- Web Site Social Links -->
                <?php if ($hasfacebook) {?><a href="<?php echo $PAGE->theme->settings->facebook;?>" title="::: Facebook :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/facebook', 'theme')?>" alt="facebook"></a> <?php } ?>
                <?php if ($hastwitter) {?><a href="<?php echo $PAGE->theme->settings->twitter;?>" title="::: Twitter :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/twitter', 'theme')?>" alt="twitter"></a> <?php } ?>
                <?php if ($hasgoogleplus) {?><a href="<?php echo $PAGE->theme->settings->googleplus;?>" title="::: Google+ :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/googleplus', 'theme')?>" alt="google+"> </a><?php }?>
                <?php if ($hasvkontakte) {?><a href="<?php echo $PAGE->theme->settings->vkontakte;?>" title="::: VKontakte :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/vkontakte', 'theme')?>" alt="vkontakte"> </a><?php }?>
                <?php if ($hasorkut) {?><a href="<?php echo $PAGE->theme->settings->orkut;?>" title="::: orkut :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/orkut', 'theme')?>" alt="orkut"> </a><?php }?>

                <?php if ($haspinterest) {?><a href="<?php echo $PAGE->theme->settings->pinterest;?>" title="::: Pinterest :::" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('social/pinterest', 'theme')?>" alt="pinterest"> </a><?php }?>
            </div>
        </div>
        <!-- Credits information and links _ TOP(moodle link) + MIDDLE(compatibility links) + BOTTOM(foot note _site adm-> appearence -> theme -> aigne) -->
        <div class="credits">
            <?php if ($hasmoodlecredit) { 
                echo get_string('powered','theme_aigne');?>
                <a href="http://moodle.org" title="   Moodle   " target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('images/moodle-logo','theme')?>" alt="Moodle logo" width="80" height="20"></a>
                &nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;
                <a href="http://moodle.org/plugins/view.php?plugin=theme_afterburner" title="   moodle theme afterburner   "  target="_blank">
                <?php echo get_string('original_theme','theme_aigne');?></a>
            <?php } ?>
            <?php if ($hascompatcredit) { ?>
                <br>
            <?php switch ($compatwai) {
                case 1:
                    break;
                case 2:
                    // WIA WAI Validator A ?>
                    <a href="http://www.w3.org/WAI/WCAG1A-Conformance" title="   WIA WAI Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/wcag1A-blue','theme')?>" alt="A Compliance _ WIA WAI Validator" width="57" height="20"></a>
                    <?php break;
                case 3:
                    // WIA WAI Validator AA ?>
                    <a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="   WIA WAI Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/wcag1AA-blue','theme')?>" alt="AA Compliance _ WIA WAI Validator" width="57" height="20"></a>
                    <?php break;
                case 4:
                    // WIA WAI Validator AAA ?>
                    <a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" title="   WIA WAI Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/wcag1AAA-blue','theme')?>" alt="AAA Compliance _ WIA WAI Validator" width="57" height="20"></a>
                    <?php break;                                                      
                default:
                    break;
            } ?>
                <?php if ($compattested1) { ?>
                    <!-- WIA CSS Validator -->
                    <a href="http://jigsaw.w3.org/css-validator/#validate_by_upload" title="   WIA CSS Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/vcss-blue','theme')?>" alt="WIA CSS Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested2) { ?>
                    <!-- WIA HTML 4.0 Validator -->
                    <a href="http://validator.w3.org/check?uri=referer" title="   WIA HTML 4.0 Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/w3chtml40','theme')?>" alt="WIA HTML 4.0 Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested3) { ?>
                    <!-- WIA XHTML 1.0 Validator -->
                    <a href="http://validator.w3.org/check?uri=referer" title="   WIA HTML 4.0 Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/w3cxhtml10','theme')?>" alt="WIA HTML 4.0 Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested4) { ?>
                    <!-- Cynthia Validator -->
                    <a href="http://www.cynthiasays.com/" title="   Cynthia Validator   " target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/CynthiaTest','theme')?>" alt="Cynthia Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested5) { ?>
                    <!-- Children Free Validator -->
                <?php } ?>
            <?php } ?>
            <?php if ($hasfootnote) {?>
                <br>
                <?php echo $PAGE->theme->settings->footnote;?>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<!-- 04 bottom section _ LEGACY _ leave this empty -->
<div id="bottom_4">

</div>
<!-- 05 bottom section _ copyright -->
<div id="copyright">
    <?php if ($hascopyrightstg) {
        echo $PAGE->theme->settings->copyrightstg;
    } else { 
        echo $SITE->shortname;?> © <?php echo gmdate("Y");
    } ?>
    <?php if ($hassitelicensemsg) {?>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;<?php echo get_string($CFG->sitedefaultlicense,'license');} ?>
    <?php if ($haslastmodifiedmsg) {?>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;<?php echo get_string('lastmodified','moodle').': '.gmdate('d.m.Y');} ?>
    <?php if ($hasthanksvisitmsg) {?>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;<?php echo get_string('thanksvisit','theme_aigne');} ?>
    <?php echo $OUTPUT->standard_footer_html(); ?>
</div>
