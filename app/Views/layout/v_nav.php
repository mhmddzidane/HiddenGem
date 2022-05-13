<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!--Brand--><a class="brand" href="<?= base_url('Home') ?>" style="font-size: 20px; color:#00c597; font-weight:600">HIDDEN <span style="color: #e4e842;">GEM</span><img src="" alt="" width="225" height="18" /></a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-right rd-navbar-collapse">
                        <button class="button button-md button-default-outline-2 button-ujarak" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Isi Buku Tamu</button>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer" style="background-color: #00c597;">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                            <li><a class="icon fa fa-facebook" href="#"></a></li>
                            <li><a class="icon fa fa-twitter" href="#"></a></li>
                            <li><a class="icon fa fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('Home') ?>">Home</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('explore') ?>">Explore</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('blog') ?>">Blog</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('upload') ?>">Upload</a>
                            </li>
                            <li class="nav-item dropdown rd-nav-item">
                                <a class="nav-link dropdown-toggle rd-nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?= base_url('profile') ?>">Edit Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?= base_url('login/logout') ?>">Logout</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>