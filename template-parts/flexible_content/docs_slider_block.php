<?php
use App\Helpers\Helper;

$docs = !empty($docs)? $docs : [];
$text = !empty($text)? $text : '';
$button = !empty($button)? $button : '';
$background = !empty($background)? $background: '';

$title = !empty($title)? $title : '';
$subtitle = !empty($subtitle)? $subtitle : '';
$linkedin = !empty($linkedin)? $linkedin : '';
?>
<section class="docs-slider" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">

        <?php if (!empty($title) || !empty($subtitle)): ?>
            <div class="qualifications">
                <?php if (!empty($title)): ?>
                    <div class="title"><?php echo $title; ?></div>
                <?php endif; ?>
                <?php echo $subtitle; ?>
            </div>
        <?php endif; ?>

        <div class="documents-slider">
            <div class="nav-btn">
                <div class="swiper-doc-button-prev js-button-prev">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="16" fill="#D3D3D3"/>
                        <circle cx="16" cy="16" r="16" fill="#E8E8E8"/>
                        <path d="M18 20L14 16L18 12" stroke="#0706FF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="swiper-doc-button-next js-button-next">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#D3D3D3"/>
                        <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#E8E8E8"/>
                        <path d="M14 20L18 16L14 12" stroke="#0706FF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            <div class="swiper js-documents-slider">
                <div class="swiper-wrapper">
                    <?php if (!empty($docs)): ?>
                        <?php foreach ($docs as $doc_id): ?>
                            <div class="swiper-slide">
                                <div class="image">
                                    <?php echo wp_get_attachment_image($doc_id, 'large'); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (!empty($linkedin)): ?>
            <div class="description description-with-social">
                <div class="linkedin-block">
                    <a href="<?php echo $linkedin; ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/images/linkedin-slider-icon.svg" alt="Linkedin">
                    </a>
                    <?php echo $text; ?>
                </div>
                <?php if (!empty($button)): ?>
                    <div class="btn-holder">
                        <?php
                        /**
                         * Button section
                         */
                        get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'button-cta']);
                        ?>
                    </div>
                <?php endif; ?>

            </div>
        <?php else: ?>
            <div class="description">
                <?php echo $text; ?>
                <?php if (!empty($button)): ?>
                    <div class="btn-holder">
                        <?php
                        /**
                         * Button section
                         */
                        get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'button-cta']);
                        ?>
                    </div>
                <?php endif; ?>

            </div>
        <?php endif; ?>

    </div>

    <div id="slider-popup" style="display: none;">
        <div class="slider-popup-holder">
            <div class="nav-wrap">
                <div class="navigation-popup-slider">
                    <div class="nav-btn">
                        <div class="swiper-button-prev js-popup-button-prev">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#ffffff"/>
                                <circle cx="16" cy="16" r="16" fill="#ffffff"/>
                                <path d="M18 20L14 16L18 12" stroke="#3837E5" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="swiper-pagination pagination-slider-popup"></div>
                        <div class="swiper-button-next js-popup-button-next">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#ffffff"/>
                                <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 32 0)" fill="#ffffff"/>
                                <path d="M14 20L18 16L14 12" stroke="#3837E5" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div id="slider-popup-close">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_2036_2559)">
                            <circle cx="16" cy="16" r="16" transform="matrix(-1 0 0 1 47 15)" fill="white"/>
                        </g>
                        <path d="M27 35L35 27M27 27L35 35" stroke="#0706FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <filter id="filter0_d_2036_2559" x="0" y="0" width="62" height="62" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset/>
                                <feGaussianBlur stdDeviation="7.5"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2036_2559"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2036_2559" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="swiper js-slider-popup">
                <div class="swiper-wrapper">
                    <?php if (!empty($docs)): ?>
                        <?php foreach ($docs as $doc_id): ?>
                            <div class="swiper-slide">
                                <div class="slide-holder">
                                    <div class="image">
                                        <?php echo wp_get_attachment_image($doc_id, 'large'); ?>
                                    </div>
                                    <?php
                                    $description = get_post_field('post_content', $doc_id);
                                    if (!empty($description)): ?>
                                        <div class="doc-description"><?php echo $description; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>