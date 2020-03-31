<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/include/php_stuff.php'; ?>
<!DOCTYPE html>
<html>

<head>

    <title>Home</title>
    <?php include $root . "/include/includes.php"; ?>
    <style type="text/css">
        .article {
            position: static;
            line-height: 1.6;
            font-size: 15px;
        }
    </style>
    <?php include $root . "/include/nav.php"; ?>
    <!-- Article -->

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class='article'>
                    <br />
                    <div class="card-deck">
                        <div class="card mb-3">
                            <img src="flagg.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Norwegian</h5>
                                <p class="card-text">Det er hvor alt som er norsk skal til</p>
                            </div>
                            <div class="card-footer text-muted"><small>Last updated: Never</small><br /><a href="Norsk/" class="btn btn-primary">Go somewhere</a></div>
                        </div>
                        <div class="card mb-3">
                            <img src="code.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Programming</h5>
                                <p class="card-text">This is where I have my programming assigments</p>
                            </div>
                            <div class="card-footer text-muted"><small>Last updated: Never</small><br /><a href="/archive/programming/" class="btn btn-primary">Go somewhere</a></div>
                        </div>
                    </div>
                    <!--Second row-->
<?php
$page = "home";
$currentDir = scandir($root . "/archive/");
require $root."/include/archive_home.php";
?>
                </div>
            </div>
        </div>
    </div>
    <br />
</body>

</html>
