<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            
            <span class="app-brand-text demo menu-text fw-bold"><img src="/images/logo.png" alt="" height="30px" width="100%"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
      



        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">FEED</span>
        </li>
        <li class="menu-item {{ Request::url() == route('admin-users') ? 'active' : '' }}">
            <a href="{{ route('admin-users') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="User">User</div>
            </a>
        </li>
        
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>


       


       
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">OTHERS</span>
        </li>


      

       
    </ul>
</aside>
