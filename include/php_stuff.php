    <?php
//Depricated for privacy reasons, not like you should even use this

/*
$file = $root."/Website/ipaddresses.txt"; //turns the text file into a variable
$f=fopen($file, 'a+'); //opens up the text file for reading and writing
fwrite($f,"\n--"."Date:".date("l jS \of F Y h:i:s A")."\nIP: ".$_SERVER['REMOTE_ADDR']."\nHOSTNAME: ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."\n"); //writes the IP address to ipaddresses.txt
fclose($f); //closes ipaddresses.txt for reading and writing
 */

//Help with php include

//Markdown support
require_once  $root . "/Website/include/jbbcode/Parser.php";
include $root . "/Website/include/Parsedown.php";

$Parsedown = new Parsedown();
$Parsedown->setSafeMode(true);

$parser = new JBBCode\Parser();
$parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());

$builder = new JBBCode\CodeDefinitionBuilder('center', '<div style="text-align: center;">{param}</div>');
$parser->addCodeDefinition($builder->build());

$Comment = htmlspecialchars($_POST['Comment']);

//Save comments to a file
if ($_POST) {
    //Get the name and comment and clear them of anything unsafe. Names don't get markdown support because I don't want headings in there
    $name    = htmlspecialchars($_POST['name']);
    if ($_POST['phraser'] == "BBCode"){
        $parser->parse($Comment);
        include $root . "/Website/include/discord_comments.php";
        $Comment = $parser->getAsHtml();
    } elseif ($_POST['phraser'] == "Markdown") {
        include $root . "/Website/include/discord_comments.php";
        $Comment = $Parsedown->text($Comment);
    } else {
        $Comment = htmlspecialchars($Comment);
        include $root . "/Website/include/discord_comments.php";
    }
    // Save the contents of the file before writing
    $handle   = fopen("comments.php", "r");
    $contents = fread($handle, filesize("comments.php"));
    fclose($handle);
    // Write stuff, then add the previous stuff at the end
    $handle = fopen("comments.php", "w");
    fwrite($handle, '
    <div class="cardyly">
    <h5 class="card-header">' . $name . '</h5>
        <div class="card-body">
        <p class="card-text">' . $Comment . '</p>
        </div>
        </div>
        <br />
        ' . $contents);
        fclose($handle);
}

?>