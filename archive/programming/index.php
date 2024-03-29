<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/include/php_stuff.php'; ?>
<!DOCTYPE html>
<html>

<head>

    <meta name="og:title" name="og:title" content="Turtle" />
    <meta name="og:description" property="og:description" content="Homework or passion project 🤔" />
    <meta name="og:locale" property="og:locale" content="en_GB" />
    <meta name="og:site_name" property="og:site_name" content="Luca's website" />
    <meta name="og:image" property="og:image" content="/media/turtle.jfif" />
    <meta name="article" property="article" content="/home/article.md" />
    <meta name="og:url" content="/home/" />
    <link rel="manifest" href="/include/manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">


    <title>Scratch</title>

    <?php include $root . "/include/includes.php"; ?>
    <?php include $root . "/include/nav.php"; ?>
    <!-- End of Navbar -->
    <!-- Article -->
</head>

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">



                <?php include $root . "/include/article.php"; ?>
                <a href="turtle.sb2">
                <button class="btn btn-primary">
                Turtle for scratch 2.0
                </button>
                </a>
                <a href="turtle.sb3">
                <button class="btn btn-secondary">
                Turtle for scratch 3.0
                </button>
                </a>
                <br /><br />
                <iframe src="https://scratch.mit.edu/projects/370387670/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="yes" allowfullscreen></iframe>
                <br />
                <?php include $root . "/include/comments_html.php" ?>
            </div>
        </div>
    </div>
    <br />
    <script>

    </script>

</body>

</html>
