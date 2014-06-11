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
$hasmaplink = (!empty($PAGE->theme->settings->maplink)); 
  
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

$compatsocial = $PAGE->theme->settings->compatsocial;
$compatsocial0 = (!empty($compatsocial[0]));
$compatsocial1 = (!empty($compatsocial[1]));
$compatsocial2 = (!empty($compatsocial[2]));
$compatsocial3 = (!empty($compatsocial[3]));
$compatsocial4 = (!empty($compatsocial[4]));

$compattested = $PAGE->theme->settings->compattested;
$compattested0 = (!empty($compattested[0]));
$compattested1 = (!empty($compattested[1]));
$compattested2 = (!empty($compattested[2]));
$compattested3 = (!empty($compattested[3]));
$compattested4 = (!empty($compattested[4]));

$compatbrowser = $PAGE->theme->settings->compatbrowser;
$compatbrowser0 = (!empty($compatbrowser[0]));
$compatbrowser1 = (!empty($compatbrowser[1]));
$compatbrowser2 = (!empty($compatbrowser[2]));
$compatbrowser3 = (!empty($compatbrowser[3]));

$compatos = $PAGE->theme->settings->compatos;
$compatos0 = (!empty($compatos[0]));
$compatos1 = (!empty($compatos[1]));
$compatos2 = (!empty($compatos[2]));
$compatos3 = (!empty($compatos[3]));
$compatos4 = (!empty($compatos[4]));

$compatgadget = $PAGE->theme->settings->compatdevice;
$compatgadget0 = (!empty($compatgadget[0]));
$compatgadget1 = (!empty($compatgadget[1]));
$compatgadget2 = (!empty($compatgadget[2]));
$compatgadget3 = (!empty($compatgadget[3]));
$compatgadget4 = (!empty($compatgadget[4]));
        
$hasfootnote = (!empty($PAGE->theme->settings->footnoteshow));
?>
<!-- Contact information and links _ LEFT(contact) + CENTER(contact note) + RIGHT(social links) -->
<div class="contact">
    <div id="left">
        <?php echo get_string('contactlink','theme_aigne');?><br>
        <?php if ($hascorpweb) { ?>
            <a href="<?php echo $PAGE->theme->settings->corpweb;?>" title="&nbsp;:::&nbsp;corpweb&nbsp;:::&nbsp;" target="_blank">
            <img src="<?php echo $OUTPUT->pix_url('brands/corpweb', 'theme')?>" alt="corpweb"></a>
        <?php } ?>
        <?php if ($hassupportemail) { ?>
            <a  href="mailto:<?php echo get_config('moodle','supportemail');?>?subject=<?php echo get_string('sendemailsubj','theme_aigne',$SITE->fullname );?>" title="<?php echo get_string('sendemailtitle','theme_aigne');?>" target="_blank">
                        <img src="<?php echo $OUTPUT->pix_url('brands/email_img', 'theme')?>" alt="email">
            <?php if ($hasemailimg) { ?>
                        <img src="<?php echo $PAGE->theme->setting_file_url('emailimg', 'emailimg')?>" alt="email">
            <?php } ?>
            </a>
        <?php } ?>
        <?php if ($hasskype) { ?>
            <a href="<?php echo $PAGE->theme->settings->skype;?>" title="&nbsp;:::&nbsp;skype&nbsp;:::&nbsp;" target="_blank">
            <img src="<?php echo $OUTPUT->pix_url('brands/skype', 'theme')?>" alt="skype"></a>
        <?php } ?>
    </div>
    <div id="center">
        <?php if ($hascontactnote) { ?>
            <?php echo get_string('fisicallink','theme_aigne');?><br>
            <div class="fisicalsite"><img src="<?php echo $OUTPUT->pix_url('brands/site', 'theme')?>" alt="fisical site"></div>
            <div class="fisicalsite"><?php echo $PAGE->theme->settings->contactnote; ?></div>
            <?php if ($hasmaplink) { ?>
                <div class="fisicalsite" style="padding: 0px 1em 0px 3em;">
                <a href="<?php echo $PAGE->theme->settings->maplink;?>" title="&nbsp;:::&nbsp;map link&nbsp;:::&nbsp;" target="_blank">
                <img src="<?php echo $OUTPUT->pix_url('brands/maps', 'theme')?>" alt="link to map"></a>
                </div>
            <?php } ?>
            
        <?php } ?>
    </div>
    <div id="right">
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
        <?php if ($hassocial1url) {?>
            <a href="<?php echo $PAGE->theme->settings->social1url;?>" title="&nbsp;:::&nbsp;Social Net&nbsp;:::&nbsp;" target="_blank">
            <?php if ($hassocial1ico) { ?>
                <img src="<?php echo $OUTPUT->pix_url('brands/' . $PAGE->theme->settings->social1ico . '', 'theme')?>" alt="Social Net">
            <?php } else { ?>
                <img src="<?php echo $OUTPUT->pix_url('brands/socialnet', 'theme')?>" alt="Social Net">
            <?php } ?></a>
        <?php } ?>
    </div>
