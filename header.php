<?php
/**
 * Core header file, invoked by the get_header() function
 *
 * @package Suffusion
 * @subpackage Templates
 */

global $suffusion_unified_options;
foreach ($suffusion_unified_options as $id => $value) {
	$$id = $value;
}
if ($suf_site_gzip_enabled == 'gzip') {
	ob_start ("ob_gzhandler");
	header("Content-type: text/html; charset=UTF-8");
	header("Cache-Control: must-revalidate");
	$offset = 86400; //1209600 ;
	$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
	header($ExpStr);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/blueprint/print.css" type="text/css" media="print">
	<!--[if IE]>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/blueprint/ie.css" type="text/css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php
suffusion_document_header();
if (is_singular()) {
	wp_enqueue_script('comment-reply');
}
wp_head();
?>
</head>
<body <?php body_class(); ?>>
    <?php suffusion_before_page(); ?>
		<?php
			suffusion_before_begin_wrapper();
		?>
		<div id="wrapper" class="fix">
		<?php
			suffusion_after_begin_wrapper();
		?>
			<div id="container" class="fix">
				<?php
					suffusion_after_begin_container();
				?>
