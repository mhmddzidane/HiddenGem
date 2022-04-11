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

    .imgModal {
        width: 350px;
        height: 400px;
    }
</style>

<div class="container">
    <h3 class="mt-5 mb-3">Profile</h3>
    <?php echo form_open_multipart('profile/edit_profile') ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" name="foto" type="file" required>
            </div>
        </div>
        <div class="col-lg-6">
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
                <input type="text" class="form-control" name="password" placeholder="Masukan Password Baru" required>
            </div>
        </div>
        <button type="submit" class="btn button-default-outline-2 rounded-3 mt-5 col-4 mx-auto">Save</button>
    </div>
    <?php echo form_close() ?>

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
                <div class="modal-content">
                    <div class="modal-body">
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