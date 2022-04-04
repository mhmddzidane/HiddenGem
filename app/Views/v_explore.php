<style>
    .explore-gallery {
        transition: transform .2s;
        cursor: pointer;
        border-radius: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .explore-gallery:hover {
        transform: scale(1.4);
    }

    .modal-content {
        width: 700px;

    }

    .container h1 {
        text-align: center;
        font-weight: 500;
    }
</style>

<body>
    <div class="container ">
        <h1 class="mt-5">Explore Places</h1>

        <div class="row">
            <?php foreach ($explore_post as $key => $value) { ?>
                <div class="col-lg-4">
                    <img data-bs-toggle="modal" data-bs-target="#exampleModal<?= $value['id_postingan'] ?>" class="mt-3 explore-gallery" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" width="300px" height="300px" alt="" />
                </div>
            <?php } ?>
        </div>


    </div>

    <!-- Modal -->
    <?php foreach ($explore_post as $key => $value) { ?>
        <div class="modal fade" id="exampleModal<?= $value['id_postingan']; ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img class="ms-3" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" width="300px" height="500px" alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <h5><a href="<?= base_url('explore') ?>" style="text-decoration: none; color:black"><?= $value['nama_user']; ?></a></h5>
                                    <hr>
                                    <h5><?= $value['judul_post']; ?></h5>
                                    <p><?= $value['desc_post']; ?></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    <?php } ?>

    </div>

</body>