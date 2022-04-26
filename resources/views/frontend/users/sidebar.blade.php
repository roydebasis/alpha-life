<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand"> <a href="{{route("backend.dashboard")}}"><img class="c-sidebar-brand-full" src="{{asset("img/AILI.png")}}" height="40" alt="{{ app_name() }}"><img class="c-sidebar-brand-minimized" src="{{asset("img/backend-logo-square.jpg")}}" height="40" alt="{{ app_name() }}"></a> </div>

{{--    {!! $admin_sidebar->asUl( ['class' => 'c-sidebar-nav'], ['class' => 'c-sidebar-nav-dropdown-items'] ) !!}--}}
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ url('user/dashboard') }}"><i class="cil-speedometer c-sidebar-nav-icon"></i> Dashboard</a></li>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
