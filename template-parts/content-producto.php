<?php 
/**
 *  Template para todos los productos
 * 
 */

?>

<?php if ( ! is_single() ):?>

    <article id="post-<?php the_ID();?>" <?php post_class( ); ?>>
        <header style="
        margin-left: 20px;
        margin-right: 20px;
    ">
        <h2 class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <?php if ( has_post_thumbnail( ) ): ?>
                <div class="featured-image">
                        <?php the_post_thumbnail( 'image-little' ); ?>
                </div> 
        <?php endif; ?>
            
        <time class="updated"><?php the_date(); ?></time>

        <footer>
            <ul class="post-tags"><?php the_tags( '<li>', '</li><li>', '</li>' ); ?></ul>
            <span><?php edit_post_link( 'Editar' ); ?></span>
        </footer>
    
    </article>
<?php else: ?>
    <?php get_template_part( 'template-parts/content' ); ?> ?>
<?php endif; ?>