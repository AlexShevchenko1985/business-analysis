<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$text = !empty($text)? $text : '';
?>
<?php if (!empty($text)): ?>
    <section class="simple-text-with-title" style="<?php echo Helper::backgroundBlock($background); ?>">
        <div class="container-lg">
            <div class="block-holder">
                <?php echo $text; ?>
            </div>
        </div>
    </section>
<?php endif;
