<br />
<?php
$Parsedown->setSafeMode(false);

$myfile   = fopen("article.md", "r");
$filestuff = fread($myfile, filesize("article.md"));
$content   = $Parsedown->text($filestuff);
echo $content;
fclose($myfile);
?>
