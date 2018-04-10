<?php
/**
 * Este tema fue hecho por Paul Criterna.
 * Enviame tus comentarios a: olivierpaulcristerna@gmail.com
 *
 * @package WordPress
 * @subpackage e-commerce 
 * @since e-commerce  1.0
 */

get_header(); ?>

<div id="contenido">

		<!--contenido del slide-->
		<?php if (function_exists("easing_slider")){ easing_slider(); }; ?>
	
	<div class="entradas inicio"><!--entradas del sitio-->

		<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content()?>
		<?php endwhile;?>

		<br /><br /><?php posts_nav_link(' — ','<< Ver entradas mas recientes','Ver entradas mas antiguas >>'); ?>

		<?php else : ?>		
					<header>
						<h1>No hay entradas hasta ahora.</h1>
					</header>
		<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>