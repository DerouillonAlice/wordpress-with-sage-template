<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class HomeComposer extends Composer
{
    protected static $views = [
        'page-home',
    ];

    public function with()
    {
        return [
            'home_section_title'   => rwmb_meta('home_section_title'),
            'home_section_content' => rwmb_meta('home_section_content'),
            'home_section_image'   => rwmb_meta('home_section_image', ['type' => 'image_advanced']),
        ];
    }
}
