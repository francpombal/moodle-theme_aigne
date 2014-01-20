<?php
/**
 * bottom-of-the-page hasfooter section _ Moodle adaptation
 * 
 * @package    theme_aigne
 * @copyright  1997-2014 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */ 

$hascorpweb = (!empty($PAGE->theme->settings->corpweb));
$hassupportemail = (!empty($CFG->supportemail)); 
$hasemailimg = (!empty($PAGE->theme->settings->emailimg));
$hasskype = (!empty($PAGE->theme->settings->skype));
        
$hascontactnote = (!empty($PAGE->theme->settings->contactnote));
        
$hasdayviews = (!empty($PAGE->theme->settings->dayviews));
$hasflickr = (!empty($PAGE->theme->settings->flickr));
$hasfotolog = (!empty($PAGE->theme->settings->fotolog));
$hasinstagram = (!empty($PAGE->theme->settings->instagram));
$haspanoramio = (!empty($PAGE->theme->settings->panoramio));
$haspicasa = (!empty($PAGE->theme->settings->picasa));
$haspixabay = (!empty($PAGE->theme->settings->pixabay));
$hasphotobucket = (!empty($PAGE->theme->settings->photobucket));

$hasdailymotion = (!empty($PAGE->theme->settings->dailymotion));
$hasschooltube = (!empty($PAGE->theme->settings->schooltube));
$hasvideolog = (!empty($PAGE->theme->settings->videolog));
$hasvimeo = (!empty($PAGE->theme->settings->vimeo));
$hasyoutube = (!empty($PAGE->theme->settings->youtube));

$hasdeviantart = (!empty($PAGE->theme->settings->deviantart));
$hasmyspace = (!empty($PAGE->theme->settings->myspace));

$haslinkedin = (!empty($PAGE->theme->settings->linkedin));
$hasxing = (!empty($PAGE->theme->settings->xing));
$hasyelp = (!empty($PAGE->theme->settings->yelp));

$hasfacebook = (!empty($PAGE->theme->settings->facebook));
$hastwitter = (!empty($PAGE->theme->settings->twitter));
$hasorkut = (!empty($PAGE->theme->settings->orkut));
$haspinterest = (!empty($PAGE->theme->settings->pinterest));
$hasvkontakte = (!empty($PAGE->theme->settings->vkontakte));

$hasaim = (!empty($PAGE->theme->settings->aim));
$hasgoogleplus = (!empty($PAGE->theme->settings->googleplus));
$hasmicrosoftid = (!empty($PAGE->theme->settings->microsoftid));
$hasopenid = (!empty($PAGE->theme->settings->openid));
$hasyahooid = (!empty($PAGE->theme->settings->yahooid));

$hassocial1url = (!empty($PAGE->theme->settings->social1url));
$hassocial1ico = (!empty($PAGE->theme->settings->social1ico));

$hasmoodlecredit = (!empty($PAGE->theme->settings->moodlecredit));
$hascompatcredit = (!empty($PAGE->theme->settings->compatcredit));
$compatwai = $PAGE->theme->settings->compatwai;
$compattested = $PAGE->theme->settings->compattested;
$compattested0 = (!empty($compattested[0]));
$compattested1 = (!empty($compattested[1]));
$compattested2 = (!empty($compattested[2]));
$compattested3 = (!empty($compattested[3]));
$compattested4 = (!empty($compattested[4]));
        
