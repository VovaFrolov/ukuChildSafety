<?php if ($block['show'] == '1') { ?>
    <!-- banner -->


    <section class="banner" id="<?= $block['section_id'] ?>">
        <div class="banner__bg">

            <img src="<?= $block['banner_bg']['url'] ?>" alt="<?= $block['banner_bg']['alt'] ?>">
            <img src="<?= $block['banner_img']['url'] ?>" alt="<?= $block['banner_img']['alt'] ?>" class="banner__image">


            <?php if ($items = $block['tooltips']) { ?>
                <div class="tooltips">
                <?php for ($i = 0; $i < count($items); $i++) {
                    $item = $items[$i];
                ?>
                    <div class="tooltip">
                        <div class="tooltip__icon">
                            <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                        </div>
                        <div>
                            <div class="tooltip__title"><?= $item['title'] ?></div>
                            <div class="tooltip__subtitle"><?= $item['subtitle'] ?></div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>

        </div>
        <div class="banner__container container ">
            <div class="banner__descr ">
                <div class="banner__info ">
                    <?= $block['theme'] ?></div>
                <h1 class="banner__title ">
                    <?= $block['title'] ?>
                </h1>


                <a href="<?= $block['link']['url'] ?>" class="banner__link btn btn__link " target="<?= $block['link']['target'] ?>">
                    <?= $block['link']['title'] ?>
                    <svg width="21 " height="20 " viewBox="0 0 21 20 " fill="none ">
                        <path fill-rule="evenodd " clip-rule="evenodd " d="M15.1153 9.41074C15.4407 9.73618 15.4407 10.2638 15.1153 10.5893L8.44863 17.2559C8.12319 17.5814 7.59556 17.5814 7.27012 17.2559C6.94468 16.9305 6.94468 16.4028 7.27012 16.0774L13.3475
            10L7.27012 3.92259C6.94468 3.59715 6.94468 3.06951 7.27012 2.74408C7.59556 2.41864 8.12319 2.41864 8.44863 2.74408L15.1153 9.41074Z " fill="white " />
                    </svg>
                </a>

            </div>
        </div>
    </section>

    <!-- End banner-->

<?php } ?>