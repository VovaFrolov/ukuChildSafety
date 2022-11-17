<?php if ($block['show'] == '1') { ?>
    <section class="subscribe" id="<?= $block['section_id'] ?>">
        <div class="container subscribe__container">
            <div class="subscribe__inner">
                <h2 class="section-title subscribe__title"> <?= $block['title'] ?></h2>
                <div class="subscribe__subtitle">
                    <?= $block['subtitle'] ?> </div>
                <div class="subscribe-form">
                    <?php echo do_shortcode($block['form']) ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>