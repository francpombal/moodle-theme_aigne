<?php
/**
 * Strings for component 'theme_aigne', language 'en'
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http: *www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
/* GENERAL INFORMATION */
$string['pluginname'] = 'aigne';
$string['configtitle'] = 'aigne Custom Settings';
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';
$string['notes'] = 'aigne theme notes';
$string['notesdesc'] = 'To apply any settings simply press "Save Changes" at the bottom of this page. If you do not have "Theme Designer Mode" enabled you may need to visit Site Administration ► Development ► <a href="purgecaches.php">Purge All Caches</a>, to force the refresh.';
$string['noimplemented'] = 'Not implemented yet. We\'re sorry';
$string['sep_hr'] = '<hr>';
$string['sep_hr2'] = '<hr width="50%" align="center">';
$string['sep_br'] = '<br />';
$string['sep_bhr'] = '<br /><hr>';
/* HEADER STRINGS _ TOP */
$string['defaultfontsizetxt'] = 'Press to restore the font size. (Revert to normal size web design)';
$string['decfontsizetxt'] = 'Press to decrease the font size. (Decrease text size to improve accessibility)';
$string['incfontsizetxt'] = 'Press to increase the font size. (Increase text size to improve accessibility)';
$string['defaultstyletxt'] = 'Press to restore the original appearance of the web design';
$string['styletxt'] = 'Press to apply a different colour scheme over the web design';
/* FOOTER STRINGS _ BOTTOM */
$string['sociallinks'] = '... as well in the Social Networks: ';
$string['powered'] = 'Powered by: ';
$string['original_theme'] = 'Layout inspired on original theme by Mary Evans';
$string['lastpageupdate'] = 'Last page update on ';
$string['thanksvisit'] = 'Thanks for your trust';
$string['reservedrights'] = 'All rights reserved';
$string['contact'] = 'Contact with us: ';
$string['sendadminemail'] = 'send an eMail to Web Site Administrator ... ';
/* COPYRIGHT PROTECTION STTRINGS */
$string['nocontentprint'] = '
<h2 style="text-align: center">Printing prevention</h2>
<h3><b>Copyright:</b></h3>
  <p>All content on {$a->sitename} is covered by the existing legislation protecting 
     copyright. For more information, visit our overview page {$a->disclaimer}.</p>
  <p>&nbsp;</p>
  
<h3><b>Printing:</b></h3>
  <p>To prevent fraud in the use of the content of our courses, we have installed 
     some basic tools to prevent printing such content and protect its copyright.</p>
  <p>&nbsp;</p>
  
<h3><b>Get a copy:</b></h3>
  <p>If you are enrolled in one of our courses and you need a copy of the content, 
     which are not included on the  course, contact your teacher or the Site 
     Administrator for help on the subject.</p>
  <p>&nbsp;</p>
<hr>
  <p style="text-align: center">Sorry for the inconvenience</p>
  <p>&nbsp;</p>';
