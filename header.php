<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/src/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/icons/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page-wrapper">

    <?php
    $header_logo = get_field('option_header_logo', 'options');
    $button      = get_field('option_header_button', 'options');
    ?>

    <div class="header-height">
        <div class="wrapper--page-top">
            <div class="d-flex justify-content-end"></div>
            <header id="header" class="header" role="banner" aria-label="Site header">

                <div id="Header" class="header--primary">
                    <div class="container-lg">
                        <div class="header__section--primary">
                            <?php if (!empty($header_logo)): ?>
                                <a class="logo" href="<?php echo get_home_url('/'); ?>" rel="home">
                                    <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo get_bloginfo('name'); ?>" fetchpriority="high">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="header__section--secondary">
                            <div class="wrapper--navigation">
                                <a href="#" id="toggle-expand" class="navigation__toggle-expand">
                                    <span class="visually-hidden">
                                      <?php echo __('Mobile menu expand icon', SSW_TD); ?>
                                    </span>
                                    <span class="navigation__toggle-expand__group navigation__toggle-expand__group--open">
                                      <span class="navigation__toggle-expand__icon navigation__toggle-expand__icon--open"></span>
                                      <span class="navigation__toggle-expand__text navigation__toggle-expand__text--open"><?php echo __('Menu', SSW_TD); ?></span>
                                    </span>
                                    <span class="navigation__toggle-expand__group navigation__toggle-expand__group--closed">
                                      <span class="navigation__toggle-expand__icon navigation__toggle-expand__icon--closed"></span>
                                      <span class="navigation__toggle-expand__text navigation__toggle-expand__text--closed"><?php echo __('Close', SSW_TD); ?></span>
                                    </span>
                                </a>

                                <div class="wrapper--navigation__content">

                                    <nav id="block-drupfan-main-menu"
                                         class="primary-nav block block-menu navigation menu--main"
                                         aria-labelledby="block-drupfan-main-menu-menu" role="navigation">

                                        <?php
                                        wp_nav_menu(
                                            [
                                                'theme_location'  => 'header_menu',
                                            ]
                                        );
                                        ?>
                                    </nav>


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

                            </div>
                        </div>
                    </div>
                </div>

            </header>
        </div>
    </div>

    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div id="main">
            <main>
                <div class="content-holder">





