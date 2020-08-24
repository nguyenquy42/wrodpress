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

              <div class="comment-area">
                <div class="comment-heading">
                  <h2>3 Comments</h2>
                </div>
                <div class="comment-list">
                  <ul>
                    <li class="media">
                      <div class="comment-img">
                        <img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/comment-1.png" alt="img">
                      </div>
                      <div class="media-body">
                        <div class="comment-name-arae">
                          <h4>Hedayet ali</h4>
                          <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/svg/reply-right-arrow.svg" alt="icon">Reply</a>
                        </div>
                        <div class="comment-text">
                          <h6>OCTOBER 20, 2019 AT 2:23 AM</h6>
                          <p>The Common category includes the following blocks. Paragraph, image, hea dings, list,
                            gallery, quote, audio, cover, video. The paragraph block is the default block type</p>
                        </div>
                      </div>
                    </li>
                    <li class="media comment-padding">
                      <div class="comment-img">
                        <img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/comment-2.png" alt="img">
                      </div>
                      <div class="media-body">
                        <div class="comment-name-arae">
                          <h4>Lossangel</h4>
                          <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/svg/reply-right-arrow.svg" alt="icon">Reply</a>
                        </div>
                        <div class="comment-text">
                          <h6>OCTOBER 20, 2019 AT 2:23 AM</h6>
                          <p>The Common category includes the following blocks: Paragraph, image, and headings, list,
                            gallery, quote.</p>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="comment-img">
                        <img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/comment-1.png" alt="img">
                      </div>
                      <div class="media-body">
                        <div class="comment-name-arae">
                          <h4>Hedayet ali</h4>
                          <a href="#!"><img src="<?=get_template_directory_uri(); ?>/assets/img/svg/reply-right-arrow.svg" alt="icon">Reply</a>
                        </div>
                        <div class="comment-text">
                          <h6>OCTOBER 20, 2019 AT 2:23 AM</h6>
                          <p>The Common category includes the following blocks. Paragraph, image, hea dings, list,
                            gallery, quote, audio, cover, video. The paragraph block is the default block type</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="comment-form">
                <div class="add-comment-heading">
                  <h2>Add A Comment</h2>
                  <p>Your email address will not be published. Required fields are marked *</p>
                </div>
                <form action="#!" id="comment-form">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="form-group">
                        <textarea rows="6" class="form-control" placeholder="Type comments here"></textarea>
                      </div>
                      <div class="submit-form-btn">
                        <button type="submit" class="btn btn-theme">Post Comment</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
          <?php get_sidebar(); ?>

          </div>
        </div>
      </div>
    </section>
    <!-- Single-items-End -->


  </main>


</div>



<?php get_footer(); ?>