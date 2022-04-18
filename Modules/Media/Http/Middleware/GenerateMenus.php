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
           $media_menu = $menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> Media', [
               'class' => 'c-sidebar-nav-dropdown',
           ])
               ->data([
                   'order'         => 81,
                   'activematches' => [
                       'admin/albums*',
                       'admin/videos*',
                   ],
                   'permission' => ['view_posts', 'view_categories'],
               ]);
           $media_menu->link->attr([
               'class' => 'c-sidebar-nav-dropdown-toggle',
               'href'  => '#',
           ]);

           // Submenu: Posts
           $media_menu->add('<i class="c-sidebar-nav-icon fas fa-file-alt"></i> Gallery', [
               'route' => 'backend.albums.index',
               'class' => 'c-sidebar-nav-item',
           ])
               ->data([
                   'order'         => 82,
                   'activematches' => 'admin/albums*',
                   'permission'    => ['edit_posts'],
               ])
               ->link->attr([
                   'class' => 'c-sidebar-nav-link',
               ]);
           // Submenu: Categories
           $media_menu->add('<i class="c-sidebar-nav-icon fas fa-sitemap"></i> Videos', [
               'route' => 'backend.videos.index',
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

