<?php
$option_popup_form_title = !empty(get_field('option_popup_form_title', 'options')) ? get_field('option_popup_form_title', 'options') : 'Thank you!';
$option_form_shortcode   = !empty(get_field('option_form_shortcode', 'options')) ? get_field('option_form_shortcode', 'options') : 'Your message has been sent.';
?>
<div class="form-popup" id="form-popup" style="display: none;">
	<div class="popup-form-content" id="popup-form-content">
	    <div id="form-close-button">
	        <img src="/wp-content/themes/business-analysis/src/images/cross-popup.svg" alt="Icon">
	    </div>
	    <?php if (!empty($option_popup_form_title)): ?>
	        <h4><?php echo $option_popup_form_title; ?></h4>
	    <?php endif; ?>
	    <?php if (!empty($option_form_shortcode)): ?>
	        <?php echo do_shortcode($option_form_shortcode); ?>
	    <?php endif; ?>
    </div>
</div>
