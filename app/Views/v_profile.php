<div class="container">
    <h1 class="mt-5">Profile</h1>
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
                <input type="text" class="form-control" value="<?= $user['password']; ?>" name="password" placeholder="Masukan Password Baru" required>
            </div>
        </div>
        <button type="submit" class="btn button-default-outline-2 rounded-3 mt-5 col-4 mx-auto">Save</button>
    </div>
    <?php echo form_close() ?>
</div>