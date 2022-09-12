<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="review-title">
                    <span class="sub-title"><?php the_field('home_testimonial_title',7); ?></span>
                </div>
            </div>
        </div>
        <div class="main-review-slider">
            <div class="row testimonial-slider">
            <?php
            $testimonial_list = get_posts(array(
                'post_type' => 'testimonials',
                'post_status' => 'publish',
                'order'          => 'ASC',
                'posts_per_page' => -1
            ));
            if ($testimonial_list) :
                foreach ($testimonial_list as $testimonial) :
            ?>
                    <div class="col-lg-6">
                        <div class="review-box">
                            <div class="quote"></div>
                            <div class="review-content" data-simplebar>
                                <p><?php echo $testimonial->post_content; ?></p>
                            </div>
                            <div class="review-by">
                                <p><?php echo $testimonial->post_title; ?></p>
                                <span><?php the_field('testimonial_sector',$testimonial->ID) ?></span>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
               
            </div>
        </div>
    </div>