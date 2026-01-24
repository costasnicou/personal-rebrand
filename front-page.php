<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dromosexelixis
 */

//get_header();
?>	<?php get_header(); ?>
	<div class="cover-video">
		<video  class="bg-video__content" autoplay muted loop>
			<source src="<?php echo get_template_directory_uri();?>/assets/videos/cover-video.mp4" type="video/mp4">
			<!-- <source src="assets/img/video.webm" type=""> -->
			your browser is not supported


		</video>
		<hgroup class="cover-heading">
			<h1>Hi I'm Costas Nicou</h1>
			<h2>Expert <strong>IT Support </strong>for Anyone Who Wants Tech <strong>That Just Works</strong></h2>
		</hgroup>
		
	</div>

	<main id="primary" class="site-main">
		<section class="budges">
			<div class="budge">
				<div class="icon-wraper">
					<i class="fa-solid fa-users"></i>
				</div>
	
				<div class="icon-explain">
					<p>300+ <br><span>HAPPY CLIENTS</span> </p>
				</div>
				<p></p>
			</div>
			
			<div class="budge">
				<div class="icon-wraper">
					<i class="fa-solid fa-award"></i>
				</div>
	
				<div class="icon-explain icon-explain--2">
					<p>CYPRUS COLLEGE<br><span>AWARD OF EXCELENCE</span> </p>
				</div>
				<p></p>
			</div>

			<div class="budge">
				<div class="icon-wraper">
					<i class="fa-solid fa-calendar-days"></i>
				</div>
	
				<div class="icon-explain icon-explain--3">
					<p>MORE THAN 10<br><span>YEARS OF EXPERIENCE</span> </p>
				</div>
				<p></p>
			</div>
		</section>

		<section class="about-intro">
			<div class="about-intro__wraper">
				<div class="about-intro__left">
					<img class="img-sm" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/computers/img1.jpg" alt="">
					<img class="img-lg" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/computers/img2.jpg" alt="">
					<img class="img-lg" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/computers/img3.jpg" alt="">
					<img class="img-sm" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/computers/img4.jpg" alt="">


				</div>

				<article class="about-intro__right">
					<h3>WELCOME TO MY WEBSITE</h3>
					<h4>How can I help you get more done without tech problems?</h4>
					<p>Save time and stress with fast, reliable IT support—removing viruses, improving performance, and preventing data loss so your computer stays dependable for work, everyday use, and important tasks.</p>
					<ul class="benefits">
						<li><i class="fa-solid fa-check"></i>Faster computer performance for smoother multitasking and productivity</li>
						<li><i class="fa-solid fa-check"></i>Reduced risk of losing important files with backup and recovery support</li>
						<li><i class="fa-solid fa-check"></i>Reliable Windows installs and updates for fewer crashes and errors</li>
						<li><i class="fa-solid fa-check"></i>Quick troubleshooting so you’re not stuck or wasting time</li>
						<li><i class="fa-solid fa-check"></i>Less overheating and fan noise for quieter, longer use sessions</li>
					</ul>
					<a href="<?php echo esc_url( home_url('/') . '#contact' ); ?>" class="btn-secondary">Get a Quota</a>
				</article>
			</div>

		</section>

		<section class="services">
			<h3>My Services</h3>
			<p class="services-intro-par">I provide reliable IT support including virus removal, Windows installation, hardware cleaning/replacement, upgrades, and fast remote troubleshooting—keeping your devices secure, stable, and running at peak performance.</p>
			<div class="services__wraper">
				<div class="services__service">
					<div class="services__service--icon-box">
						<i class="fa-solid fa-file-shield"></i>
					</div>
					<h4>Virus & Malware Removal</h4>
					<p class="services__par">Remove malware, eliminate pop-ups, restore speed, secure your system, and prevent future infections.</p>
				</div>

				<div class="services__service">
					<div class="services__service--icon-box">
						<i class="fa-solid fa-gear"></i>
					</div>
					<h4>Format & Windows Installation</h4>
					<p class="services__par">Backup files, format drive, install Windows, drivers, updates, and optimize settings.</p>
				</div>

				<div class="services__service">
					<div class="services__service--icon-box">
						<i class="fa-solid fa-screwdriver-wrench"></i>
					</div>
					<h4>Hardware Repair</h4>
					<p class="services__par">Replace faulty parts, clean internal dust, reduce overheating, noise, and improve reliability.</p>
				</div>

				<div class="services__service">
					<div class="services__service--icon-box">
						<i class="fa-solid fa-microchip"></i>
					</div>
					<h4>Hardware & Software Upgrade</h4>
					<p class="services__par">Upgrade RAM/SSD and software to boost performance, speed, stability, and usability.</p>
				</div>

				<div class="services__service">
					<div class="services__service--icon-box">
						<i class="fa-solid fa-house-laptop"></i>
					</div>
					<h4>Remote IT Support</h4>
					<p class="services__par">Fast remote IT support to fix software issues, optimize performance, and guide you step-by-step.</p>
				</div>
			</div>
			<a href="<?php echo esc_url( home_url('/services/') ); ?>" class="btn-secondary services__view-more">View More</a>
		</section>

		<section class="workflow">
			<h3 class="workflow__heading">My Working Cycle</h3>
			<div class="workflow__wraper">
				<div class="workflow__step workflow__step--1">
					<div class="step-number-wraper">
						<p>1</p>
					</div>

					<div class="step-content">
						<h4>Contact Me</h4>
						<p>Contact me and get a free diagnosis and a clear quotation, usually within 24 hours, so you know exactly what to expect.</p>
					</div>
				</div>

				<div class="separator"></div>

				<div class="workflow__step workflow__step--2">
					<div class="step-number-wraper">
						<p>2</p>
					</div>

					<div class="step-content">
						<h4>Repair</h4>
						<p>After you contact me, I’ll diagnose the issue remotely if it's possible and complete the repair quickly and professionally.</p>
					</div>
				</div>

				<div class="separator"></div>

				<div class="workflow__step workflow__step--3">
					<div class="step-number-wraper">
						<p>3</p>
					</div>

					<div class="step-content">
						<h4>Delivery</h4>
						<p>Once everything is fixed, I’ll deliver your device ready to use, explain what was done, and share tips to prevent the issue again.</p>
					</div>
				</div>

				
			</div>
		</section>

		<section class="blog-hm">
			<h3 class="blog-hm_main-heading">Latest News & Blog</h3>
			<p class="blog-hm__intro">Welcome to my techie blog, where I share practical tutorials, honest reviews, and troubleshooting tips to help you build, fix, and optimize your tech with confidence. Whether you’re a beginner or a power user, you’ll find clear guides and real-world solutions you can use right away.</p>
			
			<?php
				$sticky_ids = get_option('sticky_posts'); // array of post IDs

				$args_featured = array(
				'post_type'           => 'post',
				'post_status'         => 'publish',
				'posts_per_page'      => 4,
				'post__in'            => $sticky_ids,
				'ignore_sticky_posts' => 1,                 // don't auto-pin; we control ordering
				'orderby'             => 'date',
				'order'               => 'DESC',
				);

				$featured_query = new WP_Query($args_featured);
			?>
		
			<div class="blog-hm__grid">
				<?php if ($featured_query->have_posts()) : ?>
					<?php $i = 0; ?>
					<?php while ($featured_query->have_posts()) : $featured_query->the_post(); $i++; ?>

					<?php if ($i === 1) : ?>
						<!-- STAR / BIG POST -->
						<div class="post featured-post--1 featured-star">
							<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('large'); ?>
							<?php else: ?>
								<img src="https://placehold.co/650x500" alt="">
							<?php endif; ?>

							<div class="post-meta">
								<p class="date"><i class="fa-solid fa-calendar"></i> <?php echo get_the_date('F, d, Y'); ?></p>
								<p class="author"><i class="fa-solid fa-user"></i> By <?php the_author(); ?></p>
							</div>

							<div class="post-content">
								<h4><?php the_title(); ?></h4>
								<p class="post-par">
								<?php echo wp_trim_words(get_the_excerpt(), 35, '...'); ?>
								</p>
								<a href="<?php the_permalink(); ?>" class="featured-star-btn btn-secondary-normal">Read More</a>
							</div>
						</div>

					<?php else: ?>
						<!-- SMALL POSTS -->
						<div class="post featured-post featured-post--<?php echo $i; ?>">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php else: ?>
							<img src="https://placehold.co/300x230" alt="">
						<?php endif; ?>

						<div class="post-content">
							<div class="post-meta">
								<p class="date"><i class="fa-solid fa-calendar"></i> <?php echo get_the_date('F, d, Y'); ?></p>
								<p class="author"><i class="fa-solid fa-user"></i> By <?php the_author(); ?></p>
							</div>

							<h4><?php the_title(); ?></h4>
							<!-- <p class="post-par">
							<?php //echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
							</p> -->
							<a href="<?php the_permalink(); ?>" class="post-btn btn-primary-normal">Read More</a>
						</div>
						</div>
					<?php endif; ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
			</div>

			<a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="more-posts">All Articles</a>
		</section>

		<section class="call-to-action">
			<h3>Ready to get started?</h3>
			<p>Need help with your device or have a question about a tech issue? Send me a message with what you’re facing, and I’ll get back to you with the next steps and a clear solution. Contact me today and let’s get your tech running smoothly again.</p>
		</section>
		<section id="contact" class="contact">
			<!-- <h3>Contact Me</h3> -->
			<div class="contact-wraper">
				<div class="contact-wraper-left">
					<p class="contact-intro">Have any Question?</p>
					<h3 class="contact-title">Contact me and get latest information about my services</h3>
					<p class="contact-par">Stay connected for the latest updates on my services, new offers, and helpful tech tips that can save you time and money. I share clear, honest information and real solutions—so you always know what to expect and how I can help when you need reliable support.<p>
				
					<div class="contact-social">
						<h4>Follow Me On:</h4>
						<div class="social-flex">
							<a href="https://www.instagram.com/cnicou.tech/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
							<a href="https://www.facebook.com/costas.nicou.3/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
							<a href="https://www.linkedin.com/in/cnicou/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
						</div>
					</div>
				
				</div>

				<div class="contact-wraper-right">
					<h3 class="contact-title2">Fill in the form</h3>
					<p class="contact-intro-2">Don’t let a tech issue keep you stuck—fill in the contact form and tell me what you need. I’ll review your message and get back to you with clear next steps, so we can get everything working smoothly again.</p>
					<?php echo apply_shortcodes( '[contact-form-7 id="9b3729a" title="contact-home"]' ); ?>
				</div>
			</div>
			
		</section>

	</main><!-- #main -->

<?php


get_footer();

?>
