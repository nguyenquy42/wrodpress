<?php get_header(); ?>
  <!-- main-content Area Start -->
  <main id="main-content">
    <!-- Banner Area Start -->
    <section id="home_banner">
      <div class="container">
        <div class="home-banner-text-box">
          <div class="home-banner-inner-area">
            <div class="home-banner-text-box-inner wow fadeIn">
              <h1 id="typed2">Phát triển kinh doanh <span>với những ước mơ.</span></h1>
              <h2>Nhà lãnh đạo về Agile và Lean <span class="typed"></span></h2>
              <div class="home-banner-button">
                <a href="#!" class="btn btn-theme">Được trích dẫn</a>
                <a href="#!" class="btn btn-theme-white">Tìm hiểu thêm</a>
              </div>
            </div>
            <div class="home-banner-img">
              <img src="<?=get_template_directory_uri(); ?>/assets/img/home-banner/banner.svg" alt="img">
            </div>
          </div>
        </div>
      </div>
      <div class="anmation-shap-1">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/08.png" alt="img">
      </div>
      <div class="anmation-shap-2">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/09.png" alt="img">
      </div>
      <div class="anmation-shap-3">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/09.png" alt="img">
      </div>
      <div class="anmation-rotate-1">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/02.png" alt="img">
      </div>
      <div class="anmation-rotate-2">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/shap/01.png" alt="img">
      </div>
    </section>
    <!-- Banner Area End -->

    <!-- Case-study Area Start -->
    <section id="home-case-stady">
      <div class="shap-img">
        <img src="<?=get_template_directory_uri(); ?>/assets/img/home-banner/shap-1.png" alt="img">
      </div>
      <div class="container-fluid">
        <div class="row">
          <?php
            $mypages = get_pages(['number' => 6]);
            $i = 0;
            foreach( $mypages as $page ) {
                $i++;
            ?>
                <div class="<?=$i == 1 ? 'col-lg-6' : ($i == 6 ? 'col-lg-6' : 'col-lg-3')?> col-md-12 col-sm-12 col-12 pad-20">
                  <div class="case-study-box bg-box-<?= $i?> bg-position ovarlay-box-<?= $i?>" >
                    <h2><a href="<?= get_site_url() .'/'. $page->post_name?>"><?php echo $page->post_title; ?></a></h2>
                    <?php
                    //  substr(strip_tags($page->post_content),0,100); 
                    ?>
                  </div>
                </div>
                
            <?php
                }   
          ?>
        </div>
      </div>
        
    </section>
    <!-- Case-study Area End -->

    <!-- Useful Link Area Start -->
    <section id="useful-link" class="bg-custom">
      <div class="container" id="main-content">
        <div class="heading-content-box">
          <h2>Bài viết mới</h2>
          <p>các bài viết được quan tâm</p>
        </div>
        
        <div class="row">
        <?php foreach(get_posts(['numberposts'=>get_option('new_option_name')]) as $item) :?>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="<?php echo get_post_field( 'post_name' ); ?>"><img src="<?=get_the_post_thumbnail_url($item); ?>" alt=""></a>
                    </div>
                    <div class="blog-item-text box-shadow">
                        <a href="<?php echo get_post_field( 'post_name' ); ?>"> 
                        <h5><?=$item->post_title?></h5>
                        </a>
                        <p><?=substr(strip_tags($item->post_content),0,100); ?></p>
                        <p><?php echo get_the_date();?> | By: <?php echo get_the_author();?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;  ?>
        </div>
        
      </div>
    </section>
    <!--  Useful Link Area End -->
  </main>

<?php get_footer(); ?>