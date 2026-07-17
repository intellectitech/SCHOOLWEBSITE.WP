<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php if( get_theme_mod( 'ecommerce_landing_page_show_hide_banner',true) != '' || get_theme_mod( 'ecommerce_landing_page_resp_slider_hide_show', true) != '') { ?>
    <section id="banner" class="position-relative wow bounceInDown delay-1000" data-wow-duration="3s">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 banner-main-text align-self-center position-relative">
            <div class="inner_carousel">
              <?php if(get_theme_mod('master_education_tagline_title1') != '') {?>
                <p class="banner-small-heading"><?php echo esc_html(get_theme_mod('master_education_tagline_title1')) ?></p>
              <?php }?>
              <?php if(get_theme_mod('ecommerce_landing_page_tagline_title') != '') {?>
                <h2 class="my-3"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_tagline_title')) ?></h2>
              <?php }?>
              <?php if(get_theme_mod('ecommerce_landing_page_designation_text') != '') {?>
                <p class="slider-para"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_designation_text')) ?></p>
              <?php }?>
              <?php if ( get_theme_mod('ecommerce_landing_page_banner_button_label') != '' ) {?>
                <div class ="read-more mt-4">
                  <a href="<?php echo esc_url(get_theme_mod('ecommerce_landing_page_top_button_url',false));?>"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_banner_button_label'));?>
                    <span class="screen-reader-text"><?php esc_html_e( 'Join Now','master-education');?></span>
                  </a>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 banner-img text-center align-self-lg-center position-relative">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-6 align-self-center mb-3">
                <div class="banner-image">
                  <?php if(get_theme_mod('master_education_banner_image') != '') {?>
                    <img src="<?php echo esc_url(get_theme_mod('master_education_banner_image')); ?>" alt="<?php echo esc_attr__( 'banner image', 'master-education' ); ?>" />
                  <?php }?>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-6 align-self-center mb-3">
                <div class="banner-image1">
                  <?php if(get_theme_mod('master_education_banner_image1') != '') {?>
                    <img src="<?php echo esc_url(get_theme_mod('master_education_banner_image1')); ?>" alt="<?php echo esc_attr__( 'banner image', 'master-education' ); ?>" />
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-6 align-self-center">
                <div class="banner-image2">
                  <?php if(get_theme_mod('master_education_banner_image2') != '') {?>
                    <img src="<?php echo esc_url(get_theme_mod('master_education_banner_image2')); ?>" alt="<?php echo esc_attr__( 'banner image', 'master-education' ); ?>" />
                  <?php }?>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-6 align-self-center">
                <div class="banner-image3 position-relative">
                  <?php if(get_theme_mod('master_education_banner_image3') != '') {?>
                    <img src="<?php echo esc_url(get_theme_mod('master_education_banner_image3')); ?>" alt="<?php echo esc_attr__( 'banner image', 'master-education' ); ?>" />
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'ecommerce_landing_page_after_slider' ); ?>

  <!--  About Section -->
  <section id="about-section" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-5 col-12 about-img-box">
          <div class="about-img1 about-image wow zoomIn">
            <?php if(get_theme_mod('master_education_about_img1') != '') {?>
              <img src="<?php echo esc_url(get_theme_mod('master_education_about_img1')); ?>" alt="<?php echo esc_attr__( 'about image', 'master-education' ); ?>" />
            <?php }?>
          </div>
          <div class="about-img2 about-image wow zoomIn">
            <?php if(get_theme_mod('master_education_about_img2') != '') {?>
              <img src="<?php echo esc_url(get_theme_mod('master_education_about_img2')); ?>" alt="<?php echo esc_attr__( 'about image', 'master-education' ); ?>" />
            <?php }?>
          </div>
          <div class="about-img3 about-image wow zoomIn">
            <?php if(get_theme_mod('master_education_about_img3') != '') {?>
              <img src="<?php echo esc_url(get_theme_mod('master_education_about_img3')); ?>" alt="<?php echo esc_attr__( 'about image', 'master-education' ); ?>" />
            <?php }?>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7 col-12">
          <div class="about-box ps-lg-5 ps-md-0 ps-0 text-lg-start text-md-start text-center">
            <?php if(get_theme_mod('master_education_about_sub_title') != '') {?>
              <p class="about-sub-title wow fadeInDown text-capitalize"><?php echo esc_html(get_theme_mod('master_education_about_sub_title')) ?></p>
            <?php }?>
            <?php if(get_theme_mod('master_education_about_main_title') != '') {?>
              <h3 class="about-main-title wow fadeInDown text-capitalize"><?php echo esc_html(get_theme_mod('master_education_about_main_title')) ?></h3>
            <?php }?>
            <?php if(get_theme_mod('master_education_about_desc_text') != '') {?>
              <p class="about-para wow fadeInDown mt-4 mb-5"><?php echo esc_html(get_theme_mod('master_education_about_desc_text')) ?></p>
            <?php }?>
            <?php for ($master_education_i = 1; $master_education_i <= 2; $master_education_i++) { ?>
              <?php if(get_theme_mod('master_education_about_bottom_box_icon' . $master_education_i) != '' || get_theme_mod('master_education_about_bottom_title' . $master_education_i) != '' || get_theme_mod('master_education_about_bottom_desc' . $master_education_i) != '') {?>
                <div class="about-btm-box p-3 mb-4">
                  <div class="row">
                    <div class="col-xl-1 col-lg-2 col-md-2 col-12 align-self-center">
                      <div class="about-icon-box position-relative">
                        <i class="<?php echo esc_attr(get_theme_mod('master_education_about_bottom_box_icon' . $master_education_i)); ?>"></i>
                      </div>
                    </div>
                    <div class="col-xl-11 col-lg-10 col-md-10 col-12 align-self-center text-lg-start text-md-start text-center">
                      <h6 class="about-btm-title text-capitalize"><?php echo esc_html(get_theme_mod('master_education_about_bottom_title' . $master_education_i)) ?></h6>
                      <p class="about-btm-desc mb-0"><?php echo esc_html(get_theme_mod('master_education_about_bottom_desc' . $master_education_i)) ?></p>
                    </div>
                  </div>
                </div>
              <?php }?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- latest news and blog Section -->
  <?php if( get_theme_mod( 'ecommerce_landing_page_latest_news_blog_heading')|| get_theme_mod( 'ecommerce_landing_page_latest_news_blog_small_title') || get_theme_mod( 'ecommerce_landing_page_events_category')) { ?>
    <section id="latest-post-section" class="wow bounceInDown delay-1000" data-wow-duration="3s">
      <div class="container">
        <div class="latest-post-head">
          <?php if( get_theme_mod('ecommerce_landing_page_latest_news_blog_heading') != '' ){ ?>
            <h4 class="heading-text text-center"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_latest_news_blog_heading',''));?></h4>
          <?php }?>
          <?php if( get_theme_mod('ecommerce_landing_page_latest_news_blog_small_title') != '' ){ ?>
            <p class="small-text text-center"><?php echo esc_html(get_theme_mod('ecommerce_landing_page_latest_news_blog_small_title',''));?></p>
          <?php }?>
        </div>
        <div class="row">
          <?php
            $ecommerce_landing_page_catdata=  get_theme_mod('ecommerce_landing_page_events_category');
            if($ecommerce_landing_page_catdata){
            $page_query = new WP_Query(array( 'category_name' => esc_html($ecommerce_landing_page_catdata ,'master-education'))); ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6 pb-5">
                <div class="events-box position-relative">
                  <?php if(has_post_thumbnail()){
                   the_post_thumbnail(); ?>
                  <span class="event-date"><?php echo esc_html( get_the_date() ); ?></span>
                  <?php } ?>
                  <span class="event-location"><?php the_category(); ?></span>
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h5>
                  <div class="author-comment d-flex gap-4 align-items-center">
                    <?php if( get_theme_mod( 'ecommerce_landing_page_blog_latest_post_author',true) == 1 || get_theme_mod( 'ecommerce_landing_page_blog_latest_post_comments',true) == 1 ) { ?>
                      <?php if(get_theme_mod('ecommerce_landing_page_blog_latest_post_author',true)==1){ ?>
                        <span class="entry-author">
                          <i class="<?php echo esc_attr(get_theme_mod('ecommerce_landing_page_latest_post_author_icon','fas fa-user')); ?> me-2">
                          </i>
                          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?>
                            <span class="screen-reader-text"><?php the_author(); ?></span>
                          </a>
                        </span>
                      <?php } ?>
                      <?php if(get_theme_mod('ecommerce_landing_page_blog_latest_post_comments',true)==1){ ?>
                        <span class="entry-comments">
                          <i class="<?php echo esc_attr(get_theme_mod('ecommerce_landing_page_latest_post_comments_icon','fas fa-comment')); ?> me-2" aria-hidden="true">
                          </i>
                          <?php comments_number( __('0 Comment', 'master-education'), __('0 Comments', 'master-education'), __('% Comments', 'master-education') ); ?>
                        </span>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();}
          ?>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'ecommerce_landing_page_after_latest_news_blog_section' ); ?>

  <div id="content-vw" class="py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
