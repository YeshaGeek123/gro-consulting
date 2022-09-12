<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gro-consulting
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-info white-text">
						<div class="footer-logo">
							<a href="<?php echo home_url();?>" title="Gro Consulting">
								<img width="206" height="30" src="<?php the_field('footer_logo','options'); ?>" alt="Gro Consulting">
							</a>
						</div>
						<div class="footer-text">
							<p><span><?php the_field('footer_title','options'); ?></span></p>
							<?php the_field('footer_content','options'); ?>
						</div>
						<div class="social-icons">
							<a href="<?php the_field('facebook_link','options'); ?>" target="_blank" title="Follow on Facebook"><img width="20" height="20" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/fb.svg" alt="Facebook"></a>
							<a href="<?php the_field('twitter_link','options'); ?>" target="_blank" title="Follow on Twitter"><img width="20" height="20" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/twitter.svg" alt="Twitter"></a>
							<a href="<?php the_field('linkedin_link','options'); ?>" target="_blank" title="Follow on LinkedIn"><img width="20" height="20" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/linkedin.svg" alt="LinkedIn"></a>
							<a href="<?php the_field('instagram_link','options'); ?>" target="_blank" title="Follow on Instagram"><img width="20" height="20" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/insta.svg" alt="Instagram"></a>
						</div>
						<div class="footer-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer-menu',
										'menu_id'        => 'footer-menu',
									)
								);
							?>
						</div>
						<div class="footer-menu">
							<p>Services</p>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'service-menu',
										'menu_id'        => 'service-menu',
									)
								);
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="footer-contact">
						<h3 class="h3-title footer-title">Contact Us</h3>
						<div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-blogs">
						<h3 class="h3-title footer-title">Latest Blogs</h3>
						<?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 3,
                                'post_status' => 'publish'
                            ));
							if (isset($recent_posts) && !empty($recent_posts)) :
								foreach ($recent_posts as $post_item) :
						?>
									<div class="footer-blogs-box">
										<a href="<?php echo get_permalink($post_item['ID']) ?>" title="<?php echo $post_item['post_title'] ?>"><?php echo $post_item['post_title'] ?></a>
									</div>
						<?php
								endforeach;
							endif;
						?>
					</div>
					<div class="newsletter white-text">
						<h3 class="h3-title footer-title">Newsletter</h3>
						<div class="newsletter-form">
							<?php echo do_shortcode('[mc4wp_form id="142"]');?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-box">
				<div class="row">
					<div class="col-12">
						<div class="footer-bottom-text">
							<div class="copy-right">
								<p>© <?php echo date('Y');?> Gró Consulting</p>
							</div>
							<div class="footer-bottom-link">
								<ul>
									<li><a href="<?php echo home_url();?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
									<li><a href="<?php echo home_url();?>/cookie-policy" title="Cookies Policy">Cookie Policy</a></li>
									<li><a href="<?php echo home_url();?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll To Top Start -->
	<a href="javascript:void(0);" id="scrollToTop" class="scrolltop" title="Back To Top"><i class="fas fa-angle-double-up"></i></a>
	<!-- Scroll To Top End -->
	
</div>

<?php wp_footer(); ?>

</body>
</html>
