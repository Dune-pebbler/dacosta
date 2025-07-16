<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else: ?>
        <p><?php esc_html_e('Sorry, no content found.', 'your-theme-textdomain'); ?></p>
    <?php endif; ?>
</main><?php get_footer(); ?>