<?php get_header(); ?>

    <main id="main" class="columns large-12 small-12">

        <h1 class="page-title" ><?php the_archive_title(); ?></h1>
        <div class="taxonomy-description" ><?php the_archive_description(); ?></div>

        <?php get_template_part( 'template-parts/loop', get_post_type() ); ?>
    </main>

<?php get_footer(); ?>