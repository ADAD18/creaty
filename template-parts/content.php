<?php
/**
 * Template para los posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php  post_class(); ?>>

    <header class="post hentry">

         <!-- Categoria del post -->
        <p class="post-categories"> <?php echo get_the_category_list( '/' ); ?> </p>
        
        <!-- Imagen del post -->
        <?php if ( has_post_thumbnail( ) ): ?>
            <div class="featured-image">
                <?php if ( is_single( ) ): ?>
                    <?php the_post_thumbnail( 'image-mediun' ); ?>
                <?php else: ?>
                    <?php the_post_thumbnail( 'image-little' ); ?>
                <?php endif; ?>
            </div> 
        <?php endif; ?>

        <?php if ( is_single() ): ?>
             <h1 class="posts-title" ><?php the_title(); ?></h1> 
        <?php else: ?>
           <h2 class="posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>

    </header>
    
    <div class="entry-content">
        <time class="updated"><?php the_date(); ?></time>
        <span class="byauthor">|<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></span></a>
        <?php if ( is_singular() ): ?>
            <?php the_content(); ?>
        <?php else: ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>
    </div>

    <footer>
        <ul class="post-tags"><?php the_tags( '<li>', '</li><li>', '</li>' ); ?></ul>
        <span><?php edit_post_link( 'Editar' ); ?></span>
    </footer>

</article>