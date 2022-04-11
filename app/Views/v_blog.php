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