<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/Website/include/php_stuff.php';?>
<!DOCTYPE html>
<html>

<head>

    <meta property="og:description" content="Norsk leksa fra 2019" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="Luca" />
    <meta property="og:image" content="/Website/media/dickbutt.png" />
    <link rel="manifest" href="/Website/include/manifest.json">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Home</title>

    <?php include $root . "/Website/include/includes.php";?>
    <!-- -->

    <style type="text/css">
    li .kilder {
        background-color: #111111;
    }

    .article {
        position: static;
        line-height: 1.6;
        font-size: 15px;
    }
    </style>
<?php include $root . "/Website/include/nav.php";?>
    <!-- Article -->

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class='article'>
                    <?php include $root . "/Website/include/article.php";?>
                    <a href="luca.pdf">
                        <button type="button" class="btn btn-danger">
                            Download PDF
                        </button>
                    </a>
                    <a href="luca.docx">
                        <button type="button" class="btn btn-primary">
                            Download Word
                        </button>
                    </a>
                    <a href="luca.txt">
                        <button type="button" class="btn btn-success">
                            Download Text
                        </button>
                    </a>
                    <div class="kilder"></div>
                    <h4>Kilder:</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="https://www.wikipedia.org">Wikipedia</a></li>
                        <ul>
                            <li class="list-group-item"><a href="https://web.archive.org/web/20061002171452/http://www.norden.org/pub/uddannelse/sprog/sk/N2004009.pdf">Norden</a></li>
                            <li class="list-group-item"><a href="https://www.nb.no/items/URN:NBN:no-nb_digibok_2014051908200?page=15">Norsk Biblotek</a></li>
                            <li class="list-group-item"><a href="https://www.dokpro.uio.no/litteratur/moltkemoe/">Moltke Moe</a></li>
                        </ul>
                        <li class="list-group-item"><a href="https://snl.no">Stor Norske Leksikon</a></li>
                        <ul>
                            <li class="list-group-item"><a href="https://snl.no/dialekter_i_Norge">Dialekter</a></li>
                            <li class="list-group-item"><a href="https://snl.no/nynorsk">Nynorsk</a></li>
                            <li class="list-group-item"><a href="https://snl.no/spr%C3%A5k_i_Norge">Spraak</a></li>
                            <li class="list-group-item"><a href="https://snl.no/moderne_norsk">Modern Norsk</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>