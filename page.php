<?php get_header(); ?>

	<section id="generic-page">
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
