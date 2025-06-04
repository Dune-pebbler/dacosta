<?php
//foto's
$afsluiter_gallery = get_sub_field('afsluiter_gallery');
?>
<section class="afsluiter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel afsluiter-carousel">
                    <?php foreach ($afsluiter_gallery as $image): ?>
                        <div class="item">
                            <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>