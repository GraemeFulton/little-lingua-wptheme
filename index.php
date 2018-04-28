<?php get_header(); ?>

	<main role="main" class="app">
		<!-- section -->
		<section class="container">
			<div class="page__inner">

				<div class="page__main">

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

			</div>
			<?php get_sidebar(); ?>

		</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
