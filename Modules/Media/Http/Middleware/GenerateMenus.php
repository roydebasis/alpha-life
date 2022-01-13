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
            $menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Media', [
                'route' => 'backend.medias.index',
                'class' => 'c-sidebar-nav-item',
            ])->data([
                'order'         => 81,
                'activematches' => 'admin/medias*',
                'permission'    => ['edit_media'],
            ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);

        })->sortBy('order');

        return $next($request);
    }
}
