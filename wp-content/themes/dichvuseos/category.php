<?php get_header(); ?>

<div class="container">
    <?php  
        $categories = get_the_category();
 
        if ( ! empty( $categories ) ) {
            echo esc_html( $categories[0]->name );   
        }
    ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>