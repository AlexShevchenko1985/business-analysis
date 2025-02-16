<?php
$option_popup_form_title = !empty(get_field('option_popup_form_title', 'options')) ? get_field('option_popup_form_title', 'options') : 'Thank you!';
$option_form_shortcode   = !empty(get_field('option_form_shortcode', 'options')) ? get_field('option_form_shortcode', 'options') : 'Your message has been sent.';
?>
<div class="form-popup" id="form-popup">
    <div id="form-close-button">X</div>
    <?php if (!empty($option_popup_form_title)): ?>
        <h4><?php echo $option_popup_form_title; ?></h4>
    <?php endif; ?>
    <?php if (!empty($option_form_shortcode)): ?>
        <?php echo do_shortcode($option_form_shortcode); ?>
    <?php endif; ?>
</div>