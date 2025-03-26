<?php
use App\Helpers\Helper;

$sup_title = !empty($suptitle)? $suptitle : '';
$title = !empty($title)? $title : '';
$text = !empty($text)? $text : '';
$cards = !empty($cards)? $cards : [];
$button = !empty($button)? $button : '';
$background = !empty($background)? $background: '';
$description = !empty($description)? $description : '';
?>
<section class="services <?php echo $background; ?>" style="<?php echo Helper::backgroundBlock($background)?>">
    <div class="container-lg">
        <div class="cards-holder">
            <div class="item transparent-item">
                <?php if (!empty($sup_title)): ?>
                    <div class="sup-title"><?php echo $sup_title; ?></div>
                <?php endif; ?>
                <?php if (!empty($title)): ?>
                    <div class="title"><?php echo $title; ?></div>
                <?php endif; ?>
                <?php echo $text; ?>
            </div>
            <?php if (!empty($cards)): ?>

            <?php endif; ?>

            <?php foreach ($cards as $card): ?>
                <div class="item">
                    <div class="heading">
                        <?php if (!empty($card['icon'])):  ?>
                            <?php echo wp_get_attachment_image($card['icon']['id'], '', true); ?>
                        <?php endif; ?>
                        <?php if (!empty($card['title'])): ?>
                            <h4><?php echo $card['title']; ?></h4>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($card['text'])): ?>
                        <?php echo $card['text']; ?>
                    <?php endif; ?>

                    <?php
                    if (!empty($card['link'])):
                        $title  = !empty($card['link']['title'])? $card['link']['title'] : __('View more details', 'node');
                        $url    = !empty($card['link']['url'])? $card['link']['url'] : '';
                        $target = !empty($card['link']['target'])? '_blank' : '_self';
                        ?>
                        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="arrow-btn"><?php echo $title; ?> <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow"></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

        </div>

        <?php if (!empty($description)): ?>
            <div class="text-ribbon">
                <p><?php echo $description; ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($button['button_text'])): ?>
            <div class="btn-holder">
                <?php
                /**
                 * Button section
                 */
                get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'button-cta secondary-btn']);
                ?>
            </div>
        <?php endif; ?>

    </div>
</section>
