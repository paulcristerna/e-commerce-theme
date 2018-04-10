<?php
/**
 * Este tema fue hecho por Paul Criterna.
 * Enviame tus comentarios a: olivierpaulcristerna@gmail.com
 *
 * @package WordPress
 * @subpackage e-commerce 
 * @since e-commerce  1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php

	global $page, $paged;

	// Add the blog name.
	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description ){
		echo " | $site_description";
	}

	?>

</title>
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory');?>/images/logo.png" rel="shortcut icon" type="image/png">
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/menu.js"></script>
<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32841351-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div id="principal">
		<div id="menunav">
			<div class="logo"><!--logo de la pagina-->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>
			<!--menu de navegacion-->
			<div class="nav">
				<nav>
					<?php wp_page_menu( array( 'show_home' => true, 'sort_column' => 'menu_order' ) ); ?>
				</nav>
			</div>
		</div>
	</div><!--fin del la cabecera-->

	<p class="limpiar"></p>