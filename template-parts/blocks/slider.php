<?php
$slider_gallery = get_sub_field('slider_gallery');
$slider_text = get_sub_field('slider_text');
?>

<?php if ($slider_gallery): ?>
    <section class="slider">
        <div class="container-fluid p-0">
            <div class="owl-carousel slider-gallery-carousel">
                <?php foreach ($slider_gallery as $image): ?>
                    <div class="item">
                        <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-container">
                <h2><?= $slider_text; ?></h2>
            </div>
        </div>
    </section>
<?php endif; ?>