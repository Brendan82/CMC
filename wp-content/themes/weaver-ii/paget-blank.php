<?php
/**
 * Template Name: Blank
 *
 *
 * @package WordPress
 * @subpackage Weaver II
 * @since Weaver II 1.0
 */

weaverii_get_header('page-blank');
if ( weaverii_getopt('wii_infobar_location') == 'top' ) get_template_part('infobar');
weaverii_inject_area('premain');
echo("\t<div id=\"main\">\n");
weaverii_trace_template(__FILE__);
weaverii_get_sidebar_left('page-blank');
?>
		<div id="container_wrap"<?php weaverii_get_page_class('page', 'container-pageblank'); ?>>
<?php		if (weaverii_getopt('wii_infobar_location') == 'content') get_template_part('infobar');
		weaverii_inject_area('precontent'); ?>
		<div id="container">
<?php		weaverii_get_sidebar_top('page'); ?>

<?php
		$prev = previous_page_not_post("◄ Previous");
		$next = next_page_not_post("Next ►");
		$format = "<small><b><center>";
		$formatend = "</center></b></small>";
		if($prev == "") $format = $format.$next.$formatend;
		else if($next == "") $format = $format.$prev.$formatend;
		else $format = $format.$prev." | ".$next.$formatend;
		echo $format;
?>
			<div id="content" role="main">
<?php
 			while ( have_posts() ) {
			    weaverii_post_count_clear(); the_post();
			    get_template_part( 'content', 'blank' );
			    comments_template( '', true );
			}
?>
			</div><!-- #content -->
<?php		weaverii_get_sidebar_bottom('page-blank'); echo $format; ?>
		</div><!-- #container -->
		</div><!-- #container_wrap -->

<?php	weaverii_get_sidebar_right('page-blank');
	weaverii_get_footer('page-blank');
?>
