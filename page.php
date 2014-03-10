<?php get_header(); ?>
        <div class="sixteen columns">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="entry-content">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
                </section>
            </article>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>