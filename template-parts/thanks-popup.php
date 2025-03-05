<?php
$option_popup_title    = !empty(get_field('option_popup_title', 'options')) ? get_field('option_popup_title', 'options') : 'Thank you!';
$option_popup_subtitle = !empty(get_field('option_popup_subtitle', 'options')) ? get_field('option_popup_subtitle', 'options') : 'Your message has been sent.';
?>
<div class="form-block-message" id="form-block-message" style="display: none;">
	<div class="popup-content" id="popup-content">
	    <div id="form-message-button">
	        <img src="/wp-content/themes/business-analysis/src/images/cross-popup.svg" alt="Icon">
	    </div>
	    <div class="icon">
	        <img src="/wp-content/themes/business-analysis/src/images/green-check.svg" alt="Icon">
	    </div>
	    <?php if (!empty($option_popup_title)): ?>
	        <h4><?php echo $option_popup_title; ?></h4>
	    <?php endif; ?>
	    <?php if (!empty($option_popup_subtitle)): ?>
	        <p class="subtitle"><?php echo $option_popup_subtitle; ?></p>
	    <?php endif; ?>
    </div>
</div>
