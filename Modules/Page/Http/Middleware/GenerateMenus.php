<?php

namespace Modules\Page\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
    public function handle(Request $request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // pages
            $menu->add('<i class="fas fa-newspaper c-sidebar-nav-icon"></i> Pages', [
                'route' => 'backend.pages.index',
                'class' => 'c-sidebar-nav-item',
            ])
                ->data([
                    'order'         => 89,
                    'activematches' => ['admin/pages*'],
                    'permission'    => ['edit_pages'],
                ])
                ->link->attr([
                    'class' => 'c-sidebar-nav-link',
                ]);
        })->sortBy('order');

        return $next($request);
    }
}
