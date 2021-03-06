<?php
/*
Template Name: Membership Flex
*/
?>
<?php get_header(); ?>

<div id="content" class="purchasePage" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)" data-equalizer>
	<div id="inner-content" class="row">
		<main id="main" class="small-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/membership', 'flex' ); ?>
		<?php endwhile; endif; ?>
		</main>
	</div>
</div>
<?php get_template_part( 'parts/slider', 'featured-movies' ); ?>
<?php get_footer(); ?>