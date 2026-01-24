<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dromosexelixis
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post-cover"
		<?php
			// Optional: use featured image as cover background
			$cover = get_the_post_thumbnail_url( get_the_ID(), 'full' );
			if ( $cover ) :
		?>
			style="background-image:url('<?php echo esc_url( $cover ); ?>'); background-position:center; background-size:cover;"
		<?php endif; ?>
	>
		<h1><?php the_title(); ?></h1>
	</div>

	<main>
		<div class="blog-wraper">	
				<aside class="left-sidebar">
				
					<section class="sidebar-posts">
						<h2>Latest Posts</h2>
						<?php
						// Get the ID of the current post
							$current_post_id = get_the_ID();
							// the query
							$the_query = new WP_Query( array( 
								'post_type' =>'post',
								// 'posts_per_page'=> 3,
								'post__not_in'        => array( $current_post_id ), // Exclude current post
								) );
							?>
							
							<!-- looping query -->
							<?php if ( $the_query->have_posts() ) : ?>

								<!-- pagination here -->

								<!-- the loop -->
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<article class="sidebar-post">
										<div class="sidebar-post-img" style="background-size:cover; background-position: center; background-image: url(<?php echo the_post_thumbnail_url();?>)">
										
										</div>
										<h3><?php the_title(); ?></h3>
										<?php the_excerpt() ?>
										<a href="<?php echo get_permalink(); ?>" class="btn-secondary-normal">Read More</a>
									</article>
								<?php endwhile; ?>
								<!-- end of the loop -->

								<!-- pagination here -->

								<?php wp_reset_postdata(); ?>

							<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</section>

				</aside>
				<div class="article-wraper">
					<article class="post" ?>>
						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>
					</article>
					 <a class="get-back" href="<?php echo get_home_url(); ?>">Back to Homepage</a>
				</div>
				

				<aside class="right-sidebar">
					
				</aside>
		</div>
	</main><!-- #main -->

<?php endwhile; endif; ?>

<?php
get_footer();
?>
