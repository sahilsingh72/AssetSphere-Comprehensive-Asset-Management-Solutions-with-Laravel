<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/dashboard') ? 'active' : '' }}" href="{{ route('okcl.dashboard') }}">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!-- Assets -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/asset*') ? 'active' : '' }}" data-toggle="collapse" href="#assets-menu" aria-expanded="{{ request()->is('okcl/asset*') ? 'true' : 'false' }}" aria-controls="assets-menu">
                <i class="fas fa-boxes menu-icon"></i>
                <span class="menu-title">Assets</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/asset*') ? 'show' : '' }}" id="assets-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('okcl/asset') ? 'active' : '' }}" href="{{ route('okcl.asset') }}">Asset List</a>
                    </li> 
                </ul>
            </div>
        </li>
        <!-- Components -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/components*') ? 'active' : '' }}" data-toggle="collapse" href="#components-menu" aria-expanded="{{ request()->is('okcl/components*') ? 'true' : 'false' }}" aria-controls="components-menu">
                <i class="fas fa-puzzle-piece menu-icon"></i>
                <span class="menu-title">Components</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/components*') ? 'show' : '' }}" id="components-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Component List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Component</a></li>
                </ul>
            </div>
        </li>
        <!-- Maintenance -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/maintenance*') ? 'active' : '' }}" data-toggle="collapse" href="#maintenance-menu" aria-expanded="{{ request()->is('okcl/maintenance*') ? 'true' : 'false' }}" aria-controls="maintenance-menu">
                <i class="fas fa-tools menu-icon"></i>
                <span class="menu-title">Maintenance</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/maintenance*') ? 'show' : '' }}" id="maintenance-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Maintenance List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Maintenance</a></li>
                </ul>
            </div>
        </li>
        <!-- Depreciation -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/depreciation*') ? 'active' : '' }}" data-toggle="collapse" href="#depreciation-menu" aria-expanded="{{ request()->is('okcl/depreciation*') ? 'true' : 'false' }}" aria-controls="depreciation-menu">
                <i class="fas fa-chart-pie menu-icon"></i>
                <span class="menu-title">Depreciation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/depreciation*') ? 'show' : '' }}" id="depreciation-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Depreciation List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Depreciation</a></li>
                </ul>
            </div>
        </li>
        <!-- Asset Types -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/assettypes*') ? 'active' : '' }}" data-toggle="collapse" href="#assettypes-menu" aria-expanded="{{ request()->is('okcl/assettypes*') ? 'true' : 'false' }}" aria-controls="assettypes-menu">
                <i class="fas fa-layer-group menu-icon"></i>
                <span class="menu-title">Asset Types</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/assettypes*') ? 'show' : '' }}" id="assettypes-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Asset Types List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Asset Type</a></li>
                </ul>
            </div>
        </li>
        <!-- Brands -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/brands*') ? 'active' : '' }}" data-toggle="collapse" href="#brands-menu" aria-expanded="{{ request()->is('okcl/brands*') ? 'true' : 'false' }}" aria-controls="brands-menu">
                <i class="fas fa-tags menu-icon"></i>
                <span class="menu-title">Brands</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/brands*') ? 'show' : '' }}" id="brands-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Brands List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Brand</a></li>
                </ul>
            </div>
        </li>
        <!-- Suppliers -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/suppliers*') ? 'active' : '' }}" data-toggle="collapse" href="#suppliers-menu" aria-expanded="{{ request()->is('okcl/suppliers*') ? 'true' : 'false' }}" aria-controls="suppliers-menu">
                <i class="fas fa-truck menu-icon"></i>
                <span class="menu-title">Suppliers</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/suppliers*') ? 'show' : '' }}" id="suppliers-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Suppliers List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Supplier</a></li>
                </ul>
            </div>
        </li>
        <!-- Locations -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/locations*') ? 'active' : '' }}" data-toggle="collapse" href="#locations-menu" aria-expanded="{{ request()->is('okcl/locations*') ? 'true' : 'false' }}" aria-controls="locations-menu">
                <i class="fas fa-map-marker-alt menu-icon"></i>
                <span class="menu-title">Locations</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/locations*') ? 'show' : '' }}" id="locations-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Locations List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Location</a></li>
                </ul>
            </div>
        </li>
        <!-- User -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/user*') ? 'active' : '' }}" data-toggle="collapse" href="#user-menu" aria-expanded="{{ request()->is('okcl/user*') ? 'true' : 'false' }}" aria-controls="user-menu">
                <i class="fas fa-user menu-icon"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/user*') ? 'show' : '' }}" id="user-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile.edit') }}">Profile Edit</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add User</a></li>
                </ul>
            </div>
        </li>
        <!-- Reports -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/reports*') ? 'active' : '' }}" data-toggle="collapse" href="#reports-menu" aria-expanded="{{ request()->is('okcl/reports*') ? 'true' : 'false' }}" aria-controls="reports-menu">
                <i class="fas fa-file-alt menu-icon"></i>
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/reports*') ? 'show' : '' }}" id="reports-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Reports List</a></li>
                </ul>
            </div>
        </li>
        <!-- Settings -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/settings*') ? 'active' : '' }}" data-toggle="collapse" href="#settings-menu" aria-expanded="{{ request()->is('okcl/settings*') ? 'true' : 'false' }}" aria-controls="settings-menu">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/settings*') ? 'show' : '' }}" id="settings-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Settings List</a></li>
                </ul>
            </div>
        </li>
        <!-- Support Tickets -->
        <li class="nav-item">
            <a class="nav-link {{ request()->is('okcl/support*') ? 'active' : '' }}" data-toggle="collapse" href="#support-menu" aria-expanded="{{ request()->is('okcl/support*') ? 'true' : 'false' }}" aria-controls="support-menu">
                <i class="fas fa-headset menu-icon"></i>
                <span class="menu-title">Support Tickets</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('okcl/support*') ? 'show' : '' }}" id="support-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Ticket List</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
