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
<?php include 'include/ip.php';?>
    <link rel="stylesheet" type="text/css" href="../include/main.css">
    <style type="text/css">

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
                <li class='nav-item active'>
                    <a class='nav-link' href='../../index.php'>Home <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../../about/index.php'>About me</a>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle ' href='../archive/index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Archive
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a class='dropdown-item ' href='../../archive/index.php'>Archive home</a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='../../archive/Norsk/'>Norsk</a>
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
                    <h1>Luca's server</h1>
                    <p>idk what this is, it's just my personal PC brodcasting to the world</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br />
</body>

</html>