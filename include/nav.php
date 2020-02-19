         <!-- Navbar -->
<?php 
$current_file_name = $_SERVER['REQUEST_URI'];
?>
    <nav class='navbar sticky-top navbar-expand-lg navbar-dark bg-primary'>
        <a class='navbar-brand' href='#'>
            <img src='/Website/media/Dickbutt steve.png' width='40' height='57' class='d-inline-block align-top' alt=''>
        </a>
        <a class='navbar-brand' href='#'>Luca's website</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li <?php if (strpos($current_file_name, 'home') !== false) {echo "class='nav-item active'";} else {echo "class='nav-item'";} ?>>
                    <a class='nav-link' href='/Website/home/'>Home <span class='sr-only'>(current)</span></a>
                </li>
                <li <?php if (strpos($current_file_name, 'about') !== false) {echo "class='nav-item active'";} else {echo "class='nav-item'";} ?>>
                    <a class='nav-link' href='/Website/about/index.php'>About me</a>
                </li>
                <li <?php if (strpos($current_file_name, 'archive') !== false) {echo "class='nav-item dropdown active'";} else {echo "class='nav-item dropdown'";} ?>>
                    <a class='nav-link dropdown-toggle ' href='/Website/archive/index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Archive
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a <?php if (strpos($current_file_name, 'archive/index.php') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";} ?> href='/Website/archive/index.php'>Archive home</a>
                        <div class='dropdown-divider'></div>
                        <a <?php if (strpos($current_file_name, 'Norsk') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";} ?> href='/Website/archive/Norsk/'>Norsk</a>
                        <a <?php if (strpos($current_file_name, 'english') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";} ?> href='/Website/archive/English/'>English</a>
                        <a <?php if (strpos($current_file_name, 'Science') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";} ?> href='/Website/archive/Science/'>Science</a>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Secret</a>
                </li>
            </ul>
              <form class="form-inline">
    <button class="btn btn-outline-primary" type="button" style="cursor: default !important;">
        <dark-mode-toggle
      id="dark-mode-toggle-1"
      legend=""
      appearance="toggle"
      dark=""
      light=""
      style=""
  ></dark-mode-toggle>
</button>
</form>
            <form class='form-inline my-2 my-lg-0' action='/Website/include/search.php' method='post'>
                <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='findMe'>
                <button class='btn btn-success' type='submit'>Search</button>
            </form>
        </div>
    </nav>
    <!-- End of Navbar -->

    
