@php
    $configData = Helper::appClasses();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme px-3">

    <!-- ! Hide app brand if navbar-full -->
    @if (!isset($navbarFull))
        <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                    @include('_partials.macros', ['width' => 25, 'withbg' => 'var(--bs-primary)'])
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2">{{ config('variables.templateName') }}</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>
    @endif
    @php
        $activeClass1 = null;
        $activeClass2 = null;
        $currentRouteName = Route::currentRouteName();

        if (str_contains($currentRouteName, 'delivery')) {
            $activeClass1 = 'active';
        } elseif (str_contains($currentRouteName, 'resturant')) {
            $activeClass2 = 'active';
        } else {
			$activeClass1 = 'active';
        }

    @endphp

    <ul class="nav nav-pills mb-2" style="border-bottom: 1px solid #ddd;" role="tablist">
        <button type="button" class="nav-link {{ $activeClass1 }} px-2" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-left-home" aria-controls="navs-pills-left-home" aria-selected="true">
            <div class="text-truncate"><img class="me-2" src="{{ asset('assets/svg/DeliveryIcons/delivery.svg') }}"
                    style="width:30px; height:30px;" alt="Icon">Delivery</div>
        </button>
        <button type="button" class="nav-link px-2 {{ $activeClass2 }}" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-left-profile" aria-controls="navs-pills-left-profile" aria-selected="false">
            <div class="text-truncate"><img class="me-2"
                    src="{{ asset('assets/svg/RestaurantIcons/Restaurants.svg') }}" style="width:30px; height:30px;"
                    alt="Icon">Restuarant</div>
        </button>
    </ul>

    <div class="menu-inner  tab-content p-0" style="overflow-y: scroll;">
        <ul class="tab-pane fade {{ $activeClass1 ? 'active show' : '' }} py-1 px-1" id="navs-pills-left-home"
            role="tabpanel">

            @foreach ($menuData[0]->menu as $menu)
                {{-- menu headers --}}
                @if (isset($menu->menuHeader))
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text text-truncate">{{ __($menu->menuHeader) }}</span>
                    </li>
                @else
                    {{-- active menu method --}}
                    @php
                        $activeClass = null;
                        $currentRouteName = Route::currentRouteName();
                        if ($currentRouteName === $menu->slug) {
                            $activeClass = 'active';
                        }
                    @endphp

                    {{-- main menu --}}
                    <li class="menu-item {{ $activeClass }}">
                        <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}"
                            class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}"
                            @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
                            @isset($menu->icon)
                                {{-- <i class="{{ $menu->icon }}"></i> --}}
                                @if (file_exists(public_path("assets/svg/DeliveryIcons/{$menu->name}.svg")))
                                    <img class="me-2 "
                                        src="{{ asset('assets/svg/DeliveryIcons/' . $menu->name . '.svg') }}"
                                        style="width:30px; height:30px;" alt="Icon">
                                @endif
                            @endisset
                            <div class="text-truncate ml-1">{{ isset($menu->name) ? __($menu->name) : '' }}</div>
                            @isset($menu->badge)
                                <div class="badge bg-{{ $menu->badge[0] }} rounded-pill ms-auto">
                                    {{ $menu->badge[1] }}
                                </div>
                            @endisset
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <ul class="tab-pane fade {{ $activeClass2 ? 'active show' : '' }} py-1 px-1" id="navs-pills-left-profile"
            role="tabpanel">
            @foreach ($menuData[0]->submenu as $menu)
                {{-- menu headers --}}
                @if (isset($menu->menuHeader))
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">{{ __($menu->menuHeader) }}</span>
                    </li>
                @else
                    {{-- active menu method --}}
                    @php
                        $activeClass = null;
                        $currentRouteName = Route::currentRouteName();
                        if ($currentRouteName === $menu->slug) {
                            $activeClass = 'active';
                        } elseif (isset($menu->submenu)) {
                            if (gettype($menu->slug) === 'array') {
                                foreach ($menu->slug as $slug) {
                                    if (str_contains($currentRouteName, $slug) and strpos($currentRouteName, $slug) === 0) {
                                        $activeClass = 'active open';
                                    }
                                }
                            } else {
                                if (str_contains($currentRouteName, $menu->slug) and strpos($currentRouteName, $menu->slug) === 0) {
                                    $activeClass = 'active open';
                                }
                            }
                        }
                    @endphp

                    {{-- main menu --}}
                    <li class="menu-item {{ $activeClass }}">
                        <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}"
                            class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}"
                            @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
                            @isset($menu->icon)
                                @if (file_exists(public_path("assets/svg/RestaurantIcons/{$menu->name}.svg")))
                                    <img class="me-2"
                                        src="{{ asset('assets/svg/RestaurantIcons/' . $menu->name . '.svg') }}"
                                        style="width:30px; height:30px;" alt="Icon">
                                @endif
                                {{-- <i class="{{ $menu->icon }}"></i> --}}
                            @endisset
                            <div class="text-truncate">{{ isset($menu->name) ? __($menu->name) : '' }}</div>
                            @isset($menu->badge)
                                <div class="badge bg-{{ $menu->badge[0] }} rounded-pill ms-auto">
                                    {{ $menu->badge[1] }}
                                </div>
                            @endisset
                        </a>

                        {{-- submenu --}}
                        @isset($menu->submenu)
                            @include('layouts.sections.menu.submenu', ['menu' => $menu->submenu])
                        @endisset
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    {{-- <div class="menu-inner-shadow"></div> --}}





</aside>