$string['nocontentdrag'] = 'Due to copyright protection of our courses, it is disabled drag (drag & drop) some content';
$string['nocontentselect'] = 'Due to copyright protection of our courses, it is disabled select (copy & paste) some content';
/* NAVHELP PAGES STRINGS */
$string['navhelppage'] = 'navigation aid page';
$string['navhelppagetitle'] = 'navigation help';
$string['webmap'] = 'web map';
$string['help'] = 'help';
$string['footsearch'] = 'search';
$string['stats'] = 'stats';
$string['disclaimer'] = 'disclaimer';
$string['policies'] = 'site policies';
$string['privacy'] = 'privacy';
$string['security'] = 'security';
$string['accessibility'] = 'accessibility';
$string['webmappage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<p>Here you can create a map with the structure of pages needed
   to raise awareness of your organization, its know-how and team 
   that makes up your educational project.</p>
<h2>Given parameters::</h2>
  <ul>{$a->sitename}</ul>
<p>&nbsp;</p>';
$string['helppage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Navigation Aid:</h2>
  <p>Here you can enter all details required to facilitate navigation on 
     courses. In addition, you can create a section to link to the 
     "Student\'s Handbook" or user\'s manuals.</p>
<h2>Moodle:</h2>
  <p>Our learning platform is based on Moodle. If you want to extend
     information on the usability of Moodle, you can access the
     <a href="http://docs.moodle.org">official support documents</a>.</p>
<h2>Given parameters::</h2>
  <ul>{$a->link}</ul>
  <ul>{$a->supportemail}</ul>
  <ul>{$a->sendadminemail}</ul>
  <p>&nbsp;</p>';
$string['footsearchpage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Search:</h2>
  <p>Here you can enter general search tools.</p>
  <p>&nbsp;</p>';
$string['statspage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Statistics:</h2>
  <p>Here you can enter the browsing statistics results or
     an evaluation report of training within your organization.</p>
  <p>&nbsp;</p>';
$string['disclaimerpage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Legal notice:</h2>
<p>This document governs the use of Web sites attached to Internet domain 
   "{$a->sitenamelow}.com"... or so on.</p>
<h2>Given parameters::</h2>
  <ul>{$a->sitenamelow}</ul>
  <ul>{$a->sitename}</ul>
  <ul>{$a->supportemail}</ul>
  <ul>{$a->sendadminemail}</ul>
  <p>&nbsp;</p>';
$string['policiespage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Site policies:</h2>
  <p>Here you can enter website usage policies, duties and rights of students, 
     etc.</p>
  <p>&nbsp;</p>';
$string['privacypage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Privacy of user and students data:</h2>
<p>Here you can enter information about the privacy of data in the web site 
   navigation, as well as different legal clauses mandatory.</p>
<h2>Given parameters::</h2>
  <ul>{$a->sitenamelow}</ul>
  <ul>{$a->supportemail}</ul>
  <ul>{$a->sendadminemail}</ul>
  <ul>{$a->remoteaddr}</ul>
  <ul>{$a->remotehost}</ul>
  <ul>{$a->remoteuser}</ul>
  <ul>{$a->language}</ul>
  <ul>{$a->useragent}</ul>
  <ul>{$a->referer}</ul>  
  <p>&nbsp;</p>';
$string['securitypage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Security:</h2>
<p>Here you can enter the safety measures used to prevent SPAM, 
   the antivirus tools and backup procedures.</p>
  <p>&nbsp;</p>';
$string['accessibilitypage'] = '
<h2 style="text-align: center">This is a sample page</h2>
<p>&nbsp;</p>
<h2>Accessibility/h2>
<p>Here you can enter the tools that are installed on the website for 
   easy navigation to people with visual impairments or limited mobility.</p>
<h2>Given parameters::</h2>
  <ul>{$a->supportemail}</ul>
  <ul>{$a->sendadminemail}</ul> 
  <p>&nbsp;</p>';
/****************************************************************************/
/* CONFIGURATION STTRINGS */
$string['csshead'] = 'Customization of the general appearance (CSS design)';
$string['bodyfont'] = 'Font Size';
$string['bodyfontdesc'] = 'If you want you can set a font reference. It is known to cause display problems with certain blocks if you set highest font size, try it and decide to.';
$string['colorsch'] = 'Site Colour Schema';
$string['colorschdesc'] = 'Select the site default Colour Schema. [The design still unfinished] <br />
    <table class="headerop" Style="width: 275px; border: 2px solid #322C65;">
        <tr Style="height:25px">
            <td Style="background-color:#322C65">&nbsp;</td>
            <td Style="background-color:#007EBA">&nbsp;</td>
            <td Style="background-color:#CCDDEE">&nbsp;</td>
            <td Style="background-color:#F3F7FF">&nbsp;</td>
            <td Style="background-color:#FFFFFF">{$a->css_color1}</td>
            <td Style="background-color:#FFFFFF; color:#3C3C3C">A</td>
        </tr>
        <tr Style="height:25px">
            <td Style="background-color:#F3F7FF">&nbsp;</td>
            <td Style="background-color:#CCDDEE">&nbsp;</td>
            <td Style="background-color:#322C65">&nbsp;</td>
            <td Style="background-color:#000033">&nbsp;</td>
            <td Style="background-color:#FFFFFF">{$a->css_color2}</td>
            <td Style="background-color:#000033; color:#FFFFFF">A</td>
        </tr>
        <tr Style="height:25px">
            <td Style="background-color:#001A1A">&nbsp;</td>
            <td Style="background-color:#004040">&nbsp;</td>
            <td Style="background-color:#4CA9BC">&nbsp;</td>
            <td Style="background-color:#F2FFEB">&nbsp;</td>
            <td Style="background-color:#FFFFFF">{$a->css_color3}</td>
            <td Style="background-color:#FFFFFF; color:#3C3C3C">A</td>
        </tr>
        <tr Style="height:25px">
            <td Style="background-color:#522500">&nbsp;</td>
            <td Style="background-color:#EB8324">&nbsp;</td>
            <td Style="background-color:#F6CC87">&nbsp;</td>
            <td Style="background-color:#FFFFCC">&nbsp;</td>
            <td Style="background-color:#FFFFFF">{$a->css_color4}</td>
            <td Style="background-color:#FFFFFF; color:#3C3C3C">A</td>
        </tr>
        <tr Style="height:25px">
            <td Style="width:25px; background-color:#520000">&nbsp;</td>
            <td Style="width:25px; background-color:#AA0000">&nbsp;</td>
            <td Style="width:25px; background-color:#F1A78E">&nbsp;</td>
            <td Style="width:25px; background-color:#FFF2F2">&nbsp;</td>
            <td Style="width:150px; background-color:#FFFFFF">{$a->css_color5}</td>
            <td Style="width:25px; background-color:#FFFFFF; color:#3C3C3C">A</td>
        </tr>
    </table>
';
$string['css_color1'] = 'Light Blue';
$string['css_color2'] = 'Deep Blue';
$string['css_color3'] = 'Bluish Green';
$string['css_color4'] = 'Orange';
$string['css_color5'] = 'Ruby Red';
$string['backbody'] = 'Page background';
$string['backbodydesc'] = 'If you wish you can add an image that appears at the bottom of every page. <br />
This image must be a JPG / PNG / GIF with minimal 775px wide, it must also keep in mind that will be repeated in the Y-axis (vertically).';
$string['bgposition'] = 'Page background position';
$string['bgpositiondesc'] = 'When you set the previous option, depending on the image type, you can configure its behavior, choosing if repeated, and in what direction.';
$string['no-repeat'] = 'No repeat';
$string['repeat'] = 'Mosaic';
$string['repeat-x'] = 'Repeat over X';
$string['repeat-y'] = 'Repeat over Y';
$string['backcolor'] = 'Background Colour';
$string['backcolordesc'] = 'If you wish you can set a background colour, instead of imposing an image. <br /> 
If you want to maintain the original colour, select white or type # FFFFFF.';
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';
/**/
$string['logohead'] = 'Setting the logo';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Please add your custom logo if you want to replace the default logo for this theme.<br />
For your information, the default logo is a JPG image 150px wide by 55px high ';
$string['slogan'] = 'Motto / Slogan';
$string['slogandesc'] = 'If you wish you can add a little phrase that appears under the logo, in the form of a slogan/motto. <br />
Please consider the size of the phrase to keep the design of the header.';
$string['sloganaigne'] = 'aigne';
$string['backlogo'] = 'Background image of logo';
$string['backlogodesc'] = 'If you wish you can add a background image for the logo. <br /> 
This image must be a JPG / PNG / GIF with 200px wide by 75px high';
/* HEAD META TAGS _ KEYWORDS = 20 words */
$string['metakeywords'] = 'aigne, education, learning, didactics, pedagogy';
$string['metadescription'] = 'Welcome {$a->sitename}.';
$string['mtaghead'] = 'Meta Tags options';
$string['mtagheaddesc'] = '
';
$string['mtkeywords'] = 'Keywords Meta Tag';
$string['mtkeywordsdesc'] = 'Please add the custom content for "keywords" Meta Tag.<br />
Please be care about the format and the content, words separated with comma and up to 25 words long..<br />
Living blank this option, will generate an automatic expression with 5 words.';
$string['mtdescription'] = 'Description Meta Tag';
$string['mtdescriptiondesc'] = 'Please add the custom content for "description" Meta Tag.<br />
Please be care about the format and the content, and add up to 250 characters long.br />
Living blank this option, will generate an welcome expression.';
$string['optionalmtag'] = 'Optional Meta Tags';
$string['optionalmtagdesc'] = 'If enabled, generates Optional Meta Tags, with automated information over this site.';
$string['custommtag'] = 'Custom Meta Tags';
$string['custommtagdesc'] = 'Please add your custom Meta Tags.<br />
Please be care about the format and the content, writting the entire code, like in a Web Editor, like this sample::<br />
<pre>
&lt;META name="distribution" content="global" /&gt;
&lt;META name="revisit-after" content="31 Days" /&gt;
&lt;META name="robots" content="index,nofollow" /&gt;
</pre>';
$string['dublinmtag'] = 'Dublin Core Meta Tags';
$string['dublinmtagdesc'] = 'If enabled, displays COMPATIBILITY WITH "Dublin Core Metadata Initiative" META TAGs.';
/**/
$string['marketinghead'] = 'Layout options for the site frontpage (marketing)';
$string['marketingheaddesc'] = '::: under construction :::';
$string['headbanner'] = 'Header Banner Show';
$string['headbannerdesc'] = 'If enabled, displays a Banner in the header of the frontpage, before users logged in.';
$string['headerinfo'] = 'Header Banner';
$string['headerinfodesc'] = 'If you wish you can add a fixed image in the header of the frontpage, before users logged in. <br />
This image must be a JPG / PNG / GIF with minimal 1000px wide by 150px max-high.';
$string['quadrobanner'] = 'Marketing Show';
$string['quadrobannerdesc'] = 'If enabled, displays three boxes in the frontpage, before users logged in. <br />
That can be maked up / programmed to display any information about the site or courses, in the layout  "frontinfo.php".';
/**/
$string['custommenuhead'] = 'Custom Menu options';
$string['custommenudesc'] = 'To design a custom menu, should be set up on Site administration ► Appearance ► Themes ► <a href="settings.php?section=themesettings">"Settings"</a> ►  "custommenuitems"  .<br />
';
$string['menucolor'] = 'Custom Menu Main Colour';
$string['menucolordesc'] = 'Select the background colour of the custom menu. Other options should be set directly in the css files (aigne_menu.css).';
$string['menucolorhl'] = 'Custom Menu Contrast Colour';
$string['menucolorhldesc'] = 'Select the contrast background colour of the custom menu. Be carefull with background colour combinations to obtain a lovely design';
$string['menulogout'] = 'Logout Link';
$string['menulogoutdesc'] = 'If enabled, displays a logout/login link at the beggining of custom menu.';
/**/
$string['breadcrumbhead'] = 'Breadcrumb Bar options';
$string['bcsep'] = 'Breadcrumb Spacer';
$string['bcsepdesc'] = 'Select the type of separator to be used on the Navigation Bar (BreadCrumb).';
$string['bcsep1'] = 'Conventional Arrow ( ► ) ';
$string['bcsep2'] = 'Right angle quote ( » ) ';
$string['bcsep3'] = 'Vertical bar ( | ) ';
$string['bcsep4'] = 'Forward Slash ( / ) ';
$string['bcsep5'] = 'Underscore  ( _ ) ';
$string['bcsep6'] = 'Several Colon ( ::: ) ';
$string['bcsep7'] = 'Blank Space ( &nbsp; ) ';
/**/
$string['usernavhead'] = 'User Information area options';
$string['usernav'] = 'User Information area';
$string['usernavdesc'] = 'Select the type of user information to be displayed in the header area.';
$string['useraigne'] = 'On the Header, in aigne style (login + greeting + user name + picture + logout)';
$string['userblock'] = 'On the Navigation Block, in aigne style (login + greeting + user name + picture + logout)';
$string['usermoodle'] = 'On the Header, in moodle standard style (login + user name + logout)';
$string['usernone'] = 'None User Information';
$string['usernavheaddesc'] = '<h5>To the following options must be enabled the User Navigation header area in aigne style.  
Remember the User Navigation area in moodle style have a standard closed format.</h5>';
$string['usernavsalut'] = 'Greeting + Welcome';
$string['usernavsalutdesc'] = 'If enabled, displays Greeting or Welcome Message on the User Information header area.';
$string['welcomemsg'] = 'Custom Welcome Message';
$string['welcomemsgdesc'] = 'Set a custom Welcome Message, that will be displayed in User Information header area';
$string['usernavinfo'] = 'User Name';
$string['usernavinfodesc'] = 'If enabled, displays any user information on the User Information header area.';
$string['usernavpic'] = 'User Picture';
$string['usernavpicdesc'] = 'If enabled, displays the user picture on the User Information header area.';
$string['usernavout'] = 'Logout option';
$string['usernavoutdesc'] = 'If enabled, displays a logout option on the User Information header area.';
$string['outbutton'] = 'Logout option in button style';
$string['outmoodle'] = 'Logout option in moodle hyperlink style';
$string['outnone'] = 'None logout option';
$string['morning_greeting'] = 'Good morning!';
$string['afternoon_greeting'] = 'Good afternoon!';
$string['night_greeting'] = 'Good evening!';
/**/
$string['bottomphead'] = 'Footer options';
$string['navhelphead'] = 'Navigation Aid options';
$string['navhelp'] = 'Navigation Aid Page Link';
$string['navhelpdesc'] = 'Web page address of the navigation aid';
$string['webmapdesc'] = 'If enabled, displays a link on the footer to scheme pages on the Website, which will form the WebMap';
$string['helpdesc'] = 'If enabled, displays a link on the footer to general support';
$string['footsearchdesc'] = 'If enabled, displays a link on the footer to overall search';
$string['statsdesc'] = 'If enabled, displays a link on the footer to usage statistics';
$string['disclaimerdesc'] = 'If enabled, displays a link on the footer to mandatory legal notice';
$string['policiesdesc'] = 'If enabled, displays a link on the footer to the site policies';
$string['privacydesc'] = 'If enabled, displays a link on the footer to browsing privacy information';
$string['securitydesc'] = 'If enabled, displays a link on the footer to browsing security information';
$string['accessibilitydesc'] = 'If enabled, displays a link on the footer to browsing accessibility information';
/**/
$string['contacthead'] = 'Contact options';
$string['corpweb'] = 'Website URL';
$string['corpwebdesc'] = 'Enter the URL of your Institution / Organization / Corporate Web Site. (i.e. http://www.company_domain.com/) <br />
This link has no connection with that www root in config.php.';
$string['emailimg'] = 'eMail anti-spam image';
$string['emailimgdesc'] = 'Here you can add a picture to the eMail address. This will prevent malicious spam tools capture its eMail address.<br />
Set this eMail address on Site administration  ► Server ► <a href="settings.php?section=supportcontact">"Support Contact"</a> ► "supportemail" .
Consider the design proportions and add an image of 32px high.';
$string['skype'] = 'Skype Username';
$string['skypedesc'] = 'Enter the Institution / Organization / Corporate user name in the Skype Network.';
$string['contactnote'] = 'Contact Note';
$string['contactnotedesc'] = 'Whatever you add to this textarea will be displayed in the middle of contact section in footer of every page.';
/**/
$string['socialcontenthead'] = 'Links to any addresses on the social networks, with course media content';
$string['dropbox'] = 'DropBox URL';
$string['dropboxdesc'] = 'Enter the URL of your DropBox page.
<a href="http://www.dropbox.com" target="_blank"> (www.dropbox.com) .</a>';
/**/
$string['dayviews'] = 'DayViews URL';
$string['dayviewsdesc'] = 'Enter the URL of your DayViews page.
<a href="http://dayviews.com/" target="_blank"> (dayviews.com) .</a>';
$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page.
<a href="http://www.flickr.com" target="_blank"> (www.flickr.com) .</a>';
$string['fotolog'] = 'FotoLog URL';
$string['fotologdesc'] = 'Enter the URL of your FotoLog page.
<a href="http://www.fotolog.com/" target="_blank"> (www.fotolog.com) .</a>';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page.
<a href="http://instagram.com/" target="_blank"> (instagram.com) .</a>';
$string['picasa'] = 'Picasa URL';
$string['picasadesc'] = 'Enter the URL of your Picasa page.
<a href="http://picasaweb.google.com/" target="_blank"> (picasaweb.google.com) .</a>';
$string['pixabay'] = 'PixaBay URL';
$string['pixabaydesc'] = 'Enter the URL of your PixaBay page.
<a href="http://pixabay.com/" target="_blank"> (pixabay.com) .</a>';
/**/
$string['dailymotion'] = 'DailyMotion URL';
$string['dailymotiondesc'] = 'Enter the URL of your DailyMotion channel.
<a href="http://www.dailymotion.com/" target="_blank"> (www.dailymotion.com) .</a>';
$string['schooltube'] = 'SchoolTube URL';
$string['schooltubedesc'] = 'Enter the URL of your SchoolTube channel.
<a href="https://www.schooltube.com/" target="_blank"> (www.schooltube.com) .</a>';
$string['videolog'] = 'VideoLog URL';
$string['videologdesc'] = 'Enter the URL of your VideoLog channel.
<a href="http://videolog.tv/" target="_blank"> (videolog.tv) .</a>';
$string['vimeo'] = 'Vimeo URL';
$string['vimeodesc'] = 'Enter the URL of your Vimeo channel.
<a href="http://www.vimeo.com/" target="_blank"> (www.vimeo.com) .</a>';
$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel.
<a href="http://www.youtube.com/" target="_blank"> (www.youtube.com) .</a>';
/**/
$string['deviantart'] = 'DeviantArt URL';
$string['deviantartdesc'] = 'Enter the URL of your DeviantArt account.
<a href="http://www.deviantart.com/" target="_blank"> (www.deviantart.com) .</a>';
$string['myspace'] = 'MySpace URL';
$string['myspacedesc'] = 'Enter the URL of your MySpace profile.
<a href="http://www.myspace.com/" target="_blank"> (www.myspace.com) .</a>';
/**/
$string['socialhead'] = 'Links to any addresses on the social networks';
$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile.
<a href="http://www.linkedin.com/" target="_blank"> (www.linkedin.com) .</a>';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page.
<a href="http://www.facebook.com/" target="_blank"> (www.facebook.com) .</a>';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed.
<a href="http://twitter.com/" target="_blank"> (twitter.com) .</a>';
$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile.
<a href="http://plus.google.com/" target="_blank"> (plus.google.com) .</a>';
$string['vkontakte'] = 'VKontakte URL';
$string['vkontaktedesc'] = 'Enter the URL of your Vkontakte page.
<a href="http://www.vk.com/" target="_blank"> (www.vk.com) .</a>';
$string['orkut'] = 'Orkut URL';
$string['orkutdesc'] = 'Enter the URL of your Orkut profile.
<a href="http://www.orkut.com/" target="_blank"> (www.orkut.com) .</a>';
$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page.
<a href="http://pinterest.com/" target="_blank"> (pinterest.com) .</a>';
/**/
$string['tumblr'] = 'Tumblr URL';
$string['tumblrdesc'] = 'Enter the URL of your Tumblr page.
<a href="http://tumblr.com/" target="_blank"> (tumblr.com) .</a>';
$string['blogger'] = 'Blogger URL';
$string['bloggerdesc'] = 'Enter the URL of your Blogger page.
<a href="http://www.blogger.com/" target="_blank"> (www.blogger.com) .</a>';
/**/
$string['creditshead'] = 'Credit Posts';
$string['moodlecredit'] = 'Credits to Moodle';
$string['moodlecreditdesc'] = 'If enabled, displays on the footer a credit message and a link to the original <a href="http://moodle.org/" target="_blank">moodle.org.</a>';
$string['moodledocslink'] = 'Link to Moodle Docs';
$string['moodledocslinkdesc'] = 'If enabled, displays on the footer a help page link to the original <a href="http://docs.moodle.org/" target="_blank">docs.moodle.org.</a>';
$string['compatcredit'] = 'Compatibilities';
$string['compatcreditdesc'] = 'If enabled, displays on the footer a list with the logos of the different successful compatibilities validations';
$string['compatwai'] = 'Accessibility Tested';
$string['compatwaidesc'] = 'Select the accessibility logo you want displays, count that you have tested at your own responsability
<a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" target="_blank"> (WAI WCAG AAA) .</a>';
$string['compatwai1'] = 'not tested yet';
$string['compatwai2'] = 'Level A ';
$string['compatwai3'] = 'Level AA ';
$string['compatwai4'] = 'Level AAA ';
$string['compattested'] = 'Compatibilities Tested';
$string['compattesteddesc'] = 'Select the compatibilities logo you want displays, count that you have tested at your own responsability';
$string['ctested_1'] = 'WIA CSS Validator tested <a href="http://jigsaw.w3.org/css-validator/#validate_by_upload" target="_blank"> (WIA CSS) .</a>';
$string['ctested_2'] = 'WIA HTML 5.0 or 4.0 Validator tested <a href="http://validator.w3.org/check?uri=referer" target="_blank"> (WIA HTML 4.0) .</a>';
$string['ctested_3'] = 'WIA XHTML 1.0 Validator tested <a href="http://validator.w3.org/check?uri=referer" target="_blank"> (WIA HTML 4.0) .</a>';
$string['ctested_4'] = 'reserved _ Cynthia Validator <a href="http://www.cynthiasays.com/" target="_blank"> (Cynthia) .</a>';
$string['ctested_5'] = 'reserved _ Children Free Validator <a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" target="_blank"> (WAI WCAG AAA) .</a>';
$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer of every page.';
/**/
$string['cortesyhead'] = 'Courtesy Posts';
$string['copyrightstg'] = 'Property Message';
$string['copyrightstgdesc'] = 'Here you can write a message that appears at the end of the footer describing Web site ownership. 
If you leave this blank, will compose a short message with the name of the site and the current year. 
Remember that you can use any of the internationally recognized models: <br />
&nbsp;&nbsp;&nbsp; ► COPYRIGHT © YEAR COMPANY &nbsp;&nbsp;&nbsp; ► COMPANY © YEAR &nbsp;&nbsp;&nbsp; ► YEAR © COMPANY';
$string['sitelicensemsg'] = 'License Type Message';
$string['sitelicensemsgdesc'] = 'If enabled, displays at the end of the footer the license type that governs the content of this website.<br />
The license type can be set in Site Administration ► Extensions ► Licenses ► <a href="settings.php?section=managelicenses">"Licenses Administration"</a> ► "sitedefaultlicense"  . ';
$string['lastmodifiedmsg'] = 'Last Updated Message';
$string['lastmodifiedmsgdesc'] = 'If enabled, displays at the end of the footer update information of the page';
$string['thanksvisitmsg'] = 'Message of appreciation';
$string['thanksvisitmsgdesc'] = 'If enabled, displays at the end of the footer a message of appreciation to browsing users';
/**/
$string['choosereadme'] = '
<div class="clearfix">
  <div class="theme_screenshot">
    <h2>aigne</h2>
    <img src="aigne/pix/screenshot.jpg" />

    <h3>Theme Discussion Forum:</h3>
    <p><a href="http://moodle.org/mod/forum/view.php?id=46">http://moodle.org/mod/forum/view.php?id=46</a></p>

    <h3>Themes Documentation:</h3>
    <p><a href="http://docs.moodle.org/en/Themes">http://docs.moodle.org/en/Themes</a></p>
  
    <h3>Report a bug:</h3>
    <p><a href="http://www.github.com/francpombal/moodle-theme_aigne/">http://www.github.com/francpombal/moodle-theme_aigne/</a></p>
  </div>
 
  <div class="theme_description">
    <h3>About:</h3>
    <p>Moodle 2.5.x theme _ Afterburner improved theme _ Main features:</p>
    <ul>
      <li>Simple design and full CSS compliance.</li>
      <li>Only uses 3 hues of the main colour.</li>
      <li>Bottom page (footer) with some customizables sections:</li>
      <li>NavHelp section with all needed administrative links to totally personalized and language sensitive pages.<br />
          ... new Moodle page (webmap, help, search, stats, disclaimer, policies, privacy, security and )</li>
      <li>Contact section (with aardvark theme social links)</li>
      <li>Credits information section</li>
      <li>Copyright section</li>
      <li>A FrontPage (not finished) with banner and marketing information blocks.</li>
      <li>Lots of customization options at Site Admin -&gt; Appearance -&gt; Themes -&gt; AIGNE</li>
      <li>Personalized logo, slogan and background logo image.</li>
    </ul>  
    <h3>Credits:</h3>
    <p>This design was created by Franc Pombal (www.piratininga.tk/moodle), improving the AfterBurner Theme in the Moodle core, what was an original design by Mary Evans & Patrick Malley & Rocket Themes.</p>
    <h3>License:</h3>
    <p>This, and all other themes included in the Moodle core, are licensed under the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.</p>
  </div>
</div>';
/* END OF FILE */
