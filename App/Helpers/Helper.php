<?php

namespace App\Helpers;

class Helper
{
    public static function getPageIDByPageTemplate(string $template_name): ?string
    {
        global $wpdb;
        return $wpdb->get_var("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = '$template_name' AND meta_key = '_wp_page_template'");
    }

    public static function getSvg(string $url): ?string
    {
        if (empty($url)) {
            return null;
        }

        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);

        return file_get_contents($url, false, $context);

    }

    public static function doExcerpt(string $string, int $limit): string
    {
        $string = strip_tags($string, '<br>');
        $count = strlen($string);
        $string = substr($string, 0, $limit);

        if ($count > $limit) {
            $string .= '...';
        }
        return $string;
    }

    public static function backgroundBlock($background): string
    {
        if(empty($background)){
            return '';
        }

        if('white' === $background){
            return 'background: #fff';
        }

        if('grey' === $background){
            return 'background: rgba(232, 232, 232, 0.7);';
        }

        if('blue' === $background){
            return 'background: rgba(117, 147, 255, 0.3);';
        }

        return '';
    }
}

