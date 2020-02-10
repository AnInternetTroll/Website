<!-- Comments -->
<?php
include "include/Parsedown.php";
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
    <title>Languages, am I right?</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- -->
<?php include '../../include/ip.php';?>
  <link rel="stylesheet" type="text/css" href="../../include/main.css">
    <style type="text/css">
    li .kilder {
        background-color: #111111;
    }

    .article {
        position: static;
        line-height: 1.6;
        font-size: 15px;
    }
    </style>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg navbar-dark bg-primary sticky-top'>
        <a class='navbar-brand' href='#'>
            <img src='../../media/Dickbutt steve.png' width='40' height='57' class='d-inline-block align-top' alt=''>
        </a>
        <a class='navbar-brand' href='#'>Luca's website</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='../../index.php'>Home <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../../about/index.php'>About me</a>
                </li>
                <li class='nav-item dropdown active'>
                    <a class='nav-link dropdown-toggle ' href='../archive/index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Archive
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a class='dropdown-item ' href='../../archive/index.php'>Archive home</a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item active' href='../../archive/Norsk/'>Norsk</a>
                        <a class='dropdown-item' href='../../archive/English/'>English</a>
                        <a class='dropdown-item' href='../../archive/science/'>Science</a>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Secret</a>
                </li>
            </ul>
            <form class='form-inline my-2 my-lg-0' action='../include/search.php' method='post'>
                <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='findMe' placeholder="Broken :(">
                <button class='btn btn-success' type='submit'>Search</button>
            </form>
        </div>
    </nav>
    <!-- End of Navbar -->
    <!-- Article -->

