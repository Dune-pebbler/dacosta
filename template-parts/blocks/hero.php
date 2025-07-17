<?php
//fotos
$hero_image_left = get_sub_field('hero_image_left');
$hero_image_right = get_sub_field('hero_image_right');

//content
$hero_button = get_sub_field('hero_button');
$hero_text_block = get_sub_field('hero_text_block');
?>
<section class="hero">
    <div class="container-fluid p-0">
        <div class="images-hero">
            <div class="desktop-images">
                <img src="<?= get_template_directory_uri(); ?>/images/golfje1.svg" class="deco-wave-top">
                <?php if ($hero_image_left): ?>
                    <div class="image-container-left">
                        <img src="<?= $hero_image_left['url'] ?>" alt="" class="hero-image-left">
                    </div>
                <?php endif ?>
                <?php if ($hero_image_right): ?>
                    <div class="image-container-right">
                        <img src="<?= $hero_image_right['url'] ?>" alt="" class="hero-image-right">
                    </div>
                <?php endif ?>
                <img src="<?= get_template_directory_uri(); ?>/images/golfje2.svg" class="deco-wave-bottom">
            </div>

            <div class="mobile-carousel owl-carousel owl-theme">
                <?php if ($hero_image_left): ?>
                    <div class="carousel-item">
                        <img src="<?= $hero_image_left['url'] ?>" alt="<?= $hero_image_left['alt'] ?>"
                            class="hero-carousel-image">
                    </div>
                <?php endif ?>
                <?php if ($hero_image_right): ?>
                    <div class="carousel-item">
                        <img src="<?= $hero_image_right['url'] ?>" alt="<?= $hero_image_left['alt'] ?>"
                            class="hero-carousel-image">
                    </div>
                <?php endif ?>
            </div>

            <div class="text-container">
                <?php if ($hero_text_block): ?>
                    <?= $hero_text_block; ?>
                <?php endif; ?>
                <?php if ($hero_button): ?>
                    <div class="btn-primary">
                        <a href="#contact-form" alt="knop naar contact form">AANMELDEN</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>