<?php
    /*
        Template Name: blog
    */ 
?>

<?php get_header(); ?>

  <!-- main-content Area Start -->
  <main id="main-content">
    <!-- Banner Area Start -->
    <section id="common-banner" class="product-enhancement-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="blog-banner">
              <h2>Blogs</h2>
              <p>Thông tin chi tiết về công nghệ trừu tượng được thúc đẩy bởi các nguồn</p>
              <form action="#!" id="blog-top-form">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="What are you looking for?">
                  <div class="input-group-append">
                    <button class="input-group-text btn btn-theme">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Area End -->

    <!-- blog-item-start -->
    <section id="blog-item">
        <div class="container">
            <?php  
            $categories = get_categories();
            if ( ! empty( $categories ) ) { foreach ($categories as $categorie) {
            ?>
            <div class="siderbar-box-wedget">
                <div class="wedget-heading">
                    <h3><?= $categorie->name?></h3>
                </div>
                <div class="popular-post-item">
                    <div class="row">
                    <?php foreach(get_posts() as $item) :?>
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
            </div>
            <?php 
                }
            }
            ?>
        </div>
    </section>
    <!-- blog-item-End -->

    <!-- Blog-help-area-start -->
    <section id="vlaue-bottom-arae">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="value-bottom-text">
              <h2>"Hãy để chúng tôi giúp bạn xây dựng một doanh nghiệp kỹ thuật số hiện đại vượt qua văn hóa truyền thống và thành công trong thời đại chuyển đổi kỹ thuật số"</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--log-help-area-End -->

  </main>
  <!-- main-content Area End -->

 <?php get_footer(); ?>
