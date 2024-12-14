<aside class="left-sidebar with-horizontal">
    <div>
        <nav class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
                @foreach($menus as $menu)
                    <li class="sidebar-item">
                        <!-- Parent Menu Link -->
                        <a class="sidebar-link has-arrow primary-hover-bg" href="{{ $menu->menu_link }}" aria-expanded="false">
                            <iconify-icon icon="{{ $menu->menu_icon }}" class="fs-6 aside-icon"></iconify-icon>
                            <span class="hide-menu ps-1">{{ $menu->menu_name }}</span>
                        </a>

                        <!-- Check if this menu has any children (submenus) -->
                        @if($menu->children->count() > 0)
                            <ul aria-expanded="false" class="collapse first-level">
                                @foreach($menu->children as $submenu)
                                    <li class="sidebar-item">
                                        <a href="{{ $submenu->menu_link }}" class="sidebar-link">
                                            <span class="sidebar-icon"></span>
                                            <span class="hide-menu text-truncate">{{ $submenu->menu_name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
