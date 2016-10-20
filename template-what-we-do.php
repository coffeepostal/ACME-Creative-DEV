<?php
/*
Template Name: What We Do
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

<?php if( have_rows('services_list') ): ?>
	<section id="services">
		<div class="row">
			<div class="medium-3 columns title">
				<h3>Services</h3>
			</div>
		</div>
		<div class="row" data-equalizer data-equalize-on="medium">

	<?php while( have_rows('services_list') ): the_row();

		$title		= get_sub_field('title');
		$content	= get_sub_field('content');
		$tag_list	= get_sub_field('tag_list');
		$classes	= "service";
		if (get_sub_field('contact_us')) {
			$classes	= "service contact";
		} else {
			$classes	= "service";
		}

	?>
			<div class="medium-6 columns">
				<div class="<?php echo $classes; ?>" data-equalizer-watch>
					<h2><?php echo $title; ?></h2>
					<p class="lead"><?php echo $content; ?></p>
<?php
			//	Check for Tag List
			if (get_sub_field('tag_list')) {
				echo '					<p>' . $tag_list . '</p>';
			}

			//	Check for Contact Box
			if (get_sub_field('contact_us')) {
				echo '					<span class="work-with-us-launch"><a id="work-with-us" class="button">Work With Us</a></span>';
			}
?>
				</div>
			</div>
	<?php endwhile; ?>

		</div>
	</section>
<?php endif; ?>

	<section id="design-process">
		<div class="row">
			<div class="medium-6 columns title">
				<h3>Design Process</h3>
			</div>
		</div>
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<?php the_field('design_process_content'); ?>
			</div>
		</div>
	</section>

	<section id="client-list">
		<div class="row">
			<div class="medium-9 columns title">
				<h3>Client List</h3>
			</div>
		</div>
		<div class="row">
			<div class="medium-4 columns">
<?php
	if( have_rows('client_list_first_row') ):

		// loop through the rows of data
		while ( have_rows('client_list_first_row') ) : the_row();

			echo '				<h3>';
			the_sub_field('section_title');
			echo '</h3>';
			echo "\n";

			if( have_rows('section') ):
				echo '				<ul class="no-bullet">';
				echo "\n";
			    while ( have_rows('section') ) : the_row();
					$client_url = get_sub_field('client_url');
					$client_name = get_sub_field('client_name');

					echo '					<li>';
					if ($client_url):
						echo '<a href="' . $client_url . '" target="_blank">' . $client_name . '</a>';
					else:
						echo $client_name;
					endif;
					echo '</li>';
					echo "\n";

			    endwhile;
				echo '				</ul>';
				echo "\n";
			else :
				echo '				<p><em>Sorry, there are no clients under this section.</em></p>';
				echo "\n";
			endif;
		endwhile;
	endif;
?>
			</div>
			<div class="medium-4 columns">
<?php
	if( have_rows('client_list_second_row') ):

		// loop through the rows of data
		while ( have_rows('client_list_second_row') ) : the_row();

			echo '				<h3>';
			the_sub_field('section_title');
			echo '</h3>';
			echo "\n";

			if( have_rows('section') ):
				echo '				<ul class="no-bullet">';
				echo "\n";
			    while ( have_rows('section') ) : the_row();
					$client_url = get_sub_field('client_url');
					$client_name = get_sub_field('client_name');

					echo '					<li>';
					if ($client_url):
						echo '<a href="' . $client_url . '" target="_blank">' . $client_name . '</a>';
					else:
						echo $client_name;
					endif;
					echo '</li>';
					echo "\n";

			    endwhile;
				echo '				</ul>';
				echo "\n";
			else :
				echo '				<p><em>Sorry, there are no clients under this section.</em></p>';
				echo "\n";
			endif;
		endwhile;
	endif;
?>
			</div>
			<div class="medium-4 columns">
<?php
	if( have_rows('client_list_third_row') ):

		// loop through the rows of data
		while ( have_rows('client_list_third_row') ) : the_row();

			echo '				<h3>';
			the_sub_field('section_title');
			echo '</h3>';
			echo "\n";

			if( have_rows('section') ):
				echo '				<ul class="no-bullet">';
				echo "\n";
			    while ( have_rows('section') ) : the_row();
					$client_url = get_sub_field('client_url');
					$client_name = get_sub_field('client_name');

					echo '					<li>';
					if ($client_url):
						echo '<a href="' . $client_url . '" target="_blank">' . $client_name . '</a>';
					else:
						echo $client_name;
					endif;
					echo '</li>';
					echo "\n";

			    endwhile;
				echo '				</ul>';
				echo "\n";
			else :
				echo '				<p><em>Sorry, there are no clients under this section.</em></p>';
				echo "\n";
			endif;
		endwhile;
	endif;
?>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="row">
			<div class="medium-12 columns title">
				<h3>Testimonials</h3>
			</div>
		</div>

<?php if( have_rows('testimonials_list') ): ?>

	<?php while( have_rows('testimonials_list') ): the_row();

		// vars
		$testimonial = get_sub_field('testimonial');
		$name = get_sub_field('name');

		?>
		<div class="row testimonial">
			<div class="medium-10 medium-centered columns">
	<?php
		echo '<p class="lead">';
		echo $testimonial;
		echo '</p>';
	?>
				<h4><?php echo $name; ?></h4>
			</div>
		</div>

	<?php endwhile; ?>

<?php endif; ?>

	</section>

<?php get_footer(); ?>
