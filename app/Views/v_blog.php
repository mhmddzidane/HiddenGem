<style>
    .blogimg {
        width: 70%;
        height: 250px;
        margin-bottom: 30px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .container h2 {
        text-align: center;
        margin-bottom: 50px;
        margin-top: 50px;
        font-weight: 500;
        color: darkcyan;
    }
</style>

<body>
    <div class="container">
        <h2>Artikel Wisata Terkini</h2>
        <?php

        use function PHPSTORM_META\elementType;

        require_once(__DIR__ . "../../../public/scrapper/simple_html_dom.php");

        $html = file_get_html('https://www.tokopedia.com/blog/travel-surga-dunia-indonesia-yang-jarang-diketahui/');

        foreach ($html->find('img') as $element) {
            if (str_contains($element->src, 'wisata')) { ?>
                <img src=<?= $element->src ?> alt="" class="blogimg mt-2" srcset="">
                <!-- <?php foreach ($html->find('h3') as $teks) { ?>
                    <h3><?php echo $teks ?></h3>
                <?php } ?> -->
        <?php  }
        } ?>
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