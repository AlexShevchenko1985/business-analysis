<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$suptitle = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$items = !empty($faq_items)? $faq_items : [];
$description = !empty($description)? $description : '';
$align_text_to_center = !empty($align_text_to_center)? 'text-align: center' : '';
?>
<section class="faq-section" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($suptitle)): ?>
                <div class="sup-title"><?php echo $suptitle; ?></div>
            <?php endif; ?>
            <?php if (!empty($title)): ?>
                <h2 style="<?php echo $align_text_to_center; ?>"><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>

        <?php if (!empty($items)): ?>
            <div class="faq-holder">
                <?php foreach ($items as $item): ?>
                    <div class="faq-item">
                        <?php if (!empty($item['title'])): ?>
                            <div class="faq-title"><?php echo $item['title']; ?></div>
                        <?php endif; ?>
                        <?php if (!empty($item['text'])): ?>
                            <div class="faq-body">
                                <?php echo $item['text']; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <?php endforeach; ?>
                <?php if (!empty($description)): ?>
                    <p><?php echo $description; ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
