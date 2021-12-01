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

            // Service Dropdown
//            $articles_menu = $menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Services', [
//                'class' => 'c-sidebar-nav-dropdown',
//            ])
//                ->data([
//                    'order'         => 81,
//                    'activematches' => [
//                        'admin/services*'
//                    ],
//                    'permission' => ['view_posts', 'view_categories'],
//                ]);
//            $articles_menu->link->attr([
//                'class' => 'c-sidebar-nav-dropdown-toggle',
//                'href'  => '#',
//            ]);
//
//            // Submenu: Services
//            $articles_menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> All Services', [
//                'route' => 'backend.services.index',
//                'class' => 'c-sidebar-nav-item',
//            ])->data([
//                'order'         => 82,
//                'activematches' => 'admin/services*',
//                'permission'    => ['edit_posts'],
//            ])->link->attr([
//                'class' => 'c-sidebar-nav-link',
//            ]);
//
//            // Submenu: Categories
//            $articles_menu->add('<i class="c-sidebar-nav-icon fas fa-plus-circle"></i> Add New', [
//                'route' => 'backend.services.create',
//                'class' => 'c-sidebar-nav-item',
//            ])->data([
//                'order'         => 83,
//                'activematches' => 'admin/services/create*',
//                'permission'    => ['edit_categories'],
//            ])->link->attr([
//                'class' => 'c-sidebar-nav-link',
//            ]);

            $menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Services', [
                'route' => 'backend.services.index',
                'class' => 'c-sidebar-nav-item',
            ])->data([
                'order'         => 81,
                'activematches' => 'admin/services*',
                'permission'    => ['view_services'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

        })->sortBy('order');

        return $next($request);
    }
}
