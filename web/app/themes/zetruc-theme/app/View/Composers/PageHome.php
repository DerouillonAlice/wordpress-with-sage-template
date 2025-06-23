<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use App\PostTypes\Services;

class PageHome extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'page-home',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'services' => Services::getAll(),
            'services_categories' => Services::getCategories(), // Simple catégories
        ];
    }
}
