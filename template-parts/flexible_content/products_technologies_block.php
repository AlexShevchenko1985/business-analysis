<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$sup_title = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$products = !empty($products)? $products : [];
?>
<section class="products-technologies" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-md">
        <div class="heading">
            <?php if (!empty($sup_title)): ?>
                <div class="sup-title"><?php echo $sup_title; ?></div>
            <?php endif; ?>
            <?php if (!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>
        <?php if (!empty($products)): ?>
            <div class="table">
                <?php foreach ($products as $item): ?>
                    <div class="table-row">
                        <?php if (!empty($item['product'])): ?>
                            <div class="title"><?php echo $item['product']; ?></div>
                        <?php endif; ?>

                        <?php if (!empty($item['technologies'])): ?>
                            <div class="logos">
                                <?php foreach ($item['technologies'] as $value):
                                    $url = !empty($value['sizes']['thumbnail'])? $value['sizes']['thumbnail'] : '';
                                    $alt = !empty($value['title'])? $value['title'] : $value['alt'];
                                    ?>
                                    <?php if (!empty($url)): ?>
                                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
