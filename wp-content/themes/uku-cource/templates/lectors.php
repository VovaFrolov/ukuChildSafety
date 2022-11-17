<?php if ($block['show'] == '1') { ?>

    <section class="lectors" id="<?= $block['section_id'] ?>">

        <div class="container lectors__container ">
            <h2 class="section-title lectors__title ">
                <?= $block['title'] ?>
            </h2>
            <ul class="lectors__hash hash">
                <?php if ($items = $block['tags']) { ?>
                    <?php for ($i = 0; $i < count($items); $i++) {
                        $item = $items[$i];
                    ?>
                        <li><a href="<?= $item['tag']['link'] ?>" target="<?= $item['tag']['target'] ?>"><?= $item['tag']['title']  ?></a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <div class="lectors__inner">
                <?php if ($items = $block['lectors']) { ?>
                    <?php for ($i = 0; $i < count($items); $i++) {
                        $item = $items[$i];

                    ?>
                        <div class="lectors__item ">
                            <div class="lectors__img ">
                                <img src="<?= $item['avatar']['url'] ?>" alt="<?= $item['avatar']['alt'] ?>">
                            </div>
                            <div class="lectors__content ">
                                <div class="lectors__name ">
                                    <?= $item['name'] ?>
                                </div>
                                <div class="lectors__text ">
                                    <p>
                                        <?= $item['text'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="lectors__bottom ">
            <a href="<?= $block['lectors_link']['url'] ?>" class="lectors__link btn btn__link" <?= $block['donate_link']['target'] ?>>
                <?= $block['lectors_link']['title'] ?>
                <svg width="21 " height="20 " viewBox="0 0 21 20 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                    <path fill-rule="evenodd " clip-rule="evenodd " d="M15.1153 9.41074C15.4407 9.73618 15.4407 10.2638 15.1153 10.5893L8.44863 17.2559C8.12319 17.5814 7.59556 17.5814 7.27012 17.2559C6.94468 16.9305 6.94468 16.4028 7.27012 16.0774L13.3475
            10L7.27012 3.92259C6.94468 3.59715 6.94468 3.06951 7.27012 2.74408C7.59556 2.41864 8.12319 2.41864 8.44863 2.74408L15.1153 9.41074Z " fill="white "></path>
                </svg>
            </a>
        </div>
    </section>


<?php } ?>