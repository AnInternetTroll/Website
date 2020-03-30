<?php// basic 404 error pageheader('HTTP/1.1 404 Not Found');header('Status: 404 Not Found');?>

<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/include/php_stuff.php';?>
<!DOCTYPE html>
<html>

<head>

    <meta name="og:title" name="og:title" content="404 error, website not found"/>
    <meta name="og:description" property="og:description" content="How did you get here?" />
    <meta name="og:locale" property="og:locale" content="en_GB" />
    <meta name="og:site_name" property="og:site_name" content="Luca's Website" />
    <meta name="og:image" property="og:image" content="/media/dickbutt.png" />
    <meta name="og:url" content="/404.php" />
    <link rel="manifest" href="/include/manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Home</title>

    <?php include $root . "/include/includes.php";?>
    <?php include $root . "/include/nav.php";?>

</head>
<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<br />
            	<h1>404 Error, website not found</h1>
            	<p>Please check the URL and try again</p>
                </div>
            </div>
        </div>
    <br />
</body>
</html>
