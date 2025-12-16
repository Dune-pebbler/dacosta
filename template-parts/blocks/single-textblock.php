<?php
$content = get_sub_field('content');
$layout_type = get_sub_field('layout_type'); // 'text_only' or 'text_image'
$image = get_sub_field('image');
$swap_order = get_sub_field('swap_order'); // boolean to swap text/image positions
$padding_top = get_sub_field('padding_top'); // custom padding top in px
$padding_bottom = get_sub_field('padding_bottom'); // custom padding bottom in px

// Build inline style for custom padding
$inline_style = '';
if ($padding_top) {
    $inline_style .= 'padding-top: ' . intval($padding_top) . 'px; ';
}
if ($padding_bottom) {
    $inline_style .= 'padding-bottom: ' . intval($padding_bottom) . 'px;';
}
?>
<section class="single-textblock" <?= $inline_style ? 'style="' . esc_attr($inline_style) . '"' : ''; ?>>
    <div class="container">
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
