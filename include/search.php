<?php $root = $_SERVER['DOCUMENT_ROOT'];
include $root . '/Website/include/php_stuff.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <?php include $root."/Website/include/includes.php"; ?>

    <!-- -->
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
/*
// Assuming the above tags are at www.example.com
$tags = get_meta_tags('http://www.example.com/');

// Notice how the keys are all lowercase now, and
// how . was replaced by _ in the key.
echo $tags['author'];       // name
echo $tags['keywords'];     // php documentation
echo $tags['description'];  // a php manual
echo $tags['geo_position']; // 49.33;-86.59
 */

function get_title($url)
{
    $str = file_get_contents($url);
    if (strlen($str) > 0) {
        $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
        preg_match("/\<title\>(.*)\<\/title\>/i", $str, $title); // ignore case
        return $title[1];
    }
}

//Database of links
$links = array('../archive/Norsk/index.php',
    $root . '/Website/archive/Science/index.php',
    '../home/index.php');


foreach ($links as $key) {
    //Get what the user searches for
    $search = $_POST['findMe'];
    //get meta tags names
    $tagsLink= get_meta_tags($root.'/Website/home/index.php');
    //link to article.md
    $article = $tagsLink['article'];
    //Tags for name, url and description
    $title = $tagsLink['og:site_name'];
    $linkToThing = $tagsLink['og:url'];
    $description = $tagsLink['og:description'];
    //if article.md has what the user is searching for then give back the resault
    if (stripos(file_get_contents($article), $search) !== false) {
        echo '<h2><a href="' . $linkToThing . '">' . $title . '</a></h2><br />';
    } else {echo "Nothing";}
}


?>


                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>
