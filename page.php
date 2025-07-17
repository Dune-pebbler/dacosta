<?php get_header(); ?>
<section class="content">
    <div class="container">
        <div class="row flex-center">
            <div class="col-12 col-lg-10 flex-center">
                <div class="content__container" style="padding: 100px 0px;">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                </div>

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile;
                    else: ?>
                        <p><?php esc_html_e('Sorry, no content found.', 'your-theme-textdomain'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>