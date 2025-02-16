<?php
$hero_section = !empty(get_field('hero_section')) ? get_field('hero_section') : null;
if (empty($hero_section)) {
    return;
}

extract($hero_section);
?>
<div id="block-developersforagenciesandinhouseteams"
     class="block container-lg hero-section <?php echo $type; ?>">
    <div class="block__content row">

        <div class="hero-text col-lg-6">

            <?php if (!empty($title)): ?>
                <h1 class="block__title"><?php echo $title; ?></h1>
            <?php endif; ?>

            <div class="text-content clearfix field field--name-body field--type-text-with-summary field--label-hidden field__item">
                <?php if (!empty($text)): ?>
                    <?php echo $text; ?>
                <?php endif; ?>
            </div>

            <?php if (!empty($button)): ?>
                <div class="field field--name-field-cta field--type-link field--label-hidden field__item">
                    <a href="javascript:void(0)" class="webform-dialog webform-dialog-normal button-cta"><?php echo $button; ?></a>
                </div>
            <?php endif; ?>

        </div>

        <?php if (!empty($image)): ?>
            <div class="hero-image col-lg-6">
                <div class="field field--name-field-hero-image field--type-entity-reference field--label-hidden field__item">
                    <div class="media media--type-image media--view-mode-hero-image">
                        <div class="paragraph-image-item">
                            <?php echo wp_get_attachment_image($image, 'large'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>