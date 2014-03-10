<?php get_header(); ?>
        <div class="sixteen columns">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            <?php comments_template(); ?>
            <?php endwhile; endif; ?>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>