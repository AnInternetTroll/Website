<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/Website/include/php_stuff.php';?>
<!DOCTYPE html>
<html>

<head>

    <meta property="og:description" content="A website made by a bored kid.
    Why are you here?" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="Luca" />
    <meta property="og:image" content="/Website/media/dickbutt.png" /> 
    <link rel="manifest" href="/Website/include/manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">


    <title>Home</title>

    <?php include $root . "/Website/include/includes.php";?>
    <!-- -->


    <style type="text/css">
    .article {
        position: static;
        line-height: 1.6;
        font-size: 15px;
    }
    </style>
    <!-- Navbar -->
    <?php include $root . "/Website/include/nav.php";?>
    <!-- End of Navbar -->
    <!-- Article -->

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
<?php include $root."/Website/include/article.php"; ?>
                    <br />
<?php include $root."/Website/include/comments.php" ?>
                </div>
            </div>
        </div>
    <br />
</body>

</html>