</div>
<hr width="50%">
<!-- Credits information and links _ TOP(moodle & compatibility links) + BOTTOM(foot note) -->
<!-- TODO -> Crear los strings de todos los nuevos parámetros y de los 'title' -->
<div class="credits">
    <?php if ($hasmoodlecredit) {
        //echo get_string('powered','theme_aigne');?>
        <a href="http://moodle.org" title="&nbsp;:::&nbsp;Moodle&nbsp;:::&nbsp;" target="_blank">
        <img class="moodleico" src="<?php echo $OUTPUT->pix_url('brands/moodlelogo','theme')?>" alt="Moodle logo"></a>
    <?php } ?>
    <?php if ($compatsocial > 0) { ?>
        <span>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;</span>
        <?php if ($compatsocial0) {?><img src="<?php echo $OUTPUT->pix_url('brands/child','theme')?>"title="&nbsp;:::&nbsp; <?php echo get_string('csocial_1', 'theme_aigne')?> &nbsp;:::&nbsp;" alt="child"></a><?php } ?>
        <?php if ($compatsocial1) {?><img src="<?php echo $OUTPUT->pix_url('brands/woman','theme')?>"title="&nbsp;:::&nbsp; <?php echo get_string('csocial_2', 'theme_aigne')?> &nbsp;:::&nbsp;" alt="woman"></a><?php } ?>
        <?php if ($compatsocial2) {?><img src="<?php echo $OUTPUT->pix_url('brands/multicultural','theme')?>"title="&nbsp;:::&nbsp; <?php echo get_string('csocial_3', 'theme_aigne')?> &nbsp;:::&nbsp;" alt="cultural"></a><?php } ?>
    <?php } ?>
    <?php if ($compatwai) { ?>
        <span>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;</span>
        <?php switch ($compatwai) {
            case 0:
                break;
            case 1: ?>
                <a href="http://www.w3.org/WAI/WCAG1A-Conformance" title="&nbsp;:::&nbsp;WIA WAI Validator&nbsp;:::&nbsp;" target="_blank">
                <img class="w3cico" src="<?php echo $OUTPUT->pix_url('brands/wcag1A-blue','theme')?>" alt="A Compliance _ WIA WAI Validator"></a>
                <?php break;
            case 2: ?>
                <a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="&nbsp;:::&nbsp;WIA WAI Validator&nbsp;:::&nbsp;" target="_blank">
                <img class="w3cico" src="<?php echo $OUTPUT->pix_url('brands/wcag1AA-blue','theme')?>" alt="AA Compliance _ WIA WAI Validator"></a>
                <?php break;
            case 3: ?>
                <a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" title="&nbsp;:::&nbsp;WIA WAI Validator&nbsp;:::&nbsp;" target="_blank">
                <img class="w3cico" src="<?php echo $OUTPUT->pix_url('brands/wcag1AAA-blue','theme')?>" alt="AAA Compliance _ WIA WAI Validator"></a>
                <?php break;                                                      
            default:
                break;
        } ?>
    <?php } ?>
    <?php if ($compattested > 0) { ?>
        <span>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;</span>
        <?php if ($compattested0) { ?>
            <a href="http://jigsaw.w3.org/css-validator/#validate_by_upload" title="&nbsp;:::&nbsp;WIA CSS Validator&nbsp;:::&nbsp;" target="_blank">
            <img class="w3cico" src="<?php echo $OUTPUT->pix_url('brands/vcss-blue','theme')?>" alt="WIA CSS Validator"></a>
        <?php } ?>
        <?php if ($compattested1) { ?>
            <a href="http://validator.w3.org/check?uri=referer" title="&nbsp;:::&nbsp;WIA HTML 4.0 Validator&nbsp;:::&nbsp;" target="_blank">
            <img class="w3cico" src="<?php echo $OUTPUT->pix_url('brands/w3chtml40','theme')?>" alt="WIA HTML 4.0 Validator"></a>
        <?php } ?>
        <?php if ($compattested2) { ?>
            <a href="http://validator.w3.org/check?uri=referer" title="&nbsp;:::&nbsp;WIA XHTML 1.0 Validator&nbsp;:::&nbsp;" target="_blank">
            <img class="w3cico" src="<?php echo $OUTPUT->pix_url('brands/w3cxhtml10','theme')?>" alt="WIA XHTML 1.0 Validator"></a>
        <?php } ?>
    <?php } ?>
    <?php if ($compatbrowser > 0) { ?>
        <span>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;</span>
        <?php if ($compatbrowser0) {?><img src="<?php echo $OUTPUT->pix_url('brands/explorer','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('browser_1', 'theme_aigne')?> &nbsp;:::&nbsp;" alt="Explorer"></a><?php } ?>
        <?php if ($compatbrowser1) {?><img src="<?php echo $OUTPUT->pix_url('brands/firefox','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('browser_2', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Firefox"></a><?php } ?>
        <?php if ($compatbrowser2) {?><img src="<?php echo $OUTPUT->pix_url('brands/chrome','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('browser_3', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Chrome"></a><?php } ?>
        <?php if ($compatbrowser3) {?><img src="<?php echo $OUTPUT->pix_url('brands/opera','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('browser_4', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Opera"></a><?php } ?>
    <?php } ?>
    <?php if ($compatos > 0) { ?>
        <span>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;</span>
        <?php if ($compatos0) {?><img src="<?php echo $OUTPUT->pix_url('brands/windows','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('osystem_1', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Windows"></a><?php } ?>
        <?php if ($compatos1) {?><img src="<?php echo $OUTPUT->pix_url('brands/linux','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('osystem_2', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Linux"></a><?php } ?>
        <?php if ($compatos2) {?><img src="<?php echo $OUTPUT->pix_url('brands/apple','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('osystem_3', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Apple"></a><?php } ?>
        <?php if ($compatos3) {?><img src="<?php echo $OUTPUT->pix_url('brands/android','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('osystem_4', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Android"></a><?php } ?>
        <?php if ($compatos4) {?><img src="<?php echo $OUTPUT->pix_url('brands/blackberry','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('osystem_5', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Blackberry"></a><?php } ?>
    <?php } ?>
    <?php if ($compatgadget > 0) { ?>
        <span>&nbsp;&nbsp;&nbsp;:::&nbsp;&nbsp;&nbsp;</span>
        <?php if ($compatgadget0) {?><img src="<?php echo $OUTPUT->pix_url('brands/hdtv','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('device_1', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="HDTV"></a><?php } ?>
        <?php if ($compatgadget1) {?><img src="<?php echo $OUTPUT->pix_url('brands/desktop','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('device_2', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Desktop"></a><?php } ?>
        <?php if ($compatgadget2) {?><img src="<?php echo $OUTPUT->pix_url('brands/laptop','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('device_3', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Laptop"></a><?php } ?>
        <?php if ($compatgadget3) {?><img src="<?php echo $OUTPUT->pix_url('brands/tablet','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('device_4', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Tablet"></a><?php } ?>
        <?php if ($compatgadget4) {?><img src="<?php echo $OUTPUT->pix_url('brands/mobile','theme')?>" title="&nbsp;:::&nbsp; <?php echo get_string('device_5', 'theme_aigne')?> &nbsp;:::&nbsp;"  alt="Mobile"></a><?php } ?>
   <?php } ?>
   <?php if ($hasfootnote) {?>
        <br>
        <?php echo $PAGE->theme->settings->footnote;?>
    <?php } ?>
</div>
