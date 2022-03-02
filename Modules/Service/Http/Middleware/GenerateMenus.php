<?php

namespace Modules\Service\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Menu::make('admin_sidebar', function ($menu) {

            // Medias Dropdown
            $media_menu = $menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> Products', [
                'class' => 'c-sidebar-nav-dropdown',
            ])
                ->data([
                    'order'         => 81,
                    'activematches' => [
                        'admin/services*',
                        'admin/product-categories*',
                    ],
                    'permission' => ['view_posts', 'edit_service_category'],
                ]);
            $media_menu->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $media_menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> All Products', [
                'route' => 'backend.services.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/services*',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
            // Submenu: Categories
            $media_menu->add('<i class="c-sidebar-nav-icon fas fa-sitemap"></i> Category', [
                'route' => 'backend.product-categories.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 83,
                    'activematches' => 'admin/product-categories*',
                    'permission'    => ['edit_service_category'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');


        return $next($request);
    }
}
