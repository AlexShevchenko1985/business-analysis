<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main-theme
 */

?>



</div>

<!-- Back to top button -->
<button type="button" class="btn btn-floating btn-sd" id="btn-back-to-top">
    <i class="fa-arrow-up"></i>
</button>
</main>

</div>
</div>

<?php
$option_footer_logo  = get_field('option_footer_logo', 'options');
$option_social_block = get_field('option_social_block', 'options');
$column_1 = get_field('column_1', 'options');
$column_2 = get_field('column_2', 'options');
$column_3 = get_field('column_3', 'options');
?>

<footer class="footer footer--primary" role="contentinfo">

    <div class="container">
        <div class="footer-holder">
            <div class="left-side">
                <?php if (!empty($option_footer_logo)): ?>
                    <div class="logo">
                        <img src="<?php echo $option_footer_logo['url']; ?>" alt="<?php echo get_bloginfo('name'); ?>" fetchpriority="high">
                    </div>
                <?php endif; ?>

                <div class="socials">
                    <?php if (!empty($option_social_block['title'])): ?>
                        <p><?php echo $option_social_block['title']; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($option_social_block['social'])): ?>
                        <div class="social-links">
                            <?php foreach ($option_social_block['social'] as $item): ?>
                                <?php if (!empty($item['link'])): ?>
                                    <a href="<?php echo $item['link']; ?>" target="_blank" title="<?php echo $item['icon']['title']; ?>">
                                        <?php if (!empty($item['icon'])): ?>
                                            <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['title']; ?>">
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="right-side">
                <?php if (!empty($column_1)): ?>
                    <div class="column">
                        <?php if (!empty($column_1['title'])): ?>
                            <h4><?php echo $column_1['title']; ?></h4>
                        <?php endif; ?>
                        <?php
                        if($column_1['menu']){
                            wp_nav_menu([
                                'menu'       => $column_1['menu'],
                                'container'  => false,
                                'menu_class' => 'menu-list'
                            ]);
                        }
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($column_2)): ?>
                    <div class="column">
                        <?php if (!empty($column_2['title'])): ?>
                            <h4><?php echo $column_2['title']; ?></h4>
                        <?php endif; ?>
                        <?php
                        if($column_2['menu']){
                            wp_nav_menu([
                                'menu'       => $column_2['menu'],
                                'container'  => false,
                                'menu_class' => 'menu-list'
                            ]);
                        }
                        ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($column_3)): ?>
                    <div class="column">
                        <?php if (!empty($column_3['title'])): ?>
                            <h4><?php echo $column_3['title']; ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($column_3['items'])): ?>
                            <ul>
                                <?php foreach ($column_3['items'] as $item):
                                    $button = !empty($item['link'])? $item['link'] : [];
                                    $title   = !empty($button['title'])? $button['title'] : '';
                                    $link    = !empty($button['url'])? $button['url'] : 'javascript:void(0)';
                                    $target   = !empty($button['target'])? '_blank' : '_self';
                                    ?>
                                    <li>
                                        <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                                            <?php if (!empty($item['icon'])): ?>
                                                <img src="<?php echo $item['icon']; ?>" alt="<?php echo $title; ?>">
                                            <?php endif; ?>
                                            <?php echo $title; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</footer>

</div>

<?php
/**
 * Form popup
 */
get_template_part('template-parts/form-popup');
?>

<?php
/**
 * Thanks popup
 */
get_template_part('template-parts/thanks-popup');
?>

<?php wp_footer(); ?>

</body>
</html>
