<?php get_header(); ?>
<section id="useful-link" class="bg-custom">
    <div class="container">
        <div class="heading-content-box">
            <h2><?=get_cat_name(get_queried_object_id())?></h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et
            dolore.</p>
        </div>
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
</section>
<?php get_footer(); ?>