<?php

namespace App\View\Widgets;

use Illuminate\Support\Facades\Request;

class BreadcrumbWidget
{
    public static function render(): string
    {
        $currentUrl = Request::url();

        // create arr breadcrumbs by link URL
        $breadcrumbs = self::generateBreadcrumbs($currentUrl);

        return view('widgets.breadcrumb-widget', compact('breadcrumbs'))->render();
    }

    private static function generateBreadcrumbs($url): array
    {
        $segments = explode('/', trim(parse_url($url, PHP_URL_PATH), '/'));

        $breadcrumbs = [
            ['label' => 'Home', 'url' => url('/')],
        ];

        $path = '';
        foreach ($segments as $segment) {
            $path .= '/' . $segment;
            $breadcrumbs[] = ['label' => ucfirst($segment), 'url' => url($path)];
        }

        return $breadcrumbs;
    }
}
