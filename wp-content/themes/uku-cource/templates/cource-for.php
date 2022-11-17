<?php if ($block['show'] == '1') { ?>
    <!-- cource-for -->


    <section class="for-whom">
        <img src="wp-content/themes/uku-cource/img/top-wave.svg" alt="Для кого цей курс" class="for-whom__wave">
        <div class="for-whom__container container" id="<?= $block['section_id'] ?>">
            <h2 class="section-title for-whom__title ">
                <?= $block['title'] ?>
            </h2>
            <ul class="for-whom__hash hash ">
                <?php if ($items = $block['tags']) { ?>

                    <?php for ($i = 0; $i < count($items); $i++) {
                        $item = $items[$i];
                    ?>
                        <li><a href="<?= $item['tag']['link'] ?>" target="<?= $item['tag']['target'] ?>"><?= $item['tag']['title']  ?></a></li>
                    <?php } ?>

                <?php } ?>
            </ul>
            <div class="for-whom__inner ">
                <?php if ($items = $block['list']) { ?>
                    <?php for ($i = 0; $i < count($items); $i++) {
                        $item = $items[$i];
                    ?>
                        <div class="for-whom__item ">
                            <div class="for-whom__img ">
                                <img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>">
                            </div>
                            <div class="for-whom__content">
                                <div class="for-whom__block-title ">
                                    <?= $item['title'] ?>
                                </div>
                                <div class="for-whom__text">
                                    <?= $item['text'] ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End cource-for -->

<?php } ?>