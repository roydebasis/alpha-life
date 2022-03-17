<?php

namespace Modules\Notice\Http\Middleware;

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

            // Articles Dropdown
            $menu->add('<i class="fas fa-newspaper c-sidebar-nav-icon"></i> Notice', [
                'route' => 'backend.notices.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 81,
                    'activematches' => ['admin/notices*'],
                    'permission'    => ['view_posts'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
