<style>
    .explore-gallery {
        transition: transform .2s;
        cursor: pointer;
        border-radius: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 500px;
        height: 250px;
    }

    .explore-gallery:hover {
        transform: scale(1.1);
    }

    .modal-content {
        width: 700px;
    }

    body {
        background: linear-gradient(180deg, rgba(0, 197, 151, 0.5) 0%, rgba(252, 252, 212, 0.235) 62.5%, rgba(249, 249, 249, 0.5) 97.92%);
    }

    .container h1 {
        text-align: center;
        font-weight: 500;
        color: white;
    }

    .imgModal {
        width: 350px;
        height: 400px;
    }

    @media only screen and (max-width: 600px) {
        .modal-content {
            width: 100%;
        }

        .imgModal {
            width: 100%;
            height: 200px;
        }
    }
</style>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-lg-3">
                <h3 class="mt-5" style="color: white;">Explore Places</h3>
            </div>
            <div class="col-lg-9">
                <form action="" method="post">
                    <div class="input-group mb-2 mt-5">
                        <input type="text" class="form-control" name="keyword" placeholder="Search Places (Ex : Hutan)">
                        <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="row">
            <?php

            use Kint\Zval\Value;

            foreach ($explore_post as $key => $value) { ?>
                <div class="col-lg-4">
                    <img data-bs-toggle="modal" data-bs-target="#exampleModal<?= $value['id_postingan'] ?>" class="mt-3 mb-5 explore-gallery" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" />
                </div>
            <?php } ?>
        </div>


    </div>

    <!-- Modal -->
    <?php foreach ($explore_post as $key => $value) { ?>
        <div class="modal fade" id="exampleModal<?= $value['id_postingan']; ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="imgModal" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <h5><a href="<?= base_url('explore') ?>" style="text-decoration: none; color:black"><?= $value['nama_user']; ?></a></h5>
                                <hr>
                                <h5 style="font-weight: 600;"><?= $value['judul_post']; ?></h5>
                                <p style="overflow-y: scroll; height:300px"><?= $value['desc_post']; ?></p>
                                <p style="color: darkgreen;">Range Harga : <?= $value['range_harga']; ?></p>
                            </div>
                            <iframe src="<?= $value['maps'] ?>" width="300" height="350" style="border;" class="mt-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
    <?php } ?>

    </div>

</body>

<!-- buku tamu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header" style="background-color: #00c597;">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: white;">Buku Tamu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php echo form_open_multipart('home/bukutamu') ?>
        <div class="form-group mt-4">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama_tamu" placeholder="Masukan Nama" required>
        </div>
        <div class="form-group mt-4">
            <label>NIM (Kosongkan jika bukan mahasiswa)</label>
            <input type="text" class="form-control" name="nim_tamu" placeholder="Masukan NIM">
        </div>
        <div class="form-group mt-4">
            <label>Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="pesan_tamu" rows="3" required></textarea>
        </div>
        <button class="btn btn-success mt-4">Submit</button>
        <?php echo form_close() ?>


        <h5 class="mt-4">Daftar Tamu</h5>
        <div style="overflow-x: scroll;">
            <table class="table table-striped" style="overflow-x: scroll; ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col" class="pesan">Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($tamu as $key => $value) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $value['nama_tamu']; ?></td>
                            <td><?= $value['nim_tamu']; ?></td>
                            <td class="isipesan"><?= $value['pesan_tamu']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>