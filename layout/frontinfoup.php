<?php 
/** 
 * Template to insert Frontpage (before users login) top-of-the-page banner
 * 
 * @package    theme_aigne
 * @copyright  2013 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

?>

<div id="large_info"  title="<?php echo get_string('banner1ttl','theme_aigne'); ?>">
    <!-- <marquee><?php echo get_string('banner1txt','theme_aigne'); ?></marquee> -->
    <img src="<?php echo $OUTPUT->pix_url('carroussel/04', 'theme')?>" alt="<?php echo get_string('banner1alt','theme_aigne'); ?>">
</div>
