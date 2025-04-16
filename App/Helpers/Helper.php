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
        if (empty($background)) {
            return '';
        }

        if ('white' === $background) {
            return 'background: #fff';
        }

        if ('grey' === $background) {
            return 'background: rgba(232, 232, 232, 0.7);';
        }

        if ('blue' === $background) {
            return 'background: rgba(117, 147, 255, 0.3);';
        }

        return '';
    }

    public static function getNavigation($query = null): void
    {
        if (!$query) {
            global $wp_query;
            $query = $wp_query;
        }

        $total_pages = $query->max_num_pages;
        $current_page = max(1, get_query_var('paged'));

        if ($total_pages > 1) {
            echo '<div class="navigation">';

            // Prev
            if ($current_page > 1) {
                echo '<a class="prev" href="' . esc_url(get_pagenum_link($current_page - 1)) . '">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16">
                    <path d="M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z"></path>
                  </svg>';
                echo '</a>';
            }

            // Page numbers
            for ($i = 1; $i <= $total_pages; $i++) {
                $class = ($i === $current_page) ? ' class="active"' : '';
                echo '<a href="' . esc_url(get_pagenum_link($i)) . '"' . $class . '>' . $i . '</a>';
            }

            // Next
            if ($current_page < $total_pages) {
                echo '<a class="next" href="' . esc_url(get_pagenum_link($current_page + 1)) . '">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16">
                    <path d="M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z"></path>
                  </svg>';
                echo '</a>';
            }

            echo '</div>';
        }
    }

}

