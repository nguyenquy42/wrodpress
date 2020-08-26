<?php get_header(); ?>

<div id="main-content">
  <!-- main-content Area Start -->
  <main id="main-content">
    <!-- Single-items-start -->
    <section id="blog-single-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="main-single-area">
              <div class="main-single-heading">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                </div>  
                <div <?php post_class();?> id="post-<?php the_ID(); ?>">
                <h6>web application development</h6>
                <h2><?php the_title();?></h2>
              </div>
              <div class="main-post-metas">
                <div class="post-metas-details">
                  <ul>
                    <li><a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/svg/man.svg" alt="icon"><?php echo get_the_author() ?></a></li>
                    <li><a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/svg/calendar.svg" alt="icon"><?php echo get_the_date();?></a></li>
                    <li><a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/svg/comment.svg" alt="icon">Comments</a></li>
                  </ul>
                </div>
                <div class="soical-icon-metas">
                  <a href="#!"><i class="fab fa-facebook-f"></i></a>
                  <a href="#!"><i class="fab fa-twitter"></i></a>
                  <a href="#!"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="main-post-text">
              <?php the_content();?>
              </div>
            <?php endwhile; endif; ?>
            <?php comments_template()?>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
          <?php get_sidebar(); ?>
          </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Single-items-End -->


  </main>

</div>

<?php get_footer(); ?>