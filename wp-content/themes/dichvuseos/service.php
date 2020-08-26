<?php
/*
Template Name: Service
*/
?>
<?php  get_header()?>

  <!-- main-content-Start -->
  <main id="main-content">
    <!-- Banner Area Start -->
    <section id="common-banner" class="what-we-do-banner-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="common-text-banner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              
              <h2><?php the_title();?></h2>
              <p><?php the_content();?></p>
                <?php endwhile; endif; ?>

              <a href="#!" class="btn btn-theme">Explore more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Area End -->

    <!-- Useful Link Area Start -->
    <section id="useful-link" class="bg-custom">
      <div class="container">
        <div class="heading-content-box">
          <h2>Cái bài viết mới</h2>
          <p>các bài viết để hiểu hơn về chúng tôi</p>
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

    <!-- Value-area-Start -->
    <section id="vlaue-bottom-arae">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="value-bottom-text">
              <h2>"Hãy để chúng tôi giúp bạn xây dựng một doanh nghiệp kỹ thuật số hiện đại vượt qua văn hóa truyền thống và thành công trong thời đại chuyển đổi kỹ thuật số. "</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Value-area-End -->
  </main>
  <!-- main-content-End -->

<?php  get_footer()?>
