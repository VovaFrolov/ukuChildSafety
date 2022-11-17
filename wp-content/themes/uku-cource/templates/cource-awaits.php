<?php if ($block['show'] == '1') { ?>
    <!-- cource-awaits-->



    <section class="awaits">
        <img src="/wp-content/themes/uku-cource/img/wave3.svg" alt="Що вас чекає на курсі?" class="awaits__bg">

        <div class="awaits__container container">
            <h2 class="section-title awaits__title">
                <?= $block['title'] ?>
            </h2>

            <ul class="awaits__hash hash">
                <?php if ($items = $block['tags']) { ?>
                    <?php for ($i = 0; $i < count($items); $i++) {
                        $item = $items[$i];
                    ?>
                        <li><a href="<?= $item['tag']['link'] ?>" target="<?= $item['tag']['target'] ?>"><?= $item['tag']['title']  ?></a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <div class="awaits__top">
                <?= $block['text_top'] ?>
            </div>
            <div class="awaits__inner">
                <div class="awaits__text">


                    <?php if ($items = $block['awaits_left']) { ?>
                        <?php for ($i = 0; $i < count($items); $i++) {
                            $item = $items[$i];
                        ?>
                            <p> <?= $item['await'] ?></p>
                        <?php } ?>
                    <?php } ?>

                </div>

                <img src="<?= $block['image']['url'] ?>" alt="<?= $block['image']['alt'] ?>" class="awaits__image">

                <div class="awaits__text">
                    <?php if ($items = $block['awaits_right']) { ?>
                        <?php for ($i = 0; $i < count($items); $i++) {
                            $item = $items[$i];
                        ?>
                            <p> <?= $item['await'] ?></p>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>




<?php } ?>
<!-- End cource-awaits -->