<div class="head-container">
    <div class="head-row">
        <div class="nav-logo">
            <a href="home" style="text-decoration: none; color:#fcfcd4">HIDDEN <span>GEM</span></a>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="<?= base_url('Feed') ?>">Feed</a></li>
                <li><a href="<?= base_url('explore') ?>">Explore</a></li>
                <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Profile<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-success nl">
                        <li><a class="dropdown-item" href="<?= base_url('profile') ?>">Show Profile</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('login/logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>