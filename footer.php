	<footer class="footer" role="contentinfo">
		<div class="row">
			<div class="medium-4 columns">
				<h3>Contact</h3>
				<p>705 Commercial Ave.<br />Anacortes, WA 98221</p>
				<p><a href="mailto:lisa@acmecreative.com">lisa@acmecreative.com</a></p>
				<p>360-399-6333</p>
			</div>
			<div class="medium-4 columns">
				<h3>Connect</h3>
				<p>Join us online to stay up-to-date with ACME news and events.</p>
				<?php get_template_part( 'parts/block', 'social' ); ?>
			</div>
			<div class="medium-4 columns">

				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="//acmecreative.us11.list-manage.com/subscribe/post?u=274fa93737b14d88c463c46a4&amp;id=4606fe55f6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<h3>Don't Miss Our Newsletter</h3>
							<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
							<div class="mc-field-group">
								<input type="email" placeholder="wiley@email.com" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_274fa93737b14d88c463c46a4_4606fe55f6" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button secondary"></div>
						</div>
					</form>
				</div>
				<!--End mc_embed_signup-->

			</div>
		</div>
		<div id="sub-footer">
			<div class="row">
				<div class="medium-12 columns">
<?php
	echo '									';
	echo '<p>';

	if(get_field('copyright_text', 'option')) {
		echo get_field('copyright_text', 'option');
	}
	if(get_field('privacy_policy', 'option')) {
		if(get_field('copyright_text', 'option')) {
			echo ' | ';
		}
		echo '<a href="' . get_field('privacy_policy_link', 'option') . '">Privacy Policy</a>';
	}

	echo '</p>';
?>
				</div>
			</div>
		</div>
	</footer> <!-- end .footer -->
	<?php wp_footer(); ?>
</body>
</html> <!-- end page -->
