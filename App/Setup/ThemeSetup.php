<?php
namespace App\Setup;

use App\Base\TaskInterface;

class ThemeSetup implements TaskInterface
{
	/**
	 * @return void
	 */
	public function do(): void
	{
		add_filter('after_setup_theme', [$this, 'themeSetup']);

        //Disable Gutenberg
        add_filter('use_block_editor_for_post_type', '__return_false', 10);

        add_filter('rtwp_filter_wordcount',  [$this, 'rtwpFilterWordCount'], 10);
	}

    function rtwpFilterWordCount($count) {
        $repeater_field = 'sections';
        if(!is_single()){
            return $count;
        }

        if (have_rows($repeater_field, get_the_ID())) {
            while (have_rows($repeater_field, get_the_ID())) {
                the_row();
                $text = get_sub_field('content');
                if (!empty($text)) {
                    $count += str_word_count(strip_tags($text));
                }
            }
        }
        return $count;
    }

	/**
	 * @return void
	 */
	public function themeSetup(): void
	{
		/*
		* Make theme available for translation.
		*/
		load_theme_textdomain( 'sigma', get_template_directory() . '/languages' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            [
                'header_menu' => esc_html__( 'Header Menu', SSW_TD ),
                'footer_menu_1' => esc_html__( 'Footer Menu 1', SSW_TD ),
                'footer_menu_2' => esc_html__( 'Footer Menu 2', SSW_TD ),
            ]
        );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support(
			'html5',
			[
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            ]
		);

		/**
		 * Add theme support for selective refresh for widgets.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );


        if (!current_user_can('administrator') && !is_admin()) {
            show_admin_bar(false);
        }

        $GLOBALS['user_is_logged_in'] = is_user_logged_in();
    }
}