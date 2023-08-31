<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <img src="https://vascomm.co.id/wp-content/uploads/2022/07/absk.png" class="h-100 mx-auto d-block" alt="logo">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{request()->segment(1) == 'dashboard' ? 'active' : ''}}">
        <a class="nav-link " href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{request()->segment(1) == 'product' ? 'active' : ''}}">
        <a class="nav-link " href="{{route('product')}}">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>Product</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{request()->segment(1) == 'user' ? 'active' : ''}}">
        <a class="nav-link " href="{{route('user')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
</ul>
