<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$sup_title = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$text = !empty($text)? $text : '';
$items = !empty($items)? $items : [];
$description = !empty($description)? $description : '';
$button = !empty($button)? $button : '';
$classes = (empty($button['button_text']))? 'list-with-numbers services-single' : 'list-with-numbers';

?>
<section class="<?php echo $classes; ?>" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($sup_title)): ?>
                <div class="sup-title"><?php echo $sup_title; ?></div>
            <?php endif; ?>
            <?php if (!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if (!empty($text)): ?>
                <?php echo $text; ?>
            <?php endif; ?>
        </div>

        <?php if (!empty($items)): ?>
            <div class="list-with-numbers-grid">
                <?php
                $i = 0;
                foreach ($items as $item):
                    $i++;
                    ?>
                    <div class="item">
                    <div class="heading">
                        <div class="number"><?php echo $i; ?></div>
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
        <?php endif; ?>

        <?php if (!empty($description)): ?>
            <div class="arrow-block">
                <div class="descr"><?php echo $description; ?></div>
            </div>
        <?php endif; ?>

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

    </div>
</section>
