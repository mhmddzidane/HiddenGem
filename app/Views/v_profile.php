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

    .konten {
        width: 700px;
    }


    .imgModal {
        width: 350px;
        height: 400px;
    }

    @media only screen and (max-width: 600px) {
        .konten {
            width: 100%;
        }

        .imgModal {
            width: 100%;
            height: 200px;
        }
    }
</style>

<div class="container">
    <h3 class="mt-5 mb-3">Profile</h3>
    <div class="row">
        <div class="col-lg-5">
            <img class="animate__animated animate__jackInTheBox" src="images/profile.svg" alt="profile">
        </div>
        <div class="col-lg-7">
            <?php echo form_open_multipart('profile/edit_profile') ?>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" value="<?= $user['nama_user']; ?>" name="name" placeholder="Masukan Nama Baru" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" value="<?= $user['email']; ?>" name="email" placeholder="Masukan Email Baru" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password Baru" required>
            </div>

            <button type="submit" class="btn button-default-outline-2 rounded-3 mt-5 col-4 mx-auto">Save</button>
            <?php echo form_close() ?>
        </div>
    </div>

    <div>
        <h3 style="text-align: center;" class="mt-5">Your Post</h3>
        <div class="row">
            <?php

            use Kint\Zval\Value;

            foreach ($tampil_post as $key => $value) { ?>
                <div class="col-lg-4">
                    <img data-bs-toggle="modal" data-bs-target="#exampleModal<?= $value['id_postingan'] ?>" class="mt-3 mb-5 explore-gallery" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" />
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Modal -->
    <?php foreach ($tampil_post as $key => $value) { ?>
        <div class="modal fade" id="exampleModal<?= $value['id_postingan']; ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content konten">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div style="float : right">

                            <h5 class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $value['id_postingan'] ?>">Edit</h5>
                            <h5 class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $value['id_postingan'] ?>">Delete</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="imgModal" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <!--  -->
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

<!-- deleteModal -->
<?php foreach ($tampil_post as $key => $value) { ?>
    <div class="modal fade" id="deleteModal<?= $value['id_postingan'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h5 class="modal-title text-light" id="deleteModalLabel">Delete Post?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-light">
                    Apakah anda yakin untuk menghapus <?= $value['judul_post'] ?>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-light" href="<?= base_url('profile/delete_post/' . $value['id_postingan']) ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- editmodal -->
<?php foreach ($tampil_post as $key => $value) { ?>
    <div class="modal fade" id="editModal<?= $value['id_postingan'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <?php echo form_open_multipart('profile/edit_post/' . $value['id_postingan']) ?>
                    <div class="row">
                        <div class="col-sm-5">
                            <label for="">Foto Post</label>
                            <img src="<?= base_url('foto_post/' . $value['foto_post']) ?>" width="500px" alt="" srcset="">
                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Ganti Foto</label>
                                <input class="form-control" name="foto_edit" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Judul Post</label>
                        <input class="form-control" value="<?= $value['judul_post']; ?>" name="judul_post" placeholder="Masukan Judul Post" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Post</label>
                        <input class="form-control" value="<?= $value['desc_post']; ?>" name="desc_post" placeholder="Masukan Deskripsi Post" required>
                    </div>
                    <div class="form-group">
                        <label>Range Harga</label>
                        <input class="form-control" value="<?= $value['range_harga']; ?>" name="range_harga" placeholder="Masukan Range Harga" required>
                    </div>
                    <div class="form-group">
                        <label>Maps</label>
                        <input class="form-control" value="<?= $value['maps']; ?>" name="maps" placeholder="Masukan Maps" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    </div>
<?php } ?>

<!-- buku tamu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header" style="background-color: #00c597;">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: white;">Buku Tamu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php echo form_open_multipart('Home/bukutamu') ?>
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