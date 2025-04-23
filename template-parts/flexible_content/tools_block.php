<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$title = !empty($title)? $title : '';
$text = !empty($text)? $text : '';
$logos = !empty($logos)? $logos : [];
?>
<section class="tools-competencies"  style="<?php echo Helper::backgroundBlock($background); ?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($title)): ?>
                <h2 style="<?php echo (is_front_page()? '' : 'text-align:center;'); ?>"><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php echo $text; ?>
        </div>
        <?php if (!empty($logos)): ?>
            <div class="logos-holder">
                <?php foreach ($logos as $logo): ?>
                    <?php if (!empty($logo)): ?>
                        <?php echo wp_get_attachment_image($logo, ''); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
