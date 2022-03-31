<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hidden Gem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-3">
                        <a class="nav-link active" href="<?= base_url('home') ?>" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="<?= base_url('feed') ?>">Feed</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="<?= base_url('explore') ?>">Explore</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>