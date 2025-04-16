<?php
get_header();
?>

    <div class="breadcrumbs">
        <div class="container-lg">
            <div class="breadcrumbs-holder">
                <a href="<?php echo home_url('/')?>"><?php echo __('Home', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
                <a href="<?php echo get_post_type_archive_link('post'); ?>"><?php echo __('Blog', 'node'); ?></a>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/breadcrumb-arrow.svg" alt="Arrow">
                <span><?php echo get_the_title(); ?></span>
            </div>
        </div>
    </div>

<?php if(have_posts()):
    $author = get_field('author');
    $header_image = get_field('header_image');
    $sections = get_field('sections');
    ?>
    <?php while ( have_posts() ) :
        the_post(); ?>
        <section class="blog-hero">
            <div class="container-lg">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="blog-hero-holder">
                    <div class="content-column">
                        <h1><?php echo get_the_title(); ?></h1>
                        <div class="info-holder">
                            <?php echo get_the_content()?>
                        </div>
                        <div class="author"><?php echo $author; ?> - <?php echo do_shortcode('[rt_reading_time]')?> <?php echo __('min read', 'node'); ?> - <?php echo get_the_date('j F Y'); ?></div>
                    </div>
                    <?php if (!empty($header_image)): ?>
                        <div class="image-column">
                            <?php echo wp_get_attachment_image($header_image, 'large'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
<?php endwhile;?>
<?php endif; ?>

<?php if (!empty($sections)): ?>
    <div id="blog-full-content" class="full-content">
        <div class="progress-bar">
            <span></span>
        </div>
        <div class="container-lg">
            <div class="full-content-holder">
                <div class="content">
                    <?php foreach ($sections as $key => $section): ?>
                        <section id="section_<?php echo $key + 1; ?>" class="scrolling-section">
                            <?php if (!empty($section['title'])): ?>
                                <h2><?php echo $section['title']; ?></h2>
                            <?php endif; ?>
                            <?php if (!empty($section['content'])): ?>
                                <?php echo $section['content']; ?>
                            <?php endif; ?>
                        </section>
                        <?php if (0 === $key):
                            $contact_section = get_field('contact_section');
                            $button = !empty($contact_section['button'])? $contact_section['button'] : '';
                            $background_section = !empty($contact_section['background'])? $contact_section['background'] : 'white';
                            if ('white' === $background_section) {
                                $class = 'white-title';
                                $background = '#5278FF url(/wp-content/themes/business-analysis/src/images/banner-circles.webp)';
                            }else{
                                $class = '';
                                $background = 'rgba(117, 147, 255, 0.4) url(/wp-content/themes/business-analysis/src/images/banner-circles.webp)';
                            }
                            ?>
                            <?php if (!empty($contact_section['title'])): ?>
                                <div class="banner" style="background:<?php echo $background; ?>">
                                    <div class="title <?php echo $class; ?>"><?php echo $contact_section['title']; ?></div>
                                    <p class="<?php echo $class; ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                    <div class="btn-holder">
                                        <?php
                                        /**
                                         * Button section
                                         */
                                        get_template_part('template-parts/button', '', ['button' => $button, 'classes' => 'button-cta']);
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div id="Sidebar" class="sidebar">
                    <div class="sidebar-block">
                        <ul>
                        <?php foreach ($sections as $key_sid => $section_sid): ?>
                            <?php if (!empty($section_sid['title'])): ?>
                                <li>
                                    <a href="#section_<?php echo $key_sid + 1; ?>" data-index="<?php echo $key_sid; ?>"><?php echo $section_sid['title']; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
/**
 * Related Posts section
 */
get_template_part('template-parts/flexible_content/post_block');
?>
<?php
get_footer();