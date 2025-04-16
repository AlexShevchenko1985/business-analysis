<?php
namespace App\Setup;

use App\Base\TaskInterface;
use App\Theme;

class Assets implements TaskInterface
{
	/**
	 * @return void
	 */
	public function do(): void
	{
		add_action( 'wp_enqueue_scripts', [$this, 'register']);
	}

	/**
	 * Add theme styles and scripts.
	 *
	 * @return void
	 */
	public function register() : void
	{
        $this->enqueueMainStyles();
        $this->enqueueMainScripts();
        $this->deactivateDefaults();
	}

    /**
     * @return void
     */
    private function enqueueMainStyles() : void
    {
        $script_url = get_template_directory_uri() . '/dist/app.css';
        $script_dir = get_template_directory() . '/dist/app.css';
        wp_enqueue_style(Theme::SLUG . '-styles',
            $script_url,
            [],
            self::getFileVersion($script_dir),
        );
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/src/scss/bootstrap.min.css');
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    }

    /**
     * @return void
     */
    private function enqueueMainScripts() : void
    {
        $script_url = get_template_directory_uri() . '/dist/app.js';
        $script_dir = get_template_directory() . '/dist/app.js';
        wp_enqueue_script(
            Theme::SLUG .'-scripts',
            $script_url,
            [],
            self::getFileVersion($script_dir),
            true
        );

        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/js/bootstrap.bundle.min.js', [], null, true);
        wp_enqueue_script('main-js', get_template_directory_uri() . '/src/js/main.js', [], null, true);
        wp_enqueue_script('mobile-menu-js', get_template_directory_uri() . '/src/js/menu--mobile.min.js', [], null, true);
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

        wp_enqueue_script('ScrollMagic-js', get_template_directory_uri() . '/src/js/scrollmagic/ScrollMagic.min.js', [], '1.0.0', true);
        wp_enqueue_script('animation-gsap-js', get_template_directory_uri() . '/src/js/scrollmagic/plugins/animation.gsap.min.js', [], '1.0.0', true);

    }

    /**
     * @return void
     */
    private function deactivateDefaults() : void
    {
        /**
         * Disable default WP styles
         */
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme');
        wp_dequeue_style( 'wc-blocks-style');
        wp_dequeue_style( 'classic-theme-styles');

        wp_dequeue_script( 'jquery');
        wp_deregister_script( 'jquery');
    }

    private static function getFileVersion($script_dir): string
    {
        return file_exists($script_dir) ? filemtime($script_dir) : '1.0.0';
    }
}
