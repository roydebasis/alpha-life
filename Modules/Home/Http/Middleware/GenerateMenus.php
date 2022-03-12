<?php

namespace Modules\Home\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('admin_sidebar', function ($menu) {

            // Management Dropdown
            $home_menu = $menu->add('<i class="c-sidebar-nav-icon fas fa-home"></i> Home', [
                'class' => 'c-sidebar-nav-dropdown',
            ])
                ->data([
                    'order'         => 70,
                    'activematches' => [
                        'admin/home*',
                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $home_menu->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Bulletins
            $home_menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Bulletins', [
                'route' => 'backend.bulletins.index',
                'class' => 'c-sidebar-nav-item',
            ])->data([
                'order'         => 71,
                'activematches' => 'admin/bulletins*',
                'permission'    => ['edit_services'],
            ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);

                // Submenu: Sliders
            $home_menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Slides Show', [
                'route' => 'backend.sliders.index',
                'class' => 'c-sidebar-nav-item',
            ])->data([
                'order'         => 72,
                'activematches' => 'admin/sliders*',
                'permission'    => ['edit_services'],
            ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);

            // Submenu: Quotes
            $home_menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Quotes', [
                'route' => 'backend.quotes.index',
                'class' => 'c-sidebar-nav-item',
            ])->data([
                'order'         => 73,
                'activematches' => 'admin/quotes*',
                'permission'    => ['edit_services'],
            ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}

