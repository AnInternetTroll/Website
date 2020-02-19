<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/Website/include/php_stuff.php';?>
<!DOCTYPE html>
<html>

<head>

    <meta name="og:title" name="og:title" content="Luca's Website"/>
    <meta name="og:description" property="og:description" content="A website made by a bored kid.
    Why are you here?" />
    <meta name="og:locale" property="og:locale" content="en_GB" />
    <meta name="og:site_name" property="og:site_name" content="Home" />
    <meta name="og:image" property="og:image" content="/Website/media/dickbutt.png" />
    <meta name="article" property="article" content="/Website/home/article.md" />
    <meta name="og:url" content="/Website/home/" />
    <link rel="manifest" href="/Website/include/manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">


    <title>Home</title>

    <?php include $root . "/Website/include/includes.php";?>


    <style type="text/css">
    .article {
        position: static;
        line-height: 1.6;
        font-size: 15px;
    }
    </style>
    <?php include $root . "/Website/include/nav.php";?>
    <!-- End of Navbar -->
    <!-- Article -->
</head>
<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">



<?php include $root . "/Website/include/article.php";?>
                    <br />
<?php include $root . "/Website/include/comments_html.php"?>
                </div>
            </div>
        </div>
    <br />
    <script>

</script>

</body>

</html>