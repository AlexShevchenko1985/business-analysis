<?php
if(empty($args['button']['button_text'])){
    return;
}
$button = $args['button'];

$title   = !empty($button['button_text'])? $button['button_text'] : '';
$link    = ('form_popup' === $button['use_as'])? 'javascript:void(0)' : $button['link'];
$target   = !empty($button['target'])? '_blank' : '_self';
$classes = ('form_popup' === $button['use_as'])? $args['classes'] . ' webform-dialog' : $args['classes'];
?>
<a href="<?php echo $link; ?>" class="<?php echo $classes; ?>">
    <?php echo $title; ?>
</a>
