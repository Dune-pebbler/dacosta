<?php
$content = get_sub_field('content');
$layout_type = get_sub_field('layout_type'); // 'text_only' or 'text_image'
$image = get_sub_field('image');
$swap_order = get_sub_field('swap_order'); // boolean to swap text/image positions
?>
<section class="single-textblock">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= get_the_title(); ?></h2>
            </div>
        </div>

        <?php if ($layout_type === 'text_image' && $image): ?>
            <!-- Text + Image Layout -->
            <div class="row align-items-center <?= $swap_order ? 'flex-row-reverse' : ''; ?>">
                <div class="col-lg-6">
                    <?php if ($content): ?>
                        <div class="content">
                            <?= $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Text Only Layout (default) -->
            <div class="row">
                <div class="col-12">
                    <?php if ($content): ?>
                        <div class="content">
                            <?= $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
