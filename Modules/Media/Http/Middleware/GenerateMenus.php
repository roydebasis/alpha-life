<?php

namespace Modules\Media\Http\Middleware;

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

            // Medias Dropdown
            $articles_menu = $menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> Media', [
                'class' => 'c-sidebar-nav-dropdown',
            ])
                ->data([
                    'order'         => 81,
                    'activematches' => [
                        'admin/photos*',
                        'admin/videos*',
                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $articles_menu->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $articles_menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> Photos', [
                'route' => 'backend.medias.photos.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/photos*',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
            // Submenu: Categories
            $articles_menu->add('<i class="c-sidebar-nav-icon fas fa-sitemap"></i> Videos', [
                'route' => 'backend.medias.videos.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 83,
                    'activematches' => 'admin/videos*',
                    'permission'    => ['edit_categories'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
