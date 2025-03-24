<?php
$data = !empty(get_field('hero_section')) ? get_field('hero_section') : null;
if (empty($data)) {
    return;
}

extract($data);



?>
<section id="block-developersforagenciesandinhouseteams"
     class="block hero-section <?php echo 'hero-' . $type; ?>">
     <div class="container-lg">
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

	            <?php if (!empty($button['button_text'])): ?>
	                <div class="field field--name-field-cta field--type-link field--label-hidden field__item">
                        <?php
                        /**
                         * Button section
                         */
                        get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'webform-dialog-normal button-cta']);
                        ?>
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
</section>

