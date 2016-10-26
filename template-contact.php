<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<section id="contact-us">
		<div class="row">
			<div class="medium-3 columns title">
				<h3>Contact Us</h3>
			</div>
		</div>
		<div class="row">
			<div class="medium-10 columns">
				<h1>Hello, you've reached ACME Creative&mdash;Located in Anacores, Washington&hellip;</h1>
			</div>
		</div>
		<div class="row collapse">
			<div class="medium-12 large-6 columns">
				<div class="item full">
					<div class="content pad">
						<h2>In person</h2>
						<p class="lead">705 Commercial Ave.<br />Anacortes, WA 98221</p>
						<h2>Phone</h2>
						<p class="lead">360-399-6333</p>
						<h2>Email</h2>
						<p class="lead">lisa@acmecreative.com</p>
					</div>
				</div>
			</div>
			<div class="medium-12 large-6 columns">
				<div class="item wide-rect">
					<div class="content pad">
						<h2>Social</h2>
						<p class="lead">Lot's of ways to connect with us online.</p>
						<?php get_template_part( 'parts/block', 'social' ); ?>
					</div>
				</div>
				<div class="item wide-rect">
					<div class="content pad">
						<h2>Let's get started!</h2>
						<p class="lead">Write us a quick note, and we'll schedule some time to sit down and talk about your project.</p>
						<div class="work-with-us">
							<a id="work-with-us" class="button">Work With Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="row">
			<div class="medium-12 columns">
				<?php echo do_shortcode ('[wpgmza id="1"]'); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
