<?php
use App\Helpers\Helper;

$background = !empty($background)? $background: '';
$title = !empty($title)? $title : '';
$text = !empty($text)? $text : '';
$services = !empty($services)? $services : get_posts(['post_type' => 'service', 'posts_per_page' => -1]);
$button = !empty($button)? $button : '';
?>
<section class="colored-cards" style="<?php echo Helper::backgroundBlock($background); ?>">
    <div class="container-lg">
        <div class="heading">
            <?php if (!empty($title)): ?>
                <h2 style="<?php echo (is_front_page()? '' : 'text-align:center;'); ?>">Our Business Analysis Services</h2>
            <?php endif; ?>
            <?php echo $text; ?>
        </div>

        <?php
        $card_styles = [
            0 => ['color' => '#FF5252', 'shadow' => 'rgba(255, 82, 82, 0.25)'],
            1 => ['color' => '#FF7B53', 'shadow' => 'rgba(255, 123, 83, 0.25)'],
            2 => ['color' => '#FFD035', 'shadow' => 'rgba(255, 208, 53, 0.25)'],
            3 => ['color' => '#B9D323', 'shadow' => 'rgba(185, 211, 35, 0.25)'],
            4 => ['color' => '#8BDB44', 'shadow' => 'rgba(139, 219, 68, 0.25)'],
            5 => ['color' => '#37D77F', 'shadow' => 'rgba(55, 215, 127, 0.25)'],
            6 => ['color' => '#15C7C7', 'shadow' => 'rgba(21, 199, 199, 0.25)'],
            7 => ['color' => '#52D1FF', 'shadow' => 'rgba(82, 209, 255, 0.25)'],
        ];
        if (!empty($services)): ?>
        <div class="colored-cards-grid">
            <?php foreach ($services as $index => $service):
                $style_index = $index % count($card_styles);
                $color = $card_styles[$style_index]['color'];
                $shadow = $card_styles[$style_index]['shadow'];
                $card_settings = !empty(get_field('card_settings', $service->ID))? get_field('card_settings', $service->ID) : [];
                ?>
                <div class="card" style="border:1px solid <?php echo $color; ?>; box-shadow: 0 0 10px 0 <?php echo $shadow; ?>;">
                <div class="heading-card">
                    <?php if (!empty($card_settings['icon'])): ?>
                        <div class="icon" style="background:<?php echo $color; ?>;">
                            <img src="<?php echo $card_settings['icon']; ?>" alt="<?php echo $service->post_title; ?>">
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($service->post_title)): ?>
                        <h4><?php echo $service->post_title; ?></h4>
                    <?php endif; ?>
                </div>
                    <?php if (!empty($card_settings['short_description'])): ?>
                        <p><?php echo $card_settings['short_description']; ?></p>
                    <?php endif; ?>

                <div class="list-title"><?php echo __('Key stages of eliciting requirements service:', 'node'); ?></div>
                    <?php if (!empty($card_settings['keys'])): ?>
                        <ul>
                            <?php foreach ($card_settings['keys'] as $key): ?>
                                <?php if (!empty($key['value'])): ?>
                                    <li><span style="background:<?php echo $color; ?>;"></span><?php echo $key['value']; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                <div class="btn-holder">
                    <a href="<?php echo get_permalink($service->ID); ?>" target="_self" class="arrow-btn">
                        <?php echo __('Learn more', 'node'); ?>
                        <img src="/wp-content/themes/business-analysis/src/images/arrow-r.svg" alt="Arrow">
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="btn-holder">
            <?php
            /**
             * Button section
             */
            get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'button-cta webform-dialog']);
            ?>
        </div>
    </div>
</section>
