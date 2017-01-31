<?php
/*
Template Name: Who We Are
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

<?php if( have_rows('info_boxes') ): ?>

	<section id="info">
		<div class="row">
<?php
		while( have_rows('info_boxes') ): the_row();

			// vars
			$icon	= get_sub_field('icon');
			$number	= get_sub_field('number');
			$text	= get_sub_field('text');
?>

			<div class="medium-3 columns text-center">
				<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
				<div class="stat"><?php echo $number; ?></div>
				<p class="lead"><?php echo $text; ?></p>
			</div>
<?php
		endwhile;
?>
		</div>
	</section>

<?php endif; ?>

	<section id="story">
		<div class="row">
			<div class="medium-3 columns title">
				<h3>Our Story</h3>
			</div>
		</div>
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<?php the_field('our_story_content'); ?>
			</div>
		</div>
	</section>

<?php if( have_rows('crew') ): ?>
	<section id="crew">
		<div class="row">
			<div class="medium-6 columns title">
				<h3>The Crew</h3>
			</div>
		</div>
<?php
		while( have_rows('crew') ): the_row();

			$image_primary		= get_sub_field('image_primary');
			$image_secondary	= get_sub_field('image_secondary');
			if( !empty($image_primary) ):
				$image_primary_url		= $image_primary['url'];
				$image_primary_title	= $image_primary['title'];
				$image_primary_alt		= $image_primary['alt'];
				$image_primary_caption	= $image_primary['caption'];
			endif;
			if( !empty($image_secondary) ):
				$image_secondary_url		= $image_secondary['url'];
				$image_secondary_title		= $image_secondary['title'];
				$image_secondary_alt		= $image_secondary['alt'];
				$image_secondary_caption	= $image_secondary['caption'];
			endif;
			$name	= get_sub_field('name');
			$title	= get_sub_field('title');
			$bio	= get_sub_field('bio');
			$social	= "";

			//	Social Media
			if (get_sub_field('email')):
				$email_address = get_sub_field('email_address');
				$social = $social . '<a href="mailto:' . $email_address . '"><img src="' . get_template_directory_uri() . '/assets/images/sm-mail.png" alt="Email ' . $name . '"></a> ';
			endif;
			if (get_sub_field('twitter')):
				$twitter_account = get_sub_field('twitter_account');
				$social = $social . '<a href="https://www.twitter.com/' . $twitter_account . '" target="_blank"><img src="' . get_template_directory_uri() . '/assets/images/sm-twitter.png" alt="Twitter Account for ' . $name . '"></a> ';
			endif;
			if (get_sub_field('instagram')):
				$instagram_account = get_sub_field('instagram_account');
				$social = $social . '<a href="https://www.instagram.com/' . $instagram_account . '" target="_blank"><img src="' . get_template_directory_uri() . '/assets/images/sm-instagram.png" alt="Instagram Account for ' . $name . '"></a> ';
			endif;
?>

			<?php if( $link ): ?>
		<a href="<?php echo $link; ?>">
			<?php endif; ?>


		<div class="row crew-member">
			<div class="medium-2 medium-offset-1 columns">
				<img src="<?php echo $image_primary_url; ?>" onmouseover="this.src='<?php echo $image_secondary_url; ?>'" onmouseout="this.src='<?php echo $image_primary_url; ?>'" alt="<?php echo $image_primary_alt; ?>">
			</div>
			<div class="medium-8 columns end">
				<h2><?php echo $name; ?></h2>
				<p class="lead"><em><?php echo $title; ?></em> <?php echo $social; ?></p>
				<?php echo $bio; ?>
			</div>
		</div>
	<?php endwhile; ?>
	</section>
<?php endif; ?>

	<section id="community">
		<div class="row">
			<div class="medium-9 columns title">
				<h3>Community</h3>
			</div>
		</div>
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<?php the_field('community_content'); ?>
			</div>
		</div>
	</section>

	<section id="gallery-cafe">
		<div class="row">
			<div class="medium-12 columns title">
				<h3>Coffee Bar &amp; Gallery</h3>
			</div>
		</div>
		<div class="row">
			<div class="medium-10 medium-centered columns">
				<?php the_field('gallery_and_cafe_content'); ?>
			</div>
		</div>
	</section>

	<?php
	$images = get_field('gallery_and_cafe_image_gallery');

	if( $images ):
?>
	<section id="gallery">
		<div class="row small-up-2 medium-up-3 large-up-4 ps-gallery">
<?php
		$loop_count = 1;
		foreach( $images as $image ):
?>
			<div class="column">
				<a href="<?php echo $image['sizes']['large']; ?>" data-size="<?php echo $image['sizes']['large-width']; ?>x<?php echo $image['sizes']['large-height']; ?>" data-med="<?php echo $image['sizes']['medium']; ?>" data-med-size="<?php echo $image['sizes']['medium-width']; ?>x<?php echo $image['sizes']['medium-height']; ?>" data-author="Peter Kuhnlein" <?php if($loop_count == 1) { echo 'class="ps-gallery__img--main"'; } ?>>
					<img class="thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				</a>
			</div>
<?php
			$loop_count++;
		endforeach;
?>
		</div>
	</section>
<?php
	endif;
?>

<?php get_template_part( 'parts/block', 'photoswipe-insert' ); ?>

<?php get_footer(); ?>
