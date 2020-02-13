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


    </style>
<?php include "nav.php"?>
    <!-- Article -->

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class='article'>
                    <br />
                    <?php
                    <?php
// Assuming the above tags are at www.example.com
$tags = get_meta_tags('http://www.example.com/');

// Notice how the keys are all lowercase now, and
// how . was replaced by _ in the key.
echo $tags['author'];       // name
echo $tags['keywords'];     // php documentation
echo $tags['description'];  // a php manual
echo $tags['geo_position']; // 49.33;-86.59
?>


function get_title($url)
{
    $str = file_get_contents($url);
    if (strlen($str) > 0) {
        $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
        preg_match("/\<title\>(.*)\<\/title\>/i", $str, $title); // ignore case
        return $title[1];
    }
}

$links = array('../archive/Norsk/index.php', '../archive/Science/index.php', '../home/index.php');

function resaults($urls)
{
    foreach ($urls as $key) {
        $search = $_POST['findMe'];
        if (stripos(file_get_contents($key), $search) !== false) {
//USING EXAMPLE.COM TO SHOW IT WORKS
            echo '<h2><a href="' . $key . '">' . get_title($key) . '</a></h2><br />';
        }
    }
}
resaults($links);
?>


                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>
