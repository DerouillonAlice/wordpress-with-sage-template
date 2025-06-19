<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TetsComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @return array
     */
    protected static $views = [
        'page-tets',
    ];

    /**
     * Data to be passed to the view before rendering.
     *
     * @return array
     */
    public function override()
    {
        return [
            'tets_section_title' => get_field('tets_section_title'),
            'tets_section_content' => get_field('tets_section_content'),
        ];
    }
}
