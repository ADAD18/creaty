<?php
/**
 * Template para la paginacion
 */
?>

<nav id="post-nav" class="row">
        <?php if ( ! is_page() ): ?>
                <?php if ( is_single() || is_singular( ) ): ?>
                        <div class="columns small-6 post-previous"><?php previous_post_link( ); ?></div>
                        <div class="columns small-6 post-next text-rigth"><?php next_post_link(); ?></div>   
                <?php else: ?>
                        <div class="columns small-6 post-previous"><?php previous_posts_link(); ?></div>
                        <div class="columns small-6 post-next text-rigth"><?php next_posts_link(); ?></div>
                <?php endif; ?>
        <?php endif; ?>

</nav>