<style>
    .blogimg {
        width: 70%;
        height: 250px;
        margin-bottom: 30px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <div class="container">
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