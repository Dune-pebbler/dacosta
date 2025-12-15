<?php
$image = get_sub_field('image');
?>
<section class="single-imageblock">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ($image): ?>
                    <div class="image-container">
                        <img src="<?= $image['url']; ?>" alt="<?= $image['alt'] ?: get_the_title(); ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
