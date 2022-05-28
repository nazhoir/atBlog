<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">

        
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="/" target="_blank">
                    <i class="fa-solid fa-globe"></i> Website
                </a>
            </li>
        </ul>


        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">Dashboard</h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}} " aria-current="page" href="/dashboard">
                    <i class="fa-solid fa-bars-progress"></i>
                            Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
                    <i class="fa-solid fa-file-lines"></i>
                            My Posts
                </a>
            </li>
        </ul>
        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">Settings</h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-sliders"></i> All Settings
                </a>
            </li>
        </ul>
    </div>
</nav>