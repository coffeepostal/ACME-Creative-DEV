<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/block', 'feature' ); ?>

	<div id="portfolio">
		<div id="case-studies" class="portfolio-section">
			<div class="row">
				<div class="medium-3 columns title">
					<h3>Case Studies</h3>
				</div>
			</div>
			<div class="row">
				<div class="medium-12 columns">
					<div class="portfolio-item">
						<div id="portfolio-name" class="h1">Ryonet Corporation</div>
						<p id="portfolio-type" class="lead">Branding &amp; Website</p>
						<a href="" class="button portfolio-link">View Case Study</a>
					</div>
				</div>
			</div>
		</div>
		<div id="photograpy" class="portfolio-section">
			<div class="row">
				<div class="medium-6 columns title">
					<h3>Photography</h3>
				</div>
			</div>
			<div class="row">
				<div class="medium-12 columns">
					<div class="portfolio-item">
						<div id="portfolio-name" class="h1">Fine Art Documentation</div>
						<p id="portfolio-type" class="lead">Photography</p>
						<a href="" class="button portfolio-link">View Case Study</a>
					</div>
				</div>
			</div>
		</div>
		<div id="logos" class="portfolio-section">
			<div class="row">
				<div class="medium-9 columns title">
					<h3>Logos</h3>
				</div>
			</div>
			<div class="row">
				<div class="medium-12 columns">
					<div class="portfolio-item">
						<div id="portfolio-name" class="h1">Misc. Logos</div>
						<p id="portfolio-type" class="lead">Logos</p>
						<a href="" class="button portfolio-link">View Case Study</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