$hasfootnote = (!empty($PAGE->theme->settings->footnote));
?>
        <!-- Contact information and links _ LEFT(contact) + CENTER(contact note _site adm-> appearance -> themes -> aigne) + RIGHT(social links) -->
        <div class="contact">
            <div class="contact" id="left">
                <?php echo get_string('contact','theme_aigne');?><br>
                <!-- Corporation / Institution Web Site -->
                <?php if ($hascorpweb) { ?>
                    <a href="<?php echo $PAGE->theme->settings->corpweb;?>" title="&nbsp;:::&nbsp;corpweb&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('brands/corpweb', 'theme')?>" alt="corpweb"></a>
                <?php } ?>
                <!-- Official eMail -->
                <?php if ($hassupportemail) { ?>
                    <a  href="mailto:<?php echo get_config('moodle','supportemail');?>?subject=Información <?php echo $SITE->fullname;?>" title="<?php echo get_string('sendadminemail','theme_aigne');?>" target="_blank">
                        <img src="<?php echo $OUTPUT->pix_url('brands/email_img', 'theme')?>" alt="email">
                    <?php if ($hasemailimg) { ?>
                        <img src="<?php echo $PAGE->theme->setting_file_url('emailimg', 'emailimg')?>" alt="email">
                    <?php } ?>
                    </a>
                <?php } ?>
                <!-- Skype Contact User Name -->
                <?php if ($hasskype) { ?>
                    <a href="<?php echo $PAGE->theme->settings->skype;?>" title="&nbsp;:::&nbsp;skype&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('brands/skype', 'theme')?>" alt="skype"></a>
                <?php } ?>
                <?php if ($hascontactnote) { ?><?php } ?>
            </div>
            <div class="contact" id="center">
                <!-- Fisical Site Address -->
                <?php if ($hascontactnote) { ?>
                    <br>
                    <div class="fisicalsite"><img src="<?php echo $OUTPUT->pix_url('brands/site', 'theme')?>" alt="fisical site"></div>
                    <div class="fisicalsite"><?php echo $PAGE->theme->settings->contactnote; ?></div>
                <?php } ?>
            </div>
            <div class="contact" id="right">
            <?php echo get_string('sociallinks','theme_aigne');?><br>
                <!-- Web Site PHOTO Content Social Links -->
                <?php if ($hasdayviews) {?><a href="<?php echo $PAGE->theme->settings->dayviews;?>" title="&nbsp;:::&nbsp;DayViews&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/dayviews', 'theme')?>" alt="dayviews"></a> <?php } ?>
                <?php if ($hasflickr) {?><a href="<?php echo $PAGE->theme->settings->flickr;?>" title="&nbsp;:::&nbsp;Flickr&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/flickr', 'theme')?>" alt="flickr"></a> <?php } ?>
                <?php if ($hasfotolog) {?><a href="<?php echo $PAGE->theme->settings->fotolog;?>" title="&nbsp;:::&nbsp;FotoLog&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/fotolog', 'theme')?>" alt="fotolog"></a> <?php } ?>
                <?php if ($hasinstagram) {?><a href="<?php echo $PAGE->theme->settings->instagram;?>" title="&nbsp;:::&nbsp;Instagram&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/instagram', 'theme')?>" alt="instagram"></a> <?php } ?>
                <?php if ($haspanoramio) {?><a href="<?php echo $PAGE->theme->settings->panoramio;?>" title="&nbsp;:::&nbsp;Panoramio&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/panoramio', 'theme')?>" alt="panoramio"></a> <?php } ?>
                <?php if ($haspicasa) {?><a href="<?php echo $PAGE->theme->settings->picasa;?>" title="&nbsp;:::&nbsp;Picasa&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/picasa', 'theme')?>" alt="picasa"></a> <?php } ?>
                <?php if ($haspixabay) {?><a href="<?php echo $PAGE->theme->settings->pixabay;?>" title="&nbsp;:::&nbsp;PixaBay&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/pixabay', 'theme')?>" alt="pixabay"></a> <?php } ?>
                <?php if ($hasphotobucket) {?><a href="<?php echo $PAGE->theme->settings->photobucket;?>" title="&nbsp;:::&nbsp;PhotoBucket&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/photobucket', 'theme')?>" alt="photobucket"></a> <?php } ?>
                <!-- Web Site VIDEO Content Social Links -->
                <?php if ($hasdailymotion) {?><a href="<?php echo $PAGE->theme->settings->dailymotion;?>" title="&nbsp;:::&nbsp;DailyMotion&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/dailymotion', 'theme')?>" alt="dailymotion"></a> <?php } ?>
                <?php if ($hasschooltube) {?><a href="<?php echo $PAGE->theme->settings->schooltube;?>" title="&nbsp;:::&nbsp;SchoolTube&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/schooltube', 'theme')?>" alt="schooltube"></a> <?php } ?>
                <?php if ($hasvideolog) {?><a href="<?php echo $PAGE->theme->settings->videolog;?>" title="&nbsp;:::&nbsp;VideoLog&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/videolog', 'theme')?>" alt="videolog"></a> <?php } ?>
                <?php if ($hasvimeo) {?><a href="<?php echo $PAGE->theme->settings->vimeo;?>" title="&nbsp;:::&nbsp;Vimeo&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/vimeo', 'theme')?>" alt="vimeo"></a> <?php } ?>
                <?php if ($hasyoutube) {?><a href="<?php echo $PAGE->theme->settings->youtube;?>" title="&nbsp;:::&nbsp;YouTube&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/youtube', 'theme')?>" alt="youtube"></a> <?php } ?>
                <!-- Web Site ART Content Social Links -->
                <?php if ($hasdeviantart) {?><a href="<?php echo $PAGE->theme->settings->deviantart;?>" title="&nbsp;:::&nbsp;DeviantArt&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/deviantart', 'theme')?>" alt="deviantart"></a> <?php } ?>
                <?php if ($hasmyspace) {?><a href="<?php echo $PAGE->theme->settings->myspace;?>" title="&nbsp;:::&nbsp;MySpace&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/myspace', 'theme')?>" alt="MySpace"> </a><?php }?>
                <!-- Web Site Professional Social Links -->
                <?php if ($haslinkedin) {?><a href="<?php echo $PAGE->theme->settings->linkedin;?>" title="&nbsp;:::&nbsp;Linked In&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/linkedin', 'theme')?>" alt="linked in"></a> <?php } ?>
                <?php if ($hasxing) {?><a href="<?php echo $PAGE->theme->settings->xing;?>" title="&nbsp;:::&nbsp;Xing&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/xing', 'theme')?>" alt="xing"></a> <?php } ?>
                <?php if ($hasyelp) {?><a href="<?php echo $PAGE->theme->settings->yelp;?>" title="&nbsp;:::&nbsp;Yelp&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/yelp', 'theme')?>" alt="yelp"></a> <?php } ?>
                <!-- Web Site Social Links -->
                <?php if ($hasfacebook) {?><a href="<?php echo $PAGE->theme->settings->facebook;?>" title="&nbsp;:::&nbsp;Facebook&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/facebook', 'theme')?>" alt="facebook"></a> <?php } ?>
                <?php if ($hastwitter) {?><a href="<?php echo $PAGE->theme->settings->twitter;?>" title="&nbsp;:::&nbsp;Twitter&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/twitter', 'theme')?>" alt="twitter"></a> <?php } ?>
                <?php if ($hasorkut) {?><a href="<?php echo $PAGE->theme->settings->orkut;?>" title="&nbsp;:::&nbsp;orkut&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/orkut', 'theme')?>" alt="orkut"> </a><?php }?>
                <?php if ($haspinterest) {?><a href="<?php echo $PAGE->theme->settings->pinterest;?>" title="&nbsp;:::&nbsp;Pinterest&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/pinterest', 'theme')?>" alt="pinterest"> </a><?php }?>
                <?php if ($hasvkontakte) {?><a href="<?php echo $PAGE->theme->settings->vkontakte;?>" title="&nbsp;:::&nbsp;VKontakte&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/vkontakte', 'theme')?>" alt="vkontakte"> </a><?php }?>
                <!-- Web Site Social ID Profiles -->
                <?php if ($hasaim) {?><a href="<?php echo $PAGE->theme->settings->aim;?>" title="&nbsp;:::&nbsp;AIM&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/aim', 'theme')?>" alt="aim"> </a><?php }?>
                <?php if ($hasgoogleplus) {?><a href="<?php echo $PAGE->theme->settings->googleplus;?>" title="&nbsp;:::&nbsp;Google+&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/googleplus', 'theme')?>" alt="google+"> </a><?php }?>
                <?php if ($hasmicrosoftid) {?><a href="<?php echo $PAGE->theme->settings->microsoftid;?>" title="&nbsp;:::&nbsp;Microsoft ID&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/msn', 'theme')?>" alt="microsoftid"> </a><?php }?>
                <?php if ($hasopenid) {?><a href="<?php echo $PAGE->theme->settings->openid;?>" title="&nbsp;:::&nbsp;Open ID&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/openid', 'theme')?>" alt="openid"> </a><?php }?>
                <?php if ($hasyahooid) {?><a href="<?php echo $PAGE->theme->settings->yahooid;?>" title="&nbsp;:::&nbsp;Yahoo ID&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/yahooid', 'theme')?>" alt="yahooid"> </a><?php }?>
                <!-- Custom Social Link -->
                <?php if ($hassocial1url) {?><a href="<?php echo $PAGE->theme->settings->social1url;?>" title="&nbsp;:::&nbsp;Social Net&nbsp;:::&nbsp;" target="_blank">
                    <?php if ($hassocial1ico) { ?>
                        <img src="<?php echo $OUTPUT->pix_url('brands/' . $PAGE->theme->settings->social1ico . '', 'theme')?>" alt="Social Net">
                    <?php } else { ?>
                        <img src="<?php echo $OUTPUT->pix_url('brands/socialnet', 'theme')?>" alt="Social Net">
                    <?php } ?></a>
                <?php } ?>
            </div>
        </div>
        <!-- Credits information and links _ TOP(moodle link) + MIDDLE(compatibility links) + BOTTOM(foot note _site adm-> appearence -> theme -> aigne) -->
        <div class="credits">
            <?php if ($hasmoodlecredit) { 
                echo get_string('powered','theme_aigne');?>
                <a href="http://moodle.org" title="&nbsp;:::&nbsp;Moodle&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('moodlelogo')?>" alt="Moodle logo" width="80" height="20"></a>
                &nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;
                <a href="http://moodle.org/plugins/view.php?plugin=theme_afterburner" title="&nbsp;:::&nbsp;moodle theme afterburner&nbsp;:::&nbsp;"  target="_blank">
                <?php echo get_string('original_theme','theme_aigne');?></a>
            <?php } ?>
            <?php if ($hascompatcredit) { ?>
                <br>
            <?php switch ($compatwai) {
                case 1:
                    break;
                case 2:
                    // WIA WAI Validator A ?>
                    <a href="http://www.w3.org/WAI/WCAG1A-Conformance" title="&nbsp;:::&nbsp;WIA WAI Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/wcag1A-blue','theme')?>" alt="A Compliance _ WIA WAI Validator" width="57" height="20"></a>
                    <?php break;
                case 3:
                    // WIA WAI Validator AA ?>
                    <a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="&nbsp;:::&nbsp;WIA WAI Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/wcag1AA-blue','theme')?>" alt="AA Compliance _ WIA WAI Validator" width="57" height="20"></a>
                    <?php break;
                case 4:
                    // WIA WAI Validator AAA ?>
                    <a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" title="&nbsp;:::&nbsp;WIA WAI Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/wcag1AAA-blue','theme')?>" alt="AAA Compliance _ WIA WAI Validator" width="57" height="20"></a>
                    <?php break;                                                      
                default:
                    break;
            } ?>
                <?php if ($compattested0) { ?>
                    <!-- WIA CSS Validator -->
                    <a href="http://jigsaw.w3.org/css-validator/#validate_by_upload" title="&nbsp;:::&nbsp;WIA CSS Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/vcss-blue','theme')?>" alt="WIA CSS Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested1) { ?>
                    <!-- WIA HTML 4.0 Validator -->
                    <a href="http://validator.w3.org/check?uri=referer" title="&nbsp;:::&nbsp;WIA HTML 4.0 Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/w3chtml40','theme')?>" alt="WIA HTML 4.0 Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested2) { ?>
                    <!-- WIA XHTML 1.0 Validator -->
                    <a href="http://validator.w3.org/check?uri=referer" title="&nbsp;:::&nbsp;WIA HTML 4.0 Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/w3cxhtml10','theme')?>" alt="WIA HTML 4.0 Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested3) { ?>
                    <!-- Cynthia Validator -->
                    <a href="http://www.cynthiasays.com/" title="&nbsp;:::&nbsp;Cynthia Validator&nbsp;:::&nbsp;" target="_blank">
                    <img src="<?php echo $OUTPUT->pix_url('images/CynthiaTest','theme')?>" alt="Cynthia Validator" width="57" height="20"></a>
                <?php } ?>
                <?php if ($compattested4) { ?>
                    <!-- Children Free Validator -->
                <?php } ?>
            <?php } ?>
            <?php if ($hasfootnote) {?>
                <br>
                <?php echo $PAGE->theme->settings->footnote;?>
            <?php } ?>
        </div>
