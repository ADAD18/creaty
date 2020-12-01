

<?php if ( have_posts() ):?>

    <p class="post-categories"> <?php echo get_the_category_list( '/' ); ?> </p>
    <div class="row">
        <?php while( have_posts() ): the_post();?>
            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
        <?php endwhile; ?>
    </div>
    
<?php get_template_part( 'template-parts/pagination' ); ?>
<?php endif; ?>