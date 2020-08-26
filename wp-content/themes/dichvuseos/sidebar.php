<div class="single-sibebar-wedget">
    <div class="sidebar-search">
        <input type="text" class="form-control" placeholder="Serach">
        <i class="fas fa-search"></i>
    </div>
    <?php  
        $categories = get_categories();
        if ( ! empty( $categories ) ) {
            foreach ($categories as $categorie) {
            
    ?>
    <div class="siderbar-box-wedget">
        <div class="wedget-heading">
            <h3> <?= $categorie->name?></h3>
        </div>
        <div class="popular-post-item">
            <ul>
                <?php
                global $post;
            
                $myposts = get_posts( array(
                    'category' =>$categorie->term_id
                ) );
                if ( $myposts ) {
                    foreach ( $myposts as $post ) : 
                        setup_postdata( $post ); ?>
                        <li class="media">
                            <a href="<?php the_permalink(); ?>"><?=get_the_post_thumbnail( get_the_ID(),[85,85]); ?></a>
                            <div class="media-body">
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <div class="post-metas">
                                <a href="<?php the_permalink(); ?>">Sep, 26 2019</a>
                            </div>
                            </div>
                        </li>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                }
                ?>
            </ul>
        </div>
    </div>
    <?php 
        }
    }
    ?>
    
    
    <div class="siderbar-box-wedget">
        <div class="wedget-heading">
            <h3>join our newsletter</h3>
        </div>
        <div class="news-letter-wedget text-center">
            <p>Enter your email to receive
            our newsletter </p>
            <input type="text" class="form-control" placeholder="Your email address">
            <button type="submit" class="btn btn-theme">Subscribe</button>
        </div>
    </div>
    <div class="siderbar-box-wedget">
        <div class="wedget-heading">
            <h3>instagram post</h3>
        </div>
        <div class="img-post-arae">
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-1.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-2.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-3.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-4.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-5.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-6.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-7.png" alt="img"></a>
            <a href="blog-single.html"><img src="<?=get_template_directory_uri(); ?>/assets/img/blog-single/img-8.png" alt="img"></a>
        </div>
    </div>
    <div class="siderbar-box-wedget">
        <div class="wedget-heading">
            <h3>follow us</h3>
        </div>
        <div class="soical-follow-arae">
            <ul>
            <li><a href="#!"><i class="fab fa-facebook-f"></i>Facebook</a></li>
            <li><a href="#!"><i class="fab fa-twitter"></i>Twitter</a></li>
            <li><a href="#!"><i class="fab fa-pinterest-p"></i>Pintrest</a></li>
            <li><a href="#!"><i class="fab fa-instagram"></i>Instagram</a></li>
            <li><a href="#!"><i class="fab fa-linkedin-in"></i>linkedin</a></li>
            <li><a href="#!"><i class="fab fa-youtube"></i>Youtube</a></li>
            </ul>
        </div>
    </div>
</div>