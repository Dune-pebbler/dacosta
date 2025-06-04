<?php get_header();
/* Template Name: pagebuilder */
?>
<?php if (have_rows('pagebuilder')): ?>
    <?php while (have_rows('pagebuilder')):
        the_row(); ?>
        <?php if (get_row_layout() == 'hero'): ?>
            <?php get_template_part('template-parts/blocks/hero'); ?>
        <?php endif; ?>
        <?php if (get_row_layout() == 'tekst_block'): ?>
            <?php get_template_part('template-parts/blocks/text_block'); ?>
        <?php endif; ?>
        <?php if (get_row_layout() == 'slider'): ?>
            <?php get_template_part('template-parts/blocks/slider'); ?>
        <?php endif; ?>
        <?php if (get_row_layout() == 'afsluiter'): ?>
            <?php get_template_part('template-parts/blocks/afsluiter'); ?>
        <?php endif; ?>
        <?php if (get_row_layout() == 'contactform'): ?>
            <?php get_template_part('template-parts/blocks/contactform'); ?>
        <?php endif; ?>
    <?php endwhile; ?>

<?php endif; ?>
<?php
get_footer();
?>