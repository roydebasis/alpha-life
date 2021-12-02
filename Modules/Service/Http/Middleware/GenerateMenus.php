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
            $menu->add('<i class="c-sidebar-nav-icon fab fa-servicestack"></i> Services', [
                'route' => 'backend.services.index',
                'class' => 'c-sidebar-nav-item',
            ])->data([
                'order'         => 81,
                'activematches' => 'admin/services*',
                'permission'    => ['edit_services'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

        })->sortBy('order');

        return $next($request);
    }
}
