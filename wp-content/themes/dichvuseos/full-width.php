<?php
/*
    Template Name: Full Width
*/ 
?>

<?php get_header(); ?>

  <!-- main-content-start -->
  <main id="main-content">
    <!-- Banner Area Start -->
    <section id="common-banner" class="about-banner-bg">
      <div class="common-text-banner text-center">
      </div>
    </section>
    <!-- Banner Area End -->

    <!-- Our Story Area Start -->
    <section id="about-our-story">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="about-heading-box box-shadow">
              <h1>Agile, A Process Delivering Values & Successful <br> Products</h1>
              <h4>Knowledge <a href="#!">@magazine</a> Success Magazine</h4>
            </div>
          </div>
        </div>
        <div class="about-story-wrapper">
          <div class="row clearfix align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 image-colum">
              <div class="about-clearfix-img">
                <figure class="image paroller"><img src="<?=get_template_directory_uri(); ?>/assets/img/about/story-1.png" alt="img"></figure>
                <figure class="image paroller"><img src="<?=get_template_directory_uri(); ?>/assets/img/about/story-2.png" alt="img"></figure>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="about-story-text">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class();?> id="post-<?php the_ID(); ?>">
                    <div class="entry">
                        <div class="container"> 
                        <div class="row">
                        <div class="col-lg-auto">
                            <div class="blog-item-wrapper singleBlog" style="margin-top: 6rem;">
                                <div class="blog-item-text box-shadow">
                                    <p><?php echo get_the_date();?>, By: <?php echo get_the_author() ?></p>
                                    <h5>Our Story</h5>
                                    <h2> <?php the_title();?></h2>
                                    <p><?php the_content();?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Story Area End -->

    <!-- some-fan-fact Area Start -->
    <section id="some-fan-fact">
      <div class="area-img-wrapper">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/about/shap.png" alt="img">
      </div>
      <div class="container">
        <div class="heading-content-box">
          <h2>Some of our Fun fact</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et
            dolore.</p>
        </div>
        <div class="row aos-animate">
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="fact-box">
              <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/file.svg" alt="svg-icon">
              <span class="counter">
              <?=get_option('option_DAHT') ?>
              </span>
              <p>Dự án đã hoàn thành</p>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-12 col-12">
            <div class="fact-box">
              <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/browser.svg" alt="svg-icon">
              <span class="counter">
                <?=get_option('option_DAHD')?>
              </span>
              <p>Dự án đang hoạt động</p>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-12 col-12">
            <div class="fact-box">
              <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/happy.svg" alt="svg-icon">
              <span class="counter">
              <?=get_option('option_KHHL')?>
              </span>
              <p>Khách hàng hài lòng</p>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-12 col-12">
            <div class="fact-box">
              <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/cup.svg" alt="svg-icon">
              <span class="counter">
              <?=get_option('option_NKN')?>
              </span>
              <p>Năm kinh nghiệm</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- some-fan-fact Area End -->

    <!-- Core-value Area Start -->
    <section id="core-value-arae">
      <div class="container">
      
        <div class="heading-content-box">
        
        <?php
            $categories = get_categories();
        ?>
        <h2><?=$categories[0]->name?></h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et
            dolore.</p>
        </div>
        <div class="row">
        <?php
            $post;
            $myposts = get_posts( array('category'=>$categories[0]->term_id) );
            if ( $myposts ) { foreach ( $myposts as $post ) : setup_postdata( $post ); 
        ?>
                        
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow">
                <div class="core-value-img">
                    <a href="<?php the_permalink(); ?>"><?=get_the_post_thumbnail( get_the_ID(),[85,85]); ?></a>
                </div>
                <div class="core-value-text">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p> <?=substr(strip_tags(get_the_content()),0,100); ?></p>
                </div>
            </div>
        </div>

        <?php
        endforeach;
        wp_reset_postdata();
        }
        ?>
        
        </div>
      </div>
    </section>
    <!-- Core-value Area End -->

    <!--Home-cta Area Start -->
    <section id="home_cta">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="home-cta-text-arae">
              <h4>Free Consultation</h4>
              <h2>Ready to start your dream project?</h2>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="cta-button">
              <a href="#!" class="btn theme-btn-cta">Request A Free Consultation</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Home-cta Area End -->

    <!-- Counter Area Start -->
    <section id="counter-area">
      <div class="container">
        <div class="row aos-animate" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <div class=" col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="counter-box-wrapper">
              <div class="counter-top-icon">
                <i class="flaticon-artificial-intelligence-1"></i>
              </div>
              <div class="counter-count-area">
                <h2 class="counter">80</h2>
                <p>Agile Coach</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="counter-box-wrapper">
              <div class="counter-top-icon">
                <i class="flaticon-certificate"></i>
              </div>
              <div class="counter-count-area">
                <h2 class="counter">06</h2>
                <p>Certified Serum Master</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="counter-box-wrapper">
              <div class="counter-top-icon">
                <i class="flaticon-iteration"></i>
              </div>
              <div class="counter-count-area">
                <h2 class="counter">380</h2>
                <p>Agile Developers</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="counter-box-wrapper">
              <div class="counter-top-icon">
                <i class="flaticon-product"></i>
              </div>
              <div class="counter-count-area">
                <h2 class="counter">10</h2>
                <p>Product Owner</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End -->

    <!-- Our leaders Arae Start -->
    <section id="our-leader-arae">
      <div class="container">
        <div class="heading-content-box">
          <h2>Our Leaders</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et
            dolore.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow">
              <div class="img-area">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/leader/leader-1.png" alt="img">
                <div class="social">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="img-text">
                <h4>Hoshi Siganporia</h4>
                <p> Karmisheba Accelerate Partner | Dubai</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow">
              <div class="img-area">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/leader/leader-2.png" alt="img">
                <div class="social">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="img-text">
                <h4>Daryl Thomas</h4>
                <p>CTO & President | Canada</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow">
              <div class="img-area">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/leader/leader-3.png" alt="img">
                <div class="social">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="img-text">
                <h4>John Doe</h4>
                <p>Front-End Developer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow mr-top-30">
              <div class="img-area">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/leader/leader-4.png" alt="img">
                <div class="social">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="img-text">
                <h4>Iyad Horanis</h4>
                <p>Sales Head | Australia</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow mr-top-30">
              <div class="img-area">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/leader/leader-5.png" alt="img">
                <div class="social">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="img-text">
                <h4>Hoshi Siganporia</h4>
                <p>Karmisheba Accelerate Partner | Dubai</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="single-team box-shadow mr-top-30">
              <div class="img-area">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/leader/leader-6.png" alt="img">
                <div class="social">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="img-text">
                <h4>Chandresh Patel</h4>
                <p>M. D. & Agile Coach | India</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our leaders Arae End -->

    <!-- Get-Reviews Arae Start -->
    <section id="get-reviews">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="get-review-box">
              <div class="get-review-heading text-left get-review-box-width">
                <h5>Read our <br> reviews on:</h5>
              </div>
              <div class="get-reviews-item text-center get-review-box-width">
                <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/reviews/google.png" alt="icon">
                  <div class="review-star">
                    <span>5.0</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </a>
              </div>
              <div class="get-reviews-item text-center get-review-box-width">
                <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/reviews/ciat.png" alt="icon">
                  <div class="review-star">
                    <span>5.0</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </a>
              </div>
              <div class="get-reviews-item text-center get-review-box-width">
                <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/reviews/dove.png" alt="icon">
                  <div class="review-star">
                    <span>5.0</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </a>
              </div>
              <div class="get-reviews-item text-center get-review-box-width">
                <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/reviews/xerox.png" alt="icon">
                  <div class="review-star">
                    <span>5.0</span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Get-Reviews Arae End -->

    <!-- About Client Area Start -->
    <section id="about-client-area">
      <div class="container">
        <div class="heading-content-box">
          <h2>Client’s Reviews</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et
            dolore.</p>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="client-slider-wrapper owl-carousel owl-theme">
              <div class="about-client-area client-review-margin client-box">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/about/client-1.png" alt="img">
                <div class="about-client-veido-arae">
                  <div class="about-client-destenation">
                    <h5>Foxicon deo</h5>
                    <p>www.theopensus.com</p>
                  </div>
                  <div class="veido-area-custom">
                    <a class="venobox vbox-item" href="https://player.vimeo.com/video/78741166" data-autoplay="true"
                      data-vbtype="video"><img src="<?=get_template_directory_uri(); ?>/assets/img/comon-img/play.png" alt="icon"></a>
                  </div>
                </div>
              </div>
              <div class="about-client-area client-review-margin client-box">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/about/client-2.png" alt="img">
                <div class="about-client-veido-arae">
                  <div class="about-client-destenation">
                    <h5>Foxicon deo</h5>
                    <p>www.theopensus.com</p>
                  </div>
                  <div class="veido-area-custom">
                    <a class="venobox vbox-item" href="https://player.vimeo.com/video/78741166" data-autoplay="true"
                      data-vbtype="video"><img src="<?=get_template_directory_uri(); ?>/assets/img/comon-img/play.png" alt="icon"></a>
                  </div>
                </div>
              </div>
              <div class="about-client-area client-review-margin client-box">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/about/client-5.png" alt="img">
                <div class="about-client-veido-arae">
                  <div class="about-client-destenation">
                    <h5>Foxicon deo</h5>
                    <p>www.theopensus.com</p>
                  </div>
                  <div class="veido-area-custom">
                    <a class="venobox vbox-item" href="https://player.vimeo.com/video/78741166" data-autoplay="true"
                      data-vbtype="video"><img src="<?=get_template_directory_uri(); ?>/assets/img/comon-img/play.png" alt="icon"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Client Area End -->

    <!-- Work Profile Area Start -->
    <section id="work-porfile">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="work-profile-box  aos-init">
              <div class="work-profile-img">
                <a href="#!"> <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/shap-1.png" alt="img" class="work-pro-shap">
                  <div class="work-profile-icon">
                    <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/lamp.svg" alt="Svg-Img">
                  </div>
                </a>
              </div>
              <div class="work-profile-text">
                <a href="#!">
                  <h5>Research Sprint</h5>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="work-profile-box">
              <div class="work-profile-img">
                <a href="#!"> <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/shap-1.png" alt="img" class="work-pro-shap">
                  <div class="work-profile-icon">
                    <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/graph-bar.svg" alt="Svg-Img">
                  </div>
                </a>
              </div>
              <div class="work-profile-text">
                <a href="#!">
                  <h5>Agile Approach</h5>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="work-profile-box ">
              <div class="work-profile-img">
                <a href="#!"> <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/shap-1.png" alt="img" class="work-pro-shap">
                  <div class="work-profile-icon">
                    <img src="<?=get_template_directory_uri(); ?>/assets/img/svg/loop.svg" alt="Svg-Img">
                  </div>
                </a>
              </div>
              <div class="work-profile-text">
                <a href="#!">
                  <h5>Agileshore</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work Profile Area End -->

    <!-- Useful Link Area Start -->
    <section id="useful-link" class="bg-custom">
      <div class="container">
        <div class="heading-content-box">
          <h2>Useful Links</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et
            dolore.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog/1.png" alt="img"></a>
                <div class="blog-item-catagory-link">
                  <a href="#!">Vue.JS</a>
                  <a href="#!">Web development</a>
                </div>
              </div>
              <div class="blog-item-text box-shadow">
                <h5><a href="blog-single.html">How to Make Your NodeJS Application Secure</a></h5>
                <p>May 4, 2020 | By: Paridhi Wadhwani</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog/2.png" alt="img"></a>
                <div class="blog-item-catagory-link">
                  <a href="#!">Node.JS</a>
                  <a href="#!">Web development</a>
                </div>
              </div>
              <div class="blog-item-text box-shadow">
                <h5><a href="blog-single.html">Top 12 Vue.js Developer Tools and Component Libraries</a></h5>
                <p>May 4, 2020 | By: Paridhi Wadhwani</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog/3.png" alt="img"></a>
                <div class="blog-item-catagory-link">
                  <a href="#!">Vue.JS</a>
                  <a href="#!">Web development</a>
                </div>
              </div>
              <div class="blog-item-text box-shadow">
                <h5><a href="blog-single.html">10 Proven Tips and Tricks to
                    Optimize</a></h5>
                <p>May 4, 2020 | By: Paridhi Wadhwani</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Useful Link Area End -->

    <!-- Value-area-Start -->
    <section id="vlaue-bottom-arae">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="value-bottom-text">
              <h2>"Let us help you build a modern digital business to overcome traditional culture and succeed in the
                age
                of digital transformation."</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Value-area-End -->
  </main>
  <!-- main-content-End -->

  <?php get_footer(); ?>

  