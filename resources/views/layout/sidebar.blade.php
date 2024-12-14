<aside class="left-sidebar with-horizontal">
    <div>
        <nav class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
                @foreach ($menus as $menu)
                    <!-- Check if the menu is assigned to the user's role -->
                    @if (in_array($menu->id, $assignedMenus))
                        <li class="sidebar-item">
                            <!-- Parent Menu Link -->
                            @if ($menu->children->isNotEmpty()) <!-- Check if the menu has children using isNotEmpty() -->
                                <!-- Menu with children (Arrow icon) -->
                                <a class="sidebar-link has-arrow primary-hover-bg" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#submenu_{{ $menu->id }}" aria-expanded="false">
                                    <iconify-icon icon="{{ $menu->menu_icon }}" class="fs-6 aside-icon"></iconify-icon>
                                    <span class="hide-menu ps-1">{{ $menu->menu_name }}</span>
                                </a>

                                <!-- Submenus (Collapse on click) -->
                                <ul id="submenu_{{ $menu->id }}" class="collapse first-level">
                                    @foreach ($menu->children as $submenu)
                                        <!-- Check if the submenu is also assigned to the user's role -->
                                        @if (in_array($submenu->id, $assignedMenus))
                                            <li class="sidebar-item">
                                                <a href="{{ $submenu->menu_link }}" class="sidebar-link">
                                                    <span class="sidebar-icon"></span>
                                                    <span class="hide-menu text-truncate">{{ $submenu->menu_name }}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @else
                                <!-- Menu without children (No arrow) -->
                                <a class="sidebar-link primary-hover-bg" href="{{ $menu->menu_link }}"
                                    aria-expanded="false">
                                    <iconify-icon icon="{{ $menu->menu_icon }}" class="fs-6 aside-icon"></iconify-icon>
                                    <span class="hide-menu ps-1">{{ $menu->menu_name }}</span>
                                </a>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
