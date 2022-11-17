<?php if ($block['show'] == '1') { ?>
    <!-- questions-->
    <section class="cource-program" id="<?= $block['section_id'] ?>">
        <img src="/wp-content/themes/uku-cource/img/wave2.svg" alt="Програма курсу" class="cource-program__bg">

        <div class="container cource-program__container ">
            <div class="cource-program__inner ">

                <div class="cource-program__top ">
                    <h2 class="section-title cource-program__title ">
                        <?= $block['title'] ?>
                    </h2>
                    <div class="cource-program__subtitle ">
                        <?= $block['subtitle'] ?>
                    </div>
                </div>
                <div class="cource-program__questions ">

                    <div class="accordion">
                        <?php if ($items = $block['questions']) { ?>

                            <?php for ($i = 0, $a = 1; $i < count($items); $i++, $a++) {
                                $item = $items[$i];
                            ?>
                                <div class="accordion__item">



                                    <div class="accordion__title ">
                                        <div class="accordion__num ">0<?php echo $a ?>.</div>
                                        <?= $item['question'] ?>
                                        <div class="accordion__close ">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_521_51)">
                                                    <path d="M9.75505 12.9386C9.89901 13.08 10.1296 13.08 10.2736 12.9386L15.5873 7.72142C16.0919 7.22599 16.9003 7.22599 17.4049 7.72142C17.9228 8.22987 17.9228 9.06423 17.4049 9.57267L10.634 16.2207C10.2899 16.5585 9.73871 16.5585 9.39465 16.2207L2.62373 9.57267C2.10589 9.06423 2.10589 8.22987 2.62373 7.72142C3.12833 7.22599 3.93677 7.22599 4.44137 7.72142L9.75505 12.9386Z" fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_521_51">
                                                        <rect width="20" height="20" fill="white" transform="translate(20.0137 0.996094) rotate(90)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="accordion__content">
                                        <p>
                                            <?= $item['answer'] ?>
                                        </p>

                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>



                </div>
            </div>
        </div>

    </section>


    <!-- End questions -->
<?php } ?>