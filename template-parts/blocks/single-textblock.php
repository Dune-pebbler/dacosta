<?php
$content = get_sub_field('content');
?>
<section class="single-textblock">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= get_the_title(); ?></h2>
                <?php if ($content): ?>
                    <div class="content">
                        <?= $content; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
