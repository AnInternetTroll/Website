<?php
include $root . "/Website/include/table-of-contents.php";
$Parsedown->setSafeMode(false);

$myfile    = fopen("article.md", "r");
$filestuff = fread($myfile, filesize("article.md"));
$content   = $Parsedown->text($filestuff);
$toc = new PHPTableOfContents($content);
//echo "<h1 id='toc'>Table of content</h1>";
//echo $toc->list();
echo $toc->html();
fclose($myfile);

$myfile    = fopen("article_no.md", "r");
$filestuff = fread($myfile, filesize("article_no.md"));
$content   = $Parsedown->text($filestuff);
$toc = new PHPTableOfContents($content);
//echo "<h1 id='toc'>Table of content</h1>";
//echo $toc->list();
echo $toc->html();
fclose($myfile);
