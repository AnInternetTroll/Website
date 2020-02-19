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
    <title>Naturfag</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="og:title" content="Luca's Website"/>
    <meta name="og:description" property="og:description" content="Naturfag homework on the subject of Karbonsyrer." />
    <meta name="og:locale" property="og:locale" content="en_GB" />
    <meta name="og:site_name" property="og:site_name" content="Science" />
    <meta name="og:image" property="og:image" content="/Website/media/dickbutt.png" />
    <meta name="article" property="article" content="/Website/archive/Science/article.md" />
    <meta name="og:url" content="/Website/archive/Science/" />

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- -->
    <?php include '../../include/ip.php';?>
    <link rel="stylesheet" type="text/css" href="../../include/main.css">
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
                    <p>
                        <h2> Hvordan dannes olje og gass?</h2>
                    </p>
                    <p>
                        For lenge siden organiske materialer ble knust dypt ned i jorda og sto
                        liggene der til vi oppfant den igjen i olje form.
                    </p>
                    <a href="sim.gif">
                    <img src="sim.gif" alt='simulation' width="50%" height="50%">
                    </a>
                    <p>
                        <h2> Hvordan foreg&#229;r destinasjon av r&#229;olje?</h2>
                    </p>
                    <p>
                        Det varmes opp til de stoffene blir filtrert og etterp&#229; oljen g&#229;r
                        opp t&#229;rnet og gj&#248;r det samme til alle stoffene ble filtrert ut.
                        <img src="oil.JPG" alt='drawing' width="50%" height="50%">
                    </p>
                    <p>
                        <h2> Hvordan lage man plast?</h2>
                    </p>
                    <p>
                        Plast blir laget av eten molekyler som blir binded sammen med en spesielt
                        m&#229;te &#175;\_(&#12484;)_/&#175;
                    </p>
                    <a href="chem.gif">
                    <img src="chem.gif" alt='simulationwithchems' height="25%" width="25%">
                    </a>
                    <p>
                        <h2> Hva er forskjellen p&#229; herdeplast og termoplast?</h2>
                    </p>
                    <p>
                        Det er at termoplast er myk og fleksibil og brenner i kontakt med flammer,
                        mens herdeplast er hardt og blir svart i kontakt med flammer.
                    </p>
                    <p>
                        <h2> Hvordan kan man p&#229;vise PVC plast?</h2>
                    </p>
                    <p>
                        Varm opp en bit av kobber, rist den p&#229; plastbit og sett kobberet
                        p&#229; flammen igjen. Hvis flammen er gr&#248;nn da er plasten PVC. Som I
                        dette video:
                    </p>
                    <video width="50%" height="50%" alt="videofromclassroom">
                        <source src="movie.mp4" type="video/mp4">
                        Your browser doesn't support mp4s
                    </video>
                    <p>
                        <h2> Hva er et vannkraftverk og hvordan blir det til str&#248;m?</h2>
                    </p>
                    <p>
                        Et vannkraftverk som p&#229; R&#229;n&#229;sfoss bruker vannes kraft til
                        &#229; lage str&#248;m. En turbin st&#229;r og snur i vannet og en
                        generator lager elektrisitet av det bevegelse med hjelp av magneter.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>