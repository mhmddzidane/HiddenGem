<nav class="navbar navbar-expand-lg navbar-light navbg" style="background-color: #00c597 ;">
    <div class="container">
        <div class="nav-logo navbar-brand mt-3 mb-3">
            <a href="home" style="text-decoration: none; color:#fcfcd4; font-size:larger">HIDDEN <span>GEM</span></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-5">
                    <a class="nav-link" style="color: #fcfcd4; font-size:large" aria-current="page" href="<?= base_url('explore') ?>">Explore</a>
                </li>
                <li class="nav-item  me-5">
                    <a class="nav-link" style="color: #fcfcd4; font-size:large" href="<?= base_url('blog') ?>">Blog</a>
                </li>
                <li class="nav-item  me-5">
                    <a class="nav-link" style="color: #fcfcd4; font-size:large" href="<?= base_url('upload') ?>">Upload</a>
                </li>
                <li class="nav-item dropdown  me-5">
                    <a class="nav-link dropdown-toggle" style="color: #fcfcd4; font-size:large" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('profile') ?>">Show Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('login/logout') ?>">Logout</a></li>
                </li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>