<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$sup_title = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$text = !empty($text)? $text : '';
$left_column = !empty($left_column)? $left_column : '';
$right_column = !empty($right_column)? $right_column : '';
$description = !empty($description)? $description : '';
$button = !empty($button)? $button : '';
?>
<section class="two-columns-text <?php echo (empty($description))? 'without-arrow-block' : ''; ?>" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($sup_title)): ?>
                <div class="sup-title"><?php echo $sup_title; ?></div>
            <?php endif; ?>
            <?php if (!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>
        <div class="columns-holder">
            <?php if (!empty($left_column)): ?>
                <div class="column">
                    <?php echo $left_column; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($right_column)): ?>
                <div class="column">
                    <?php echo $right_column; ?>
                </div>
            <?php endif; ?>
        </div>

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
                $classes =  (empty($description)) ? 'button-cta secondary-btn' : 'button-cta';
                get_template_part('template-parts/button', '', ['button' => $button, 'classes' => $classes]);
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>
