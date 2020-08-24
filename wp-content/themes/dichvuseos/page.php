<?php get_header(); ?>

<div class="container" >
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        </div>  
        <div <?php post_class();?> id="post-<?php the_ID(); ?>">
        <div class="entry">
            <div class="container"> 
            <div class="row">
            <div class="col-lg-auto">
                <div class="blog-item-wrapper singleBlog" style="margin-top: 6rem;">
                    <div class="blog-item-text box-shadow">
                        <p><?php echo get_the_date();?>, By: <?php echo get_the_author() ?></p>
                        <h3> <?php the_title();?> </h3>
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
    

<?php get_footer(); ?>