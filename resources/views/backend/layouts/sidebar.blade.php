
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>

<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" 
     src="{{ auth()->user()->profile_image ? asset(auth()->user()->profile_image) : 'default-image-path' }}" 
     alt="User Image" 
     style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">

        <div>
            <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
            <p class="app-sidebar__user-designation">Developer</p>
        </div>
    </div>

    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ request()->routeIs('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="app-menu__icon bi bi-speedometer"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        {{-- Customer --}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-bs-toggle="treeview">
                <i class="app-menu__icon bi bi-file-earmark"></i>
                <span class="app-menu__label">Customer</span>
                <i class="treeview-indicator bi bi-chevron-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ route('customermanagement') }}"><i class="icon bi bi-circle-fill"></i>Add New</a></li>
                <li><a class="treeview-item" href="{{ route('Customerlist') }}"><i class="icon bi bi-circle-fill"></i>All Customers</a></li>
            </ul>
        </li>
        {{-- User --}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-bs-toggle="treeview">
                <i class="app-menu__icon bi bi-file-earmark"></i>
                <span class="app-menu__label">User</span>
                <i class="treeview-indicator bi bi-chevron-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ route('usermanagement') }}"><i class="icon bi bi-circle-fill"></i>Add New</a></li>
                <li><a class="treeview-item" href="{{ route('Userlist') }}"><i class="icon bi bi-circle-fill"></i>User List</a></li>
            </ul>
        </li>
        

        {{--Vehicle--}}
        <li class="treeview">
            <a class="app-menu__item" href="#" data-bs-toggle="treeview">
                <i class="app-menu__icon bi bi-file-earmark"></i>
                <span class="app-menu__label">Vehicle</span>
                <i class="treeview-indicator bi bi-chevron-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ route('vehiclemanagement') }}"><i class="icon bi bi-circle-fill"></i>Add New</a></li>      
                <li><a class="treeview-item" href="{{ route('Vehiclelist') }}"><i class="icon bi bi-circle-fill"></i>Vehicle List</a></li> 
            </ul>
        </li>

        {{--Driving history--}}
        <li>
            <a class="app-menu__item {{ request()->routeIs('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <span class="app-menu__label">Driving History</span>
            </a>
        </li>

        {{--App Setting--}}
        <li>
            <a class="app-menu__item {{ request()->routeIs('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <span class="app-menu__label">App Setting</span>
            </a>
        </li>
    </ul>
</aside>
