<!-- Banner Start -->
<section class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content white-text">
                    <h1 class="h1-title"><?php the_field('home_banner_title'); ?></h1>
                    <?php the_field('home_banner_sub_title'); ?>
                    <div class="banner-btn">
                        <a href="#" class="sec-btn lg" title="Let's Gró Together">Let's Gró Together</a>
                        <a href="<?php the_field('home_banner_page_link'); ?>" class="link" title="<?php the_field('home_banner_title'); ?>, Learn More">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-banner-slider">
                    <div class="banner-slider">
                        <?php
                         $background_image = get_field('home_banner_background_images');
                         if (isset( $background_image) && !empty( $background_image)) :
                            foreach ( $background_image as $key => $image) :
                        ?>
                            <div class="banner-slider-box">
                                <div class="banner-slide-img">
                                    <img width="690" height="668" src="<?php echo $image['url']; ?>" alt="Slider Image">
                                </div>
                            </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="leafe"></span>
    <span class="shape2"><img width="49" height="302" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/dot-shape.svg" alt="shape"></span>
</section>
<!-- Banner End -->

<section class="sec-body">
    <span class="shape"><img width="1900" height="3799" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/body-shape.svg" alt="shape"></span>
<!-- Service We Offer Start -->
<div class="main-service-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-offer-content">
                    <span class="sub-title"><?php the_field('home_services_we_offer_title'); ?></span>
                    <?php the_field('home_services_we_offer_goal'); ?>
                </div>
            </div>
        </div>
        <div class="service-offer-accordian">
            <div class="row">
                <div class="col-lg-7">
                    <div class="service-offer-accordian-content">
                        <div class="service-offer-accordian-text">
                           <?php the_field('home_services_we_offer_description'); ?>
                        </div>
                        <div class="service-offer-accordian-text">
                            <span><strong><?php the_field('home_services_we_offer_connect_question'); ?></strong></span>
                            <span><strong><?php the_field('home_services_we_offer_connect_answer'); ?></strong></span>
                        </div>
                        <div class="service-offer-accordian-btn">
                            <a href="#" class="sec-btn lg" title="Let's Gró Together">Let's Gró Together</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="services-accordian">
                        <?php
                        if(have_rows('home_service_we_offer_faq_list')):
                            while(have_rows('home_service_we_offer_faq_list')): the_row();
                        ?>
                            <div class="service-accordian-box">
                                <h3 class="h3-title"><?php the_sub_field('home_service_we_offer_faq_list_title'); ?><span class="icon"></span></h3>
                                <div class="service-accordian-content">
                                    <?php the_sub_field('home_service_we_offer_faq_list_content'); ?>
                                    <a href="<?php the_sub_field('home_service_we_offer_faq_list_page_link'); ?>" class="link" title="<?php the_sub_field('home_service_we_offer_faq_list_title'); ?>, Learn More">Learn More</a>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-offer-video-box">
            <span class="shape"><img width="43" height="35" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/leafe.svg" alt="Site Icon"></span>
            <div class="service-offer-video back-img" style="background-image: url('<?php the_field('home_service_we_offer_video_image'); ?>')">
                <a href="<?php the_field('home_service_we_offer_video_link'); ?>" data-fancybox class="play-btn" title="Play Video"><img width="34" height="40" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/play-icon.svg" alt="Play"></a>
            </div>
        </div>
    </div>
</div>
<!-- Service We Offer End -->

<!-- Who We Serve Start -->
<div class="main-we-serve">
    <!-- <span class="shape"><img width="1900" height="1899" src="<?php echo home_url();?>/wp-content/themes/gro-consulting/assets/images/we-serve-bg-shape.svg" alt="shape"></span> -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="we-serve-title">
                    <span class="sub-title"><?php the_field('home_who_we_serve_main_title'); ?></span>
                </div>
                <div class="we-serve-list">
                    <?php
                    if(have_rows('home_who_we_serve_sector_list')):
                        while(have_rows('home_who_we_serve_sector_list')): the_row();
                    ?>
                        <div class="we-serve-box">
                            <h3 class="h3-title"><?php the_sub_field('who_we_serve_sector_list_title'); ?></h3>
                            <div class="we-serve-text">
                               <?php the_sub_field('who_we_serve_sector_list_content'); ?>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <div class="what-can-do back-img" style="background-image: url('<?php the_field('home_who_we_serve_image'); ?>');">
                        <div class="what-can-do-content white-text">
                            <h2 class="h2-title"><?php the_field('home_who_we_serve_title'); ?></h2>
                            <a href="#" class="sec-btn lg white" title="Let's Gró Together">Let's Gró Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Who We Serve End -->

<!-- Reviews Start -->
<div class="main-reviews">
    <span class="leafe leafe-primary"></span>
    <?php
        get_template_part( 'template-parts/content', 'testimonial' );	
    ?>
</div>
<!-- Reviews End -->
</section>