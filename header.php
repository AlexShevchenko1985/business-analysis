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

use App\Helper\Helper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page-wrapper">


    <div class="header-height">
        <div class="wrapper--page-top">
            <div class="d-flex justify-content-end"></div>
            <header id="header" class="header" role="banner" aria-label="Site header">

                <div class="header--primary">
                    <div class="container-lg">
                        <div class="header__section--primary">
                            <a href="/en" rel="home">
<!--                                <img src="images/logo.svg" width="152" height="50" alt="Home" fetchpriority="high">-->
                            </a>




                            <div id="block-languagedropdownswitcher" class="block block-lang-dropdown block-language-dropdown-blocklanguage-interface">


                                <div class="block__content">
                                    <form class="lang-dropdown-form lang_dropdown_form clearfix language_interface" id="lang_dropdown_form_lang-dropdown-form" data-drupal-selector="lang-dropdown-form-2" action="/en" method="post" accept-charset="UTF-8">
                                        <div class="js-form-item form-item js-form-type-select form-item-lang-dropdown-select js-form-item-lang-dropdown-select form-no-label">
                                            <label for="edit-lang-dropdown-select" class="form-item__label visually-hidden">Select your language</label>
                                            <select style="width:75px" class="lang-dropdown-select-element form-select form-element form-element--type-select" data-lang-dropdown-id="lang-dropdown-form" data-drupal-selector="edit-lang-dropdown-select" id="edit-lang-dropdown-select" name="lang_dropdown_select"><option value="en" selected="selected">en</option><option value="it">it</option><option value="de">de</option><option value="ro">ro</option><option value="fr">fr</option></select>
                                        </div>
                                        <input data-drupal-selector="edit-en" type="hidden" name="en" value="/en/front-page">
                                        <input data-drupal-selector="edit-it" type="hidden" name="it" value="/it/front-page">
                                        <input data-drupal-selector="edit-de" type="hidden" name="de" value="/de/front-page">
                                        <input data-drupal-selector="edit-ro" type="hidden" name="ro" value="/ro/front-page">
                                        <input data-drupal-selector="edit-fr" type="hidden" name="fr" value="/fr/front-page">
                                        <noscript><div><input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Go" class="button js-form-submit form-submit" />
                                            </div></noscript><input data-drupal-selector="form-i9i6pxgbyh4yhzvnkirgryykek857cepxw65dauqve8" type="hidden" name="form_build_id" value="form-i9I6pxGBYh4YhZVnKirgryYkEk857CEpxW65dauqve8">
                                        <input data-drupal-selector="edit-lang-dropdown-form" type="hidden" name="form_id" value="lang_dropdown_form">

                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="header__section--secondary">
                            <div class="wrapper--navigation">
                                <a href="#" id="toggle-expand" class="navigation__toggle-expand">
                    <span class="visually-hidden">
                      Mobile menu expand icon
                    </span>
                                    <span class="navigation__toggle-expand__group navigation__toggle-expand__group--open">
                      <span class="navigation__toggle-expand__icon navigation__toggle-expand__icon--open"></span>
                      <span class="navigation__toggle-expand__text navigation__toggle-expand__text--open">Menu</span>
                    </span>
                                    <span class="navigation__toggle-expand__group navigation__toggle-expand__group--closed">
                      <span class="navigation__toggle-expand__icon navigation__toggle-expand__icon--closed"></span>
                      <span class="navigation__toggle-expand__text navigation__toggle-expand__text--closed">Close</span>
                    </span>
                                </a>
                                <div class="wrapper--navigation__content">
                                    <nav id="block-drupfan-main-menu" class="primary-nav block block-menu navigation menu--main" aria-labelledby="block-drupfan-main-menu-menu" role="navigation">

                                        <h2 class="visually-hidden block__title" id="block-drupfan-main-menu-menu">Main navigation</h2>


                                        <ul class="menu menu--level-1">




                                            <li class="menu__item menu__item--link menu__item--level-1 menu__item--has-children">

                                                <a href="/en/outsourcing" class="menu__link menu__link--link menu__link--level-1 menu__link--has-children" data-drupal-link-system-path="node/139">Outsourcing</a>

                                                <ul class="menu menu--level-2">




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/outsourcing/dedicated-teams" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/177">Dedicated Teams</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/outsourcing/staff-augmentation" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/178">Staff Augmentation</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/outsourcing/team-extension" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/179">Extended Team</a>


                                                    </li>
                                                </ul>


                                            </li>




                                            <li class="menu__item menu__item--link menu__item--level-1 menu__item--has-children">

                                                <a href="/en/software-solutions" class="menu__link menu__link--link menu__link--level-1 menu__link--has-children" data-drupal-link-system-path="node/140">Solutions</a>

                                                <ul class="menu menu--level-2">




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/website-development" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/173">Website Development</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/website-support-and-maintenance" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/41">Support & Maintenance</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/business-analysis-and-planning" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/174">Business Analysis & Planning</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/ui-ux-design" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/175">UI/UX</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/native-mobile-application-development" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/181">Native Mobile Apps</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/cross-platform-app-development" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/182">Cross Platform/JS Mobile Apps</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/software-solutions/website-application-development" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/183">Web Apps</a>


                                                    </li>
                                                </ul>


                                            </li>




                                            <li class="menu__item menu__item--link menu__item--level-1 menu__item--has-children">

                                                <a href="/en/drupal-migration" class="menu__link menu__link--link menu__link--level-1 menu__link--has-children" data-drupal-link-system-path="node/191">Drupal Migration</a>

                                                <ul class="menu menu--level-2">




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/drupal-migration/drupal-7-migration-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/184">Drupal 7 Migration</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/drupal-migration/drupal-10-update-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/185">Drupal 10/11 Update</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/drupal-migration/drupal-to-wordpress-migration-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/186">Drupal to WordPress</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/drupal-migration/wordpress-to-drupal-migration-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/187">WordPress to Drupal</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/drupal-migration/other-cms-to-drupal-migration-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/188">Other CMS to Drupal</a>


                                                    </li>
                                                </ul>


                                            </li>




                                            <li class="technology-menu-container menu__item menu__item--link menu__item--level-1 menu__item--has-children">

                                                <a href="/en/technology-stack" class="menu__link menu__link--link menu__link--level-1 menu__link--has-children" data-drupal-link-system-path="node/189">Technology</a>

                                                <ul class="menu menu--level-2">




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/laravel-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/190">Laravel</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/drupal-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/18">Drupal</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/magento-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/192">Magento</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/shopify-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/193">Shopify</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/salesforce-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/195">Salesforce</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/unity-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/196">Unity</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/python-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/199">Python</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/php-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/200">PHP</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/symfony-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/201">Symfony</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/genesys-cloud-cx-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/202">Genesys</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/wordpress-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/203">WordPress</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/node-js-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/204">Node.js</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/react-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/205">React</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/angular-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/206">Angular</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/vue-js-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/207">Vue.js</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/ios-app-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/208">IOS</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/java-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/209">JAVA</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/kotlin-app-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/210">Kotlin</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/flutter-app-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/214">Flutter</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/android-app-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/212">Android</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/swift-app-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/213">Swift</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/next-js-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/222">Next.js</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/objective-c-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/221">Objective-C</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/technology-stack/adobe-commerce-development-services" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/211">Adobe Commerce</a>


                                                    </li>
                                                </ul>


                                            </li>




                                            <li class="menu__item menu__item--link menu__item--level-1 menu__item--has-children">

                                                <a href="/en/about-us" class="menu__link menu__link--link menu__link--level-1 menu__link--has-children" data-drupal-link-system-path="node/194">About</a>

                                                <ul class="menu menu--level-2">




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/careers" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/11">Careers</a>


                                                    </li>




                                                    <li class="menu__item menu__item--link menu__item--level-2">

                                                        <a href="/en/contact-us" class="menu__link menu__link--link menu__link--level-2" data-drupal-link-system-path="node/16">Contact</a>


                                                    </li>
                                                </ul>


                                            </li>




                                            <li class="menu__item menu__item--link menu__item--level-1">

                                                <a href="/en/blog" class="menu__link menu__link--link menu__link--level-1" data-drupal-link-system-path="blog">Insights</a>


                                            </li>




                                            <li class="menu__item menu__item--link menu__item--level-1">

                                                <a href="/en/form/request-a-free-quote" class=" webform-dialog webform-dialog-normal button menu__link menu__link--link menu__link--level-1" data-drupal-link-system-path="webform/request_a_free_quote">Get a Quote</a>


                                            </li>
                                        </ul>



                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
        </div>
    </div>
    <div class="highlighted">
        <aside class="container section clearfix" role="complementary">
            <div class="region region--highlighted grid-full layout--pass--content-medium">
                <div data-drupal-messages-fallback="" class="hidden messages-list"></div>
            </div>
        </aside>
    </div>

    <div id="main-wrapper" class="layout-main-wrapper clearfix">
        <div id="main" class="container-lg ">

            <div class="row row-offcanvas row-offcanvas-left clearfix">
                <main>

                    <section class="section">

                        <a href="#main-content" id="main-content" tabindex="-1">Back to top</a>


                        <div class="region region--content layout--pass--content-medium">




