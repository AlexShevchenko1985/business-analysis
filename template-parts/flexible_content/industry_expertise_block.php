<?php
use App\Helpers\Helper;

$sup_title = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$text = !empty($text)? $text : '';
$items = !empty($items)? $items : [];
$image = !empty($image)? $image : '';
$button = !empty($button)? $button : '';
$label = !empty($label)? $label : '';
$background = !empty($background)? $background: '';
?>
<section class="two-columns-with-balls" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="columns-holder">
            <div class="content-column">
                <?php if (!empty($sup_title)): ?>
                    <div class="sup-title"><?php echo $sup_title; ?></div>
                <?php endif; ?>
                <?php if (!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if (!empty($text)): ?>
                    <p><?php echo $text; ?></p>
                <?php endif; ?>

                <?php if (!empty($items)):
                    $chunks = array_chunk($items, ceil(count($items) / 2));
                    ?>
                    <div class="list-block">
                        <?php if (!empty($chunks[0])): ?>
                            <ul>
                                <?php foreach ($chunks[0] as $value): ?>
                                    <?php if (!empty($value['item'])): ?>
                                        <li><?php echo $value['item']; ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if (!empty($chunks[1])): ?>
                            <ul>
                                <?php foreach ($chunks[1] as $value): ?>
                                    <?php if (!empty($value['item'])): ?>
                                        <li><?php echo $value['item']; ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <?php if (!empty($image)): ?>
                <div class="image-column">
                    <?php echo wp_get_attachment_image($image, 'large'); ?>
                </div>
            <?php endif; ?>

        </div>
        <div class="slogan-block">

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

            <?php if (!empty($label)): ?>
                <div class="slogan-item">
                    <img src="/wp-content/themes/business-analysis/src/images/slogan-arrow.svg" alt="Arrow">
                    <span><?php echo $label; ?></span>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
