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
include $root . "/Website/include/Parsedown.php";
$Parsedown = new Parsedown();
$Parsedown->setSafeMode(true);

//Save comments to a file
if ($_POST) {
    //Get the name and comment and clear them of anything unsafe. Names don't get markdown support because I don't want headings in there
    $name    = htmlspecialchars($_POST['name']);
    $Comment = $Parsedown->text($_POST['Comment']);
    // Save the contents of the file before writing
    $handle   = fopen("comments.php", "r");
    $contents = fread($handle, filesize("comments.php"));
    fclose($handle);
    // Write stuff, then add the previous stuff at the end
    $handle = fopen("comments.php", "w");
    fwrite($handle, '
        <div class="cardyly">
            <h5 class="card-title">' . $name . '</h5>
            <hr>
                <p class="card-text">' . $Comment . '</p>
            </div>
        </div>
            <br />
            ' . $contents);
    fclose($handle);
}

?>