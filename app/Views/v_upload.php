<div class="container">
    <h3 class="mt-5 mb-3">Upload Post</h3>
    <?php echo form_open_multipart('upload/tambah_post') ?>
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
    <div class="form-group">
        <label>Range Harga</label>
        <input type="text" class="form-control" name="range_post" placeholder="Masukan Range Harga Tempat" required>
    </div>
    <div class="form-group">
        <label>Link Maps</label>
        <input type="text" class="form-control" name="maps_post" placeholder="Masukan Link Maps" required>
    </div>
    <button type="submit" class="btn btn-success">Post</button>
    <?php echo form_close() ?>
</div>