<?php
/**
 * Template para los page
 */

?>

<article id="post-<?php the_ID(); ?>" <?php  post_class(); ?>>

    <header class="post-hentry">

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

        <!-- title de la pagina -->
        <h1 class="posts-title" ><?php the_title(); ?></h1> 

    </header>
    
    <div class="entry-content">
          <!-- content de la pagina -->
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>

    <footer>
        <span><?php edit_post_link( 'Editar' ); ?></span>
    </footer>

</article>