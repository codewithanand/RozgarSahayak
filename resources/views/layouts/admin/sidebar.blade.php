<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img src="{{ asset('assets/images/logo.jpg') }}" height="50" width="50" alt=""
                style="border-radius: 50%;">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item {{ Request::is('admin/personal-information') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/personal-information') }}">
            <i class="fas fa-users"></i>
            <span>Personal Information</span>
        </a>
    </li>

    {{-- <li class="nav-item {{ Request::is('admin/users/registrations') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/admin/users/registrations') }}">
            <i class="fas fa-users"></i>
            <span>New Registrations</span>
            <span class="badge bg-danger">New</span>
        </a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li
        class="nav-item {{ Request::is('admin/categories/create') || Request::is('admin/categories') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('admin/categories/create') || Request::is('admin/categories') ? '' : 'collapsed' }}"
            href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="{{ Request::is('admin/categories/create') || Request::is('admin/categories') ? true : false }}"
            aria-controls="collapseCategory">
            <i class="fas fa-layer-group"></i>
            <span>Category</span>
        </a>
        <div id="collapseCategory"
            class="collapse {{ Request::is('admin/categories/create') || Request::is('admin/categories') ? 'show' : '' }}"
            aria-labelledby="headingFeatured" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/categories/create') ? 'active' : '' }}"
                    href="{{ url('/admin/categories/create') }}">Add Category</a>
                <a class="collapse-item {{ Request::is('admin/categories') ? 'active' : '' }}"
                    href="{{ url('/admin/categories') }}">Categories</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
