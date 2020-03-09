<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/Website/include/php_stuff.php'; ?>
<!DOCTYPE html>
<html>

<head>

    <meta name="og:title" name="og:title" content="Luca's Website" />
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

    <?php include $root . "/Website/include/includes.php"; ?>
    <?php include $root . "/Website/include/nav.php"; ?>
    <?php
    include $root . "/Website/include/table-of-contents.php";
    $Parsedown->setSafeMode(false);    
    ?>

</head>

    <script>
        function englishShow() {
                $("#norsk").hide();
                $("#english").show();
            }
        function norskShow(){
            $("#english").hide();
            $("#norsk").show();
        }

        $(document).ready(function(){
            $("#norsk").hide();
});
    </script>
<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="background-image:url(https://raw.githubusercontent.com/Tara-T/tara-t.github.io/master/christmas/tree.png); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <br />
                <div id="norsk">
                    <?php
                    $myfile    = fopen("article_no.md", "r");
                    $filestuff = fread($myfile, filesize("article_no.md"));
                    $content   = $Parsedown->text($filestuff);
                    $toc = new PHPTableOfContents($content);
                    //echo "<h1 id='toc'>Table of content</h1>";
                    //echo $toc->list();
                    echo $toc->html();
                    fclose($myfile);
                    ?>
                </div>
                <div id="english">
                    <?php
                    $myfile    = fopen("article.md", "r");
                    $filestuff = fread($myfile, filesize("article.md"));
                    $content   = $Parsedown->text($filestuff);
                    $toc = new PHPTableOfContents($content);
                    //echo "<h1 id='toc'>Table of content</h1>";
                    //echo $toc->list();
                    echo $toc->html();
                    fclose($myfile);
                    ?>
                    </div>
                <button type="button" class="btn btn-primary" onclick="norskShow()">Norsk</button>
                <button type="button" class="btn btn-secondary" onclick="englishShow()">English</button>
                <br />
                <?php include $root . "/Website/include/comments_html.php" ?>
            </div>
        </div>
    </div>
    <br />
</body>

</html>