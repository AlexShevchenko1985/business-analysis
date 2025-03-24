<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$title    = !empty($title) ? $title : '';
$subtitle = !empty($subtitle) ? $subtitle : '';
$form_id  = !empty($form) ? $form : '';
?>
<section class="contact-section" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="columns-holder">
            <div class="form-column">
                <?php if (!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if (!empty($subtitle)): ?>
                    <p><?php echo $subtitle; ?></p>
                <?php endif; ?>
                <?php if (!empty($form_id)): ?>
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '"]'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="image-column">
                <img src="/wp-content/themes/business-analysis/src/images/contact-image.webp" alt="Image">
            </div>
        </div>
    </div>
</section>
