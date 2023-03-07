<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat Ardita <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">    

            <!-- Nav Item - Pages Collapse Menu -->
            <hr class="sidebar-divider">
            <?php if(session('level')=='admin'){
                ?>
            <div class="sidebar-heading">
                Admin
            </div>
                <li class="nav-item">
                <a class="nav-link" href="petugas">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Petugas</span></a>
            </li>
                <?php
            }?>
             <?php if(session('level')!='masyarakat'){
                ?>
                <li class="nav-item">
                <a class="nav-link" href="masyarakat">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Masyarakat</span></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/tanggapan">
                        <i class="fas fa-fw fa-regular fa-comments"></i>
                        <span>Tanggapan</span></a>                   
                </li>
                <?php
            }?>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                    <a class="nav-link" href="/pengaduan">
                        <i class="fas fa-fw fa-regular fa-comment"></i>
                        <span>Pengaduan</span></a>
                </li>
                <?php
                //}
                ?>
                <?php if(!empty(session()->get('logged_in'))) : ?>
                    <li class="nav-item">
                    <a class="nav-link" href="/logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Log Out</span></a>
                </li>
                <?php endif ?>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->

            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

</ul>