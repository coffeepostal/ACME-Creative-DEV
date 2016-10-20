<?php if( have_rows('social_media_accounts', 'option') ): ?>
	<?php while( have_rows('social_media_accounts', 'option') ): the_row();

		// vars
		$icon = get_sub_field('icon');
		if( !empty($icon) ):
			$icon_url = $icon['url'];
			$icon_title = $icon['title'];
			$icon_alt = $icon['alt'];
			$icon_caption = $icon['caption'];
			$icon_size = 'thumbnail';
			$icon_thumb = $icon['sizes'][ $icon_size ];
			$icon_width = $icon['sizes'][ $icon_size . '-width' ];
			$icon_height = $icon['sizes'][ $icon_size . '-height' ];
		endif;
	?>
						<a href="<?php the_sub_field('url'); ?>" target="_blank"><img src="<?php echo $icon_thumb; ?>" alt="<?php echo $icon_alt; ?>" width="<?php echo $icon_width; ?>" height="<?php echo $icon_height; ?>" /></a>
	<?php endwhile; ?>
<?php endif; ?>
