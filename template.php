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
    <?php include 'include/ip.php';?>
    <link rel="stylesheet" type="text/css" href="include/main.css">
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
                    <div class="wordy">
                        <br />
                        <?php 
                        $Parsedown->setSafeMode(false);

                        $myfile = fopen("article.md", "r");
                        $filestuff = fread($myfile,filesize("article.md"));
                        $content = $Parsedown->text($filestuff);
                        echo $content;
                        fclose($myfile);
                        ?>
                    </div>
                    <br />
                    <!--Comments-->
                    <hr>
                    <h1>Comments</h1>
                    <form action="" method="POST" class="form-group">
                        Name: <br><input type="text" name="name" class="form-control mb-2 mr-sm-2" placeholder="Your name, or someone elses, I don't care" required>
                        Comment: <br><textarea name="Comment" class="form-control mb-2 mr-sm-2" placeholder="Write something" required></textarea><br>
                        <!--<input type="submit" name="Post comment">-->
                        <button type="submit" name="Post comment" class="btn btn-outline-primary">Submit</button>
                    </form>
                    <hr>
                    <h2>Other comments</h2>
                    <?php
                    include "comments.php";
                    ?>
                    <br />
                </div>
            </div>
        </div>
    </div>
    <br />
</body>

</html>
