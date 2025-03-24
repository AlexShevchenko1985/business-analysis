<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';

$type = !empty($type)? $type : 'numbers';
$suptitle = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$subtitle = !empty($subtitle)? $subtitle : '';
$items = !empty($items)? $items : [];
$button = !empty($button)? $button : '';
?>
<section class="<?php echo ('numbers' === $type)? 'three-columns-numbers' : 'three-columns-icons'; ?>" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($suptitle)): ?>
                <div class="sup-title"><?php echo $suptitle; ?></div>
            <?php endif; ?>
            <?php if (!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php echo $subtitle; ?>
        </div>


        <div class="<?php echo ('numbers' === $type)? 'list-with-numbers-grid' : 'grid-holder'; ?>">
            <?php
            $i = 1;
            foreach ($items as $item):
                $i++;
                ?>
                <div class="item">
                <div class="<?php echo ('numbers' === $type)? 'heading' : 'heading-holder'; ?>">
                    <?php if ('numbers' === $type): ?>
                        <div class="number"><?php echo $i; ?></div>
                    <?php else: ?>
                        <?php if (!empty($item['icon'])): ?>
                            <?php echo wp_get_attachment_image($item['icon'], '', true); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (!empty($item['title'])): ?>
                        <h4><?php echo $item['title']; ?></h4>
                    <?php endif; ?>

                </div>
                    <?php if (!empty($item['text'])): ?>
                        <p><?php echo $item['text']; ?></p>
                    <?php endif; ?>

            </div>
            <?php endforeach; ?>
        </div>

        <div class="btn-holder">
            <?php
            /**
             * Button section
             */
            get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'button-cta']);
            ?>
        </div>


    </div>
</section>
