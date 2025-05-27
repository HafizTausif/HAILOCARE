<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <!-- Dashboard Link -->
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                </ul>
            </li>
            
            <!-- Caregivers Link -->
            <li>
                <a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
                    <i class="flaticon-381-id-card-4"></i>
                    <span class="nav-text">Caregivers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.caregivers.index') }}">All Caregivers</a></li>
                    <li><a href="{{ route('admin.caregivers.create') }}">Add New</a></li>
                </ul>
            </li>
            <li>
    <a href="javascript:void(0);" class="ai-icon has-arrow" aria-expanded="false">
        <i class="flaticon-381-user-9"></i>
        <span class="nav-text">Clients</span>
    </a>
    <ul aria-expanded="false">
        <li><a href="{{ route('admin.clients.index') }}">All Clients</a></li>
        <li><a href="{{ route('admin.clients.create') }}">Add New</a></li>
    </ul>
</li>
 <!-- Add this where you want the logout button to appear -->

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </li>
            <!-- Other menu items... -->
        </ul>
        
        <div class="copyright">
            <p class="fs-14 font-w200"><strong class="font-w400">Admin Dashboard</strong> © {{ date('Y') }} All Rights Reserved</p>
        </div>
    </div>
</div>