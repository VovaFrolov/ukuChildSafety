<?php if ($block['show'] == '1') { ?>
    <!-- cource-details -->


    <section class="cource-description" id="<?= $block['section_id'] ?>">
        <div class="container cource-description__container">
            <div class="cource-description__inner">
                <div class="cource-description__content">
                    <div class="cource-description__title">
                        <?= $block['title'] ?> <img src="<?= $block['title_logo']['url'] ?>" alt="<?= $block['title_logo']['alt'] ?>">
                    </div>
                    <div class="cource-description__text">
                        <p>
                            <?= $block['text'] ?>
                        </p>
                    </div>
                </div>
                <div class="cource-description__img">
                    <img src="<?= $block['image']['url'] ?>" alt="<?= $block['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- End cource-details -->

<?php } ?>