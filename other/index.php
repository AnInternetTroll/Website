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
    <!-- <script type="text/javascript">
  	var ip = new 
	$.getJSON("https://api.ipify.org/?format=json", function(e) {
    console.log(e.ip);
});
  </script>-->
    <?php
$file = "../ipaddresses.txt"; //turns the text file into a variable
$f=fopen($file, 'a+'); //opens up the text file for reading and writing
fwrite($f,"\n--"."Date:".date("l jS \of F Y h:i:s A")."\nIP: ".$_SERVER['REMOTE_ADDR']."\nHOSTNAME: ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."\n"); //writes the IP address to ipaddresses.txt
fclose($f); //closes ipaddresses.txt for reading and writing
?>
  <link rel="stylesheet" type="text/css" href="../include/main.css">
    <style type="text/css">
    li .kilder {
        background-color: #111111;
    }

    .article {
        line-height: 1.6;
        font-size: 15px;
    }
    </style>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg navbar-dark bg-primary sticky-top'>
        <a class='navbar-brand' href='#'>
            <img src='../Dickbutt steve.png' width='40' height='57' class='d-inline-block align-top' alt=''>
        </a>
        <a class='navbar-brand' href='#'>Luca's website</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item'>
                    <a class='nav-link' href='../index.php'>Home <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../norsk/index.php'>Norsk</a>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle active' href='../other/index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Other projects
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a class='dropdown-item' href='../other/index.php'>Others</a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item disabled' href='#'>Memes</a>
                        <a class='dropdown-item disabled' href='#'>Sphere Bolt</a>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Secret</a>
                </li>
            </ul>
            <form class='form-inline my-2 my-lg-0' action='../include/search.php' method='post'>
                <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='findMe'>
                <button class='btn btn-success' type='submit'>Search</button>
            </form>
        </div>
    </nav>
    <!-- End of Navbar -->

<body>
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="col-sm-12">
                    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                        <img src="bolt.jpg" class="card-img-top" alt="..." style="">
                        <div class="card-body">
                            <h5 class="card-title">Sphere Bolt</h5>
                            <p class="card-text">Bolt is a programming toy to which I'm trying to develop an algorithm to move by itself forever. Basically starting the AI uprising earlier</p>
                            <a href="#" class="btn btn-primary disabled">Learn more</a>
                        </div>
                    </div>
                    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                        <img src="pepe.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Memes</h5>
                            <p class="card-text">tbh I don't know what this will be. Was planning on making a meme page, but kinda got lazy</p>
                            <a href="#" class="btn btn-primary disabled">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>