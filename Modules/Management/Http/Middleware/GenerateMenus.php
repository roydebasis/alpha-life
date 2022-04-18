<?php

namespace Modules\Management\Http\Middleware;

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
            $articles_menu = $menu->add('<i class="c-sidebar-nav-icon fas fa-users"></i> Managements', [
                'class' => 'c-sidebar-nav-dropdown',
            ])
            ->data([
                'order'         => 81,
                'activematches' => [
                    'admin/managements*',
                    'admin/managements/categories*',
                ],
                'permission' => ['view_posts', 'view_categories'],
            ]);
            $articles_menu->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $articles_menu->add('<i class="c-sidebar-nav-icon fas fa-user"></i> Members', [
                'route' => 'backend.managements.index',
                'class' => 'c-sidebar-nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/managements*',
                'permission'    => ['edit_posts'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
            // Submenu: Categories
            $articles_menu->add('<i class="c-sidebar-nav-icon fas fa-sitemap"></i> Groups', [
                'route' => 'backend.groups.index',
                'class' => 'c-sidebar-nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/managements/groups*',
                'permission'    => ['edit_categories'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
