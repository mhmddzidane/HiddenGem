<div class="container">
    <h3 class="mt-5 mb-3">Upload Post</h3>
    <div class="row">
        <div class="col-lg-4">
            <img class="animate__animated animate__slideInUp" src=<?= base_url('images/upload.svg') ?> alt="upload">
        </div>

        <div class="col-lg-8">
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
                <label>Link Maps <a href="<?= base_url('explore') ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"><span style=" color: #00c597;">Bagaimana cara menambahkan link?</span></a></label>
                <input type="text" class="form-control" name="maps_post" placeholder="Masukan Link Maps" required>
            </div>
            <button type="submit" class="btn btn-success">Post</button>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cara menambahkan maps</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>1. Buka google maps</li>
                    <li>2. Cari tempat yang ditambahkan</li>
                    <img src="images/maps1.png" width="300px" alt="" srcset="">
                    <li>3. Klik bagikan kemudian pilih sematkan peta</li>
                    <img src="images/maps2.png" width="250px" alt="" srcset="">
                    <li>4. Klik salin HTML, dan paste kan kedalam kolom link maps</li>
                    <li>5. Sisakan link src dari link HTML tersebut</li>
                    <li>6. Dari seperti ini :</li>
                    <img src="images/maps3.png" width="1000px" alt="" srcset="">
                    <li>7. Menjadi seperti ini :</li>
                    <img src="images/maps4.png" width="1000px" alt="" srcset="">
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>