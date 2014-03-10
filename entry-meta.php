<section class="entry-meta">
    <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
    <?php if ( comments_open() ) { ?>
    <span class="meta-sep">|</span>
    <span class="comments-link"><a href="<?php echo  get_comments_link(); ?>">
    <?php
    comments_number( "Deja un comentario", "1 comentario", "% comentarios" );
    ?>
    </a></span>
    <?php } ?>
</section>