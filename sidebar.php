<?php //para activar los widgets del sidebar ?>

<?php if ( is_active_sidebar( 'sidebar-widgets' ) ): ?>

    <div class="sidebar columns large-3 small-12">
        <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
    </div>
<?php endif; ?>

