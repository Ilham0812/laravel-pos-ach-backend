<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">ACMS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard -
                        Acharne</span></a>

                {{-- <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('dashboard') }}">General Dashboard
                        </a>
                    </li>
                </ul> --}}

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('users.index') }}">User Dashboard</a>
                    </li>
                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('products.index') }}">Product Dashboard</a>
                    </li>
                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('categories.index') }}">Category Dashboard</a>
                    </li>
                </ul>
            </li>
</div>