<body>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class='article'>
                    <br />
                    <h1>Norsk og hvordan vi kom til dagens spr&aring;k.<span class="Apple-converted-space">&nbsp;</h1>
                    <p>Har du lurt &laquo;Hvorfor bruker vi Latinsk?&raquo; eller &laquo;Hvorfor har vi s&aring; mange dialekter?&raquo; eller &laquo;Hvorfor 2 spr&aring;k som h&oslash;res egentlig likt?&raquo;? Det er hva jeg kommer til &aring; pr&oslash;ve &aring; svare p&aring;.<span class="Apple-converted-space">&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>
                        <h3>Vikinger</h3>
                    </p>
                    <p>I den gamle tida bodde vikingene i Norge, og de vikingene snakket et spr&aring;k som er mer likt enn Islandsk enn den er Norsk. De ogs&aring; skrev med runner. Men n&aring;r konge Hakon kom tilbake fra England og krisrtningensert Norge. Kristendom som et religion kom en stor del fra Roma, i Italia. I Italia brukte de den latinske alfabet, og derfor var bibelen ogs&aring; p&aring; latinsk. Derfor var religion bygd opp p&aring; latinsk. Det skjedd i helle Europa, bortsett fra &oslash;st Europa hvor de startet sin egen religion som het &laquo;katolsk kristendom&raquo;. Og derfor bruker norsk den latinske alfabet.<span class="Apple-converted-space">&nbsp;</span></p>
                    <p>&nbsp;</p>
                    <p>
                        <h3>Danmark-Norge</h3>
                    </p>
                    <p>Men hvorfor skrives Norsk s&aring; likt som tysk? Det er p&aring; grunn av Danmark.<span class="Apple-converted-space">&nbsp;</span></p>
                    <p>Danmark og Norge alliert i et land. Den het Norge-Danmark union. Kjedelig navn p&aring; side, det hjelper Norge til &aring; vokse opp, til &aring; forberede fra et Vikingland til en europeisk ting. Men det vi bryr oss om, er at spr&aring;ket forandret. Mens Norge var i union med Danmark adoptert Nordmenn den danske skriftlig spr&aring;k. Danmark var mye n&aelig;rmere enn Tyskland og de bare plukket opp tysk ord og skrift i daglig livet, som Nordmenn gj&oslash;r i dag med engelsk.<span class="Apple-converted-space">&nbsp;</span></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>
                        <h3>England er min city</h3>
                    </p>
                    <p>En fenomen som skjer med mange spr&aring;k er et folk bare plukker opp ord fra andre spr&aring;k. Dette skjer mye mer i dag med sosial medier. Engelsk er den uoffisiell International spr&aring;ket. Mange folk l&aelig;re det p&aring; skole som en andre spr&aring;k og de forsetter &aring; bruke det p&aring; Internet for &aring; sosialisere med andre folk. Ord fra engelsk som brukes i daglig livet er for eksempel Memes, fucking (litt alt for mye), hore, mikrofon osv. Internettet er en veldig kaotisk verden med veldig komplisert regler, men alle vet de og de respekterer de reglene. De som gj&oslash;r ikke ble kalt &laquo;Normies&raquo;. S&aring; f&oslash;lgelig ikke alle snakker engelsk, og de fins noe folk som snakker ikke norsk i Norge ogs&aring;. De kalles</p>
                    <p>&nbsp;</p>
                    <p>
                        <h3>Sami</h3>
                    </p>
                    <p>Sami folk sprer seg over Norge, Sverige, Finnland og Russland, med mest som bor i Norge. De har ikke sitt egen land, men bor i de 4 landene. De som binder de til en gruppe, de som karakteriserer de er spr&aring;ket. De snakker Samisk, som er ikke i det hele tatt som norsk, men det ligner mer p&aring; finsk. De bor med Nordmenn, og mange snakker norsk ogs&aring;. I noe kommuner Samisk er en offisielt spr&aring;k og plakater p&aring; motorvei, for eksempel, er p&aring; samisk og norsk. Det er som det er 2 spr&aring;k i et land, eller fins det mer?</p>
                    <p>&nbsp;</p>
                    <p>
                        <h3>Dialekter</h3>
                    </p>
                    <p>Norsk er en veldig spenne spr&aring;k fordi det fins veldig mange dialekter. Noen deler de p&aring; fylker, noe deler p&aring; kommuner og noen deler i kommuner. Men hvorfor? Det er fordi ingen vil ha en standard. Alle syns at det de snakker er riktig og det er en del av seg selv. Hvilken dialekt du snakker forteller de andre om hvor du kommer, hva slags foreldre du har og mye mer. Det en veldig fargefelt subjekt som nor den blander forteller veldig mye. Men det er ikke uten d&aring;rlig sider. Noe folk har problemer med dialekter og de kan ikke forst&aring; verande. Og det er en problem med hvordan man skriver ord hvis man kan ikke bestemme hvordan &aring; si dette ordet. Denne problem ga oss&hellip;</p>
                    <p>&nbsp;</p>
                    <p>
                        <h3>Nynorsk</h3>
                    </p>
                    <p>Et spr&aring;k som ble f&oslash;dt av problemer mellom Norsk-norsk og Dansk-norsk. Nynorsk het landsm&aring;l f&oslash;r 1929, men med forandringer i l&aelig;reb&oslash;ker de bytte navn ogs&aring;. Og Riksm&aring;l ble til bokm&aring;l. De kalt Riksm&aring;l &laquo; &hellip;fordi det er Norges lands, Norges rikes m&aring;l&raquo; - Moe, Moltke (1900). I dag cirka 12% snakker nynorsk, men elever som skriver bokm&aring;l m&aring; l&aelig;re nynorsk ogs&aring;. Hva mener jeg med &aring; skrive Bokm&aring;l eller Nynorsk? Fordi det fins s&aring; mange dialekter Norge kunne ikke bestemme hvordan &aring; skrive s&aring; vi har 2 skriftlig spr&aring;k.<span class="Apple-converted-space">&nbsp;</span></p>
                    <p>&nbsp;</p>
                    <p>S&aring; tror jeg vi snakket om alt som handler on Norsk. Fra begynnelsen, alfabet, kolonisering og mye mer. Jeg er litt tomt for ideer om hvordan &aring; slutte dette. Oki, ha det.<span class="Apple-converted-space">&nbsp;</span></p>
                    <!-- End -->
                    <a href="luca.pdf">
                        <button type="button" class="btn btn-danger">
                            Download PDF
                        </button>
                    </a>
                    <a href="luca.docx">
                        <button type="button" class="btn btn-primary">
                            Download Word
                        </button>
                    </a>
                    <a href="luca.txt">
                        <button type="button" class="btn btn-success">
                            Download Text
                        </button>
                    </a>
                    <div class="kilder"></div>
                    <h4>Kilder:</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="https://www.wikipedia.org">Wikipedia</a></li>
                        <ul>
                            <li class="list-group-item"><a href="https://web.archive.org/web/20061002171452/http://www.norden.org/pub/uddannelse/sprog/sk/N2004009.pdf">Norden</a></li>
                            <li class="list-group-item"><a href="https://www.nb.no/items/URN:NBN:no-nb_digibok_2014051908200?page=15">Norsk Biblotek</a></li>
                            <li class="list-group-item"><a href="https://www.dokpro.uio.no/litteratur/moltkemoe/">Moltke Moe</a></li>
                        </ul>
                        <li class="list-group-item"><a href="https://snl.no">Stor Norske Leksikon</a></li>
                        <ul>
                            <li class="list-group-item"><a href="https://snl.no/dialekter_i_Norge">Dialekter</a></li>
                            <li class="list-group-item"><a href="https://snl.no/nynorsk">Nynorsk</a></li>
                            <li class="list-group-item"><a href="https://snl.no/spr%C3%A5k_i_Norge">Spraak</a></li>
                            <li class="list-group-item"><a href="https://snl.no/moderne_norsk">Modern Norsk</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>