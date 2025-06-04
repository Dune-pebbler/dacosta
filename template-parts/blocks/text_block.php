<?php
$text_block = get_sub_field('text_block');
$svg_keuze = get_sub_field('svg_keuze') ?: 'vlekjes';
$svg_bestand = $svg_keuze . '.svg';
?>
<section class="text-block">
    <div class="container">
        <div class="row flex-center">
            <div class="col-lg-6 col-12">
                <div class="content-text-block">
                    <?php if ($text_block): ?>
                        <?= $text_block; ?>
                    <?php endif; ?>
                    <div class="image-container">
                        <img src="<?= get_template_directory_uri(); ?>/images/<?= $svg_bestand; ?>"
                            class="vlekjes <?= $svg_keuze; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>