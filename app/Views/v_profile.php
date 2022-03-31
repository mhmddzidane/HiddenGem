</style>
<div class="container">
    <h1>Profile</h1>
    <h1>New Post</h1>
    <?php echo form_open_multipart('profile/tambah_post') ?>
    <div class="form-group">
        <label>Judul Post</label>
        <input type="text" class="form-control" name="judul_post" placeholder="Masukan Judul Post" required>
    </div>
    <div class="form-group">
        <label>Foto Post</label>
        <input type="file" class="form-control" name="foto_post" required>
    </div>
    <div class="form-group">
        <label>Deskripsi Post</label>
        <input type="text" class="form-control" name="desc_post" placeholder="Masukan Deskripsi Post" required>
    </div>
    <button type="submit" class="btn btn-success">Post</button>
    <?php echo form_close() ?>
</div>