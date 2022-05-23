<body>
    <div class="container">
        <h3>Explore Indonesia</h3>
        <?php

        use function PHPSTORM_META\elementType;

        require_once(__DIR__ . '\simple_html_dom.php');

        $html = file_get_html('https://www.traveloka.com/en-id/explore');

        foreach ($html->find('<div>') as $element) {
            if (strpos($element->class, 'css-1dbjc4n r-xyw6el r-1j6l8hp') !== false) { ?>
                <div class="BlogImg">

                    <?= $element; ?>


                </div>
            <?php }
            ?>

        <?php
        } ?>

        <h3>Artikel Wisata Terkini</h3>
        <?php

        require_once(__DIR__ . '\simple_html_dom.php');

        $html = file_get_html('https://www.pegipegi.com/travel/category/destinasi/');

        foreach ($html->find('<div>') as $element) {
            if (strpos($element->id, 'archive-list-wrap') !== false) { ?>
                <div class="BlogImgs">

                    <?= $element; ?>


                </div>
            <?php }
            ?>

        <?php
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

<style>
    .BlogImg {
        width: 200px;
        margin-top: -200px;
        display: inline-block;
        transition: transform 0.2s;
    }

    .BlogImg:hover {
        transform: scale(1.2);
    }

    .container {
        text-align: center;
    }

    .container h3 {
        text-align: center;
        margin-bottom: 50px;
        margin-top: 50px;
        font-weight: 500;
        color: darkcyan;
    }

    /* pegipegi */
    .feat-info-wrap {
        display: none;
    }

    h2 {
        color: black;
        font-size: 20px;
        margin-top: 10px;
    }

    h2:hover {
        color: #00c597;
    }

    .archive-list-in p {
        color: gray;
        text-align: center;
    }

    .infinite-post {
        margin-bottom: 50px;
        display: inline-block;
    }

    .archive-list-img {
        width: 100%;
        transition: transform .2s;
    }

    .archive-list-img:hover {
        transform: scale(1.1);
    }

    .mob-img {
        display: none;
    }
</style>