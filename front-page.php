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
			<h2>Your <strong>IT Technician</strong> for your <strong>University</strong> needs</h2>
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
					<p>More than 10<br><span>YEARS OF EXPERIENCE</span> </p>
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
					<h4>How can I help you achieve academic success</h4>
					<p>Students save time and stress with fast IT support—fixing viruses, boosting performance, and preventing data loss—so your laptop stays reliable for studying and deadlines.</p>
					<ul class="benefits">
						<li><i class="fa-solid fa-check"></i>Faster laptop performance for studying, research, and multitasking</li>
						<li><i class="fa-solid fa-check"></i>Reduced risk of losing assignments with backup and recovery support</li>
						<li><i class="fa-solid fa-check"></i>Reliable Windows installs and updates for fewer crashes and errors</li>
						<li><i class="fa-solid fa-check"></i>Quick troubleshooting so you don’t miss deadlines or online classes</li>
						<li><i class="fa-solid fa-check"></i>Less overheating and fan noise for smoother, longer study sessions</li>
					</ul>
					<a href="" class="btn-secondary">Get a Quota</a>
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
					<h4>Remote Support</h4>
					<p class="services__par">Fast remote IT support to fix software issues, optimize performance, and guide you step-by-step.</p>
				</div>

				<!-- <div class="services__service">
					<div class="services__service--icon-box">

					</div>
					<h4>Lorem Ipsum</h4>
					<p class="services__par">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				</div> -->
			</div>
		</section>

	</main><!-- #main -->

<?php


get_footer();
