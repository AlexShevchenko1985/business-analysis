<?php
namespace App\CustomPostTypes;

use App\Base\TaskInterface;

class Project implements TaskInterface
{
    /**
     * Post type constants
     */
    const POST_TYPE = 'project';
    const SINGLE_NAME = 'Project';
    const PLURAL_NAME = 'Projects';

    /**
     * @return void
     */
    public function do(): void
    {
        $this->registerPostTypes();
    }

    /**
     * @return void
     */
    private function registerPostTypes(): void
    {
        register_post_type(static::POST_TYPE, [
            'label'  => null,
            'labels' => [
                'name'               => esc_html__(self::SINGLE_NAME, SSW_TD),
                'singular_name'      => esc_html__(self::SINGLE_NAME, SSW_TD),
                'menu_name'          => esc_html__(self::SINGLE_NAME, SSW_TD),
                'name_admin_bar'     => esc_html__(self::SINGLE_NAME, SSW_TD),
                'add_new'            => esc_html__('Add New', SSW_TD),
                'add_new_item'       => esc_html__('Add New '. self::SINGLE_NAME, SSW_TD),
                'new_item'           => esc_html__('New ' . self::SINGLE_NAME, SSW_TD),
                'edit_item'          => esc_html__('Edit ' . self::SINGLE_NAME, SSW_TD),
                'view_item'          => esc_html__('View ' . self::SINGLE_NAME, SSW_TD),
                'all_items'          => esc_html__('All ' . self::PLURAL_NAME, SSW_TD),
                'search_items'       => esc_html__('Search ' . self::PLURAL_NAME, SSW_TD),
                'not_found'          => esc_html__('No ' .self::PLURAL_NAME. ' found', SSW_TD),
                'not_found_in_trash' => esc_html__('No ' .self::PLURAL_NAME. ' found in Trash', SSW_TD),
            ],
            'description'   => '',
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-book',
            'rewrite'       => ['slug' => static::POST_TYPE],
            'supports'      => ['title'],
            'has_archive'   => true,
            'show_in_rest'  => true,
            'public'        => false,
            'show_ui'       => true,
            'show_in_menu'  => true,
            'exclude_from_search' => true,
            'publicly_queryable' => false,
        ]);
    }
}
