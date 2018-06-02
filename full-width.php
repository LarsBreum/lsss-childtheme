<?php


/*
** Template Name: Full Width Template
*/

add_action('full_width_content', 'do_full_width_content');

add_filter('body_class', 'add_full_width_body_class');

function add_full_width_body_class($classes) {

	$classes[] = 'full_width_template';

	return $classes;

}

add_theme_support( 'genesis_structural-wraps', array('header', 'footer', 'footer-widgets'));

function do_full_width_content() { ?>

	<section class="full-width-section full-width-section-1">
		<div class="wrap flex">
			<div class="flex-child">
				<h2>Sign Up - Get the course when it's ready</h2>
				<?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
				
			</div>

			<div class="flex-child">
				<h2>Children Drown - Yours Don't Have to</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
					Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
				</p>
			</div>
		</div>
	</section>

	<section class="full-width-section full-width-section-2 blog-section">
		<h2 class="section-title">Blog</h2>
		<p class="section-subheading">Learn about how you can teach your children</p>
		<div class="wrap posts-wrapper flex">
		
		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 
				
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	 
			<div class="post-preview">
				<li><a href="<?php the_permalink() ?>"><h3 class="post-preview-title"><?php the_title(); ?></h3></a></li>
				<li class="post-thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></li>
			
				<li><?php the_excerpt(__('(more…)')); ?></li>
				<a href="<?php the_permalink() ?>" class="but">Read More</a>
			</div>
	 
			
			<?php 
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</section>

<?php }

get_header();

do_action('full_width_content');

get_footer();