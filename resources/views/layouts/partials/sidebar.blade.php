<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item @if(request()->routeIs('dashboard')) active @endif">
                <a class="d-flex align-items-center" href="{{route('dashboard')}}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate">
                        {{ __('Dashboard') }}
                    </span>
                </a>
            </li>
            @can('manager_view')
                <li class=" nav-item @if(request()->routeIs('users.index') || request()->routeIs('users.create') || request()->routeIs('users.edit') || request()->routeIs('users.show')) active @endif">
                    <a class="d-flex align-items-center " href="{{route('users.index')}}">
                        <i data-feather="user"></i>
                        <span class="menu-title text-truncate">
                            {{ __('Managers') }}
                        </span>
                    </a>
                </li>
            @endcan
            <li class=" nav-item @if(request()->routeIs('tests.index') || request()->routeIs('tests.create') || request()->routeIs('tests.edit') || request()->routeIs('tests.show')) active @endif">
                <a class="d-flex align-items-center " href="{{route('tests.index')}}">
                    <i data-feather="settings"></i>
                    <span class="menu-title text-truncate">
                        {{ __('Tests') }}
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
