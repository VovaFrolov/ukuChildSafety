<?php if ($block['show'] == '1') { ?>
    <section class="benefits" id="<?= $block['section_id'] ?>">
        <img src="<?= $block['benefits_bg']['url'] ?>" alt="<?= $block['benefits_bg']['alt'] ?>" class="benefits__bg">
        <div class="benefits__container container">
            <h2 class="section-title benefits__title">
                <?= $block['title'] ?>
            </h2>
            <div class="benefits__subtitle">
                <?= $block['subtitle'] ?>
            </div>
            <div class="benefits__inner">
                <div>
                    <ul>
                        <?php if ($items = $block['benefits']) { ?>
                            <?php for ($i = 0; $i < count($items); $i++) {
                                $item = $items[$i];
                            ?>
                                <li>
                                    <?= $item['text'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="benefits__link">
                        <a href="<?= $block['benefits_file']['url'] ?>" class="benefits__btn" target="_blank">
                            <img src="/wp-content/themes/uku-cource/img/benefits-arrow.svg" alt="програма підвищення кваліфікації">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_581_36)">
                                    <rect x="7" y="7" width="15" height="14.5714" rx="5" fill="#FFC458" />
                                    <path d="M13.5632 15.73L17.872 11.5439L18.5352 12.1878L13.5632 17.0178L10.5801 14.1199L11.2429 13.476L13.5632 15.73Z" fill="white" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_581_36" x="0" y="0" width="29" height="28.5713" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset />
                                        <feGaussianBlur stdDeviation="3.5" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0.984314 0 0 0 0 0.756863 0 0 0 0 0.447059 0 0 0 1 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_581_36" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_581_36" result="shape" />
                                    </filter>
                                </defs>
                            </svg> <?= $block['benefits_file']['title'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>