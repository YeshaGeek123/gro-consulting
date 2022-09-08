<section class="main-seo-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="sec-head h2-title"><?php the_title();?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="excerpt-content">
					<?php the_content();?>
				</div>
				<div class="submit-btn">
					<button type="button" title="Read more"  id="read-more" class="sec-btn sm-btn bg-btn">
						<span>Read more</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="row">
				<?php if (is_page_template('template-seo.php') || is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) { ?>
					<div class="col-lg-12">
						<div class="footer-last">
							<span class="text view_services_text" id="view_all_services" title="View All Services">View All Services</span>
							<div class="all-services">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'seo-menu',
								));
								?>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>