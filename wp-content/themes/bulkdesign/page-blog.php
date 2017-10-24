<?php /* Template Name: Blog */
/**
 * Template para exibir a página personalizada.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="parallax-container imagem-topo">
		<div class="parallax"><img src="<?php bloginfo('template_url');?>/images/teste.jpg"></div>
		<img src="<?php bloginfo('template_url');?>/images/logo.png" class="logo">
	</section>
	<div class="container">
		<div class="row">
			<div class="col s12 blog">
				<h1>Blog</h1>
				<hr>
			</div>
			<div>
				<?php echo do_shortcode("[post_grid id='5']"); ?>
			</div>
		</div>
	</div>
</article>


<?php get_footer(); ?>