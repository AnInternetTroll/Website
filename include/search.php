<?php

$norsk = file_get_contents('http://37.200.47.164/norsk/');//IMAGINE THIS IS REALLY HOME.PHP
$memes = file_get_contents('http://37.200.47.164/memes/');
$norskurl = "http://37.200.47.164/norsk/";
$memesurl = "http://37.200.47.164/memes/";//JUST HERE TO SHOW AN EXAMPLE

function get_title($url){
  $str = file_get_contents($url);
  if(strlen($str)>0){
    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
    return $title[1];
  }
}



$search = $_POST['findMe'];
//$search = "example";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM


//IF WORD FOUND IN HOME PAGE
if (stripos($norsk, $search) !== false) {//USING EXAMPLE.COM TO SHOW IT WORKS
    echo '<h2><a href="'.$norskurl.'">'.get_title($norskurl).'</a></h2>';
}

function get_title($url){
  $str = file_get_contents($url);
  if(strlen($str)>0){
    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
    return $title[1];
  }
}

if (stripos($memes, $search) !== false) {//USING EXAMPLE.COM TO SHOW IT WORKS
    echo '<h2><a href="'.$memesurl.'">'.get_title($memesurl).'</a></h2>';
}

?>
