<?php if ($block['show'] == '1') { ?>
    <!-- donate -->
    <section class="donate">
        <div class="container donate__container">
            <div class="donate__inner">
                <img src="wp-content/themes/uku-cource/img/free.jpg" alt=" Цей курс є повністю безкоштовним." class="donate__img">
                <img src="wp-content/themes/uku-cource/img/free-left.svg" alt=" Цей курс є повністю безкоштовним." class="donate__img-left">
                <img src="wp-content/themes/uku-cource/img/free-right.svg" alt=" Цей курс є повністю безкоштовним." class="donate__img-right">

                <h2 class="section-title donate__title">
                    <?= $block['title'] ?>
                </h2>
                <div class="donate__subtitle">
                    <?= $block['subtitle'] ?>
                </div>
                <a href="<?= $block['donate_link']['url'] ?>" class="donate__link btn btn__link " <?= $block['donate_link']['target'] ?>>
                    <?= $block['donate_link']['title'] ?>
                </a>
            </div>


        </div>

    </section>
    <!-- End donate-->

<?php } ?>