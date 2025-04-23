<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$title = !empty($title)? $title : '';
$left_column = !empty($left_column)? $left_column : [];
$right_column = !empty($right_column)? $right_column : [];
?>
<section class="columns-with-lists" style="<?php echo Helper::backgroundBlock($background); ?>">
    <div class="container-lg">
        <div class="columns-holder">
            <div class="column">
                <?php if (!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if (!empty($left_column)): ?>
                    <?php foreach ($left_column as $item): ?>
                        <div class="list-block">
                            <?php if (!empty($item['title'])): ?>
                                <div class="title"><?php echo $item['title']; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($item['items'])): ?>
                                <ul>
                                    <?php foreach ($item['items'] as $item_l): ?>
                                        <?php if (!empty($item_l['text'])): ?>
                                            <li><?php echo $item_l['text']; ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            <div class="column">
                <?php if (!empty($right_column)): ?>
                    <?php foreach ($right_column as $value): ?>
                        <div class="list-block">
                            <?php if (!empty($value['title'])): ?>
                                <div class="title"><?php echo $value['title']; ?></div>
                            <?php endif; ?>
                            <?php if (!empty($value['items'])): ?>
                                <ul>
                                    <?php foreach ($value['items'] as $item_r): ?>
                                        <?php if (!empty($item_r['text'])): ?>
                                            <li><?php echo $item_r['text']; ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
