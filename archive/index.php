<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include $root . "/Website/include/Parsedown.php";
$Parsedown = new Parsedown();
$Parsedown->setSafeMode(true);
//Commenting code
if ($_POST) {
    $name=htmlspecialchars($_POST['name']);
    $Comment=$Parsedown->text($_POST['Comment']);
    $handle=fopen("comments.php", "a+");
    fwrite($handle, '<div class="card text-white bg-dark mb-3"><div class="card-header">'.$name.'</div><div class="card-body"><p class="card-text">'.$Comment."</p></div></div><br />");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- -->
    <?php include '../include/ip.php';?>
    <link rel="stylesheet" type="text/css" href="../include/main.css">
    <style type="text/css">
    .article {
        position: static;
        line-height: 1.6;
        font-size: 15px;
    }
    </style>
    <?php include $root."/Website/include/nav.php"; ?>
    <!-- Article -->

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class='article'>
                    <br />
                    <div class="card-deck">
                        <div class="card text-white bg-dark mb-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Norwegian</h5>
                                <p class="card-text">Det er hvor alt som er norsk skal til</p>
                            </div>
                            <div class="card-footer text-muted"><small>Last updated: Never</small><br /><a href="#" class="btn btn-primary">Go somewhere</a></div>
                        </div>
                        <div class="card text-white bg-dark mb-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">English</h5>
                                <p class="card-text">This is where I have my English assigments</p>
                            </div>
                            <div class="card-footer text-muted"><small>Last updated: Never</small><br /><a href="#" class="btn btn-primary">Go somewhere</a></div>
                        </div>
                        <div class="card text-white bg-dark mb-3">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Science</h5>
                                <p class="card-text">Bunch of sciencey stiff. From anatomy to chemestry to physics, it's all here, if I can be bothered to upload.</p>
                            </div>
                            <div class="card-footer text-muted"><small>Last updated: Never</small><br /><a href="#" class="btn btn-primary">Go somewhere</a></div>
                        </div>
                    </div>
                    <!--Second row-->
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>