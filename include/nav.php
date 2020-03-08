         <!-- Navbar -->
<?php
$current_file_name = $_SERVER['REQUEST_URI'];
?>
    <nav class='navbar sticky-top navbar-expand-lg navbar-dark bg-primary'>
        <a class='navbar-brand' href='/Website/home/'>
            <img src='/Website/media/dickbutt.png' width='30' height='30' class='d-inline-block align-top' alt=''>
        </a>
        <a class='navbar-brand' href='/Website/home/'>Luca's website</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav mr-auto'>
                <li <?php if (strpos($current_file_name, 'home') !== false) {echo "class='nav-item active'";} else {echo "class='nav-item'";}?>>
                    <a class='nav-link' href='/Website/home/'>Home <span class='sr-only'>(current)</span></a>
                </li>
                <li <?php if (strpos($current_file_name, 'about') !== false) {echo "class='nav-item active'";} else {echo "class='nav-item'";}?>>
                    <a class='nav-link' href='/Website/about/index.php'>About me</a>
                </li>
                <li <?php if (strpos($current_file_name, 'archive') !== false) {echo "class='nav-item dropdown active'";} else {echo "class='nav-item dropdown'";}?>>
                    <a class='nav-link dropdown-toggle ' href='/Website/archive/index.php' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        Archive
                    </a>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a <?php if (strpos($current_file_name, 'archive/index.php') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href='/Website/archive/index.php'>Archive home</a>
                        <div class='dropdown-divider'></div>
                        <a <?php if (strpos($current_file_name, 'Norsk') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href='/Website/archive/Norsk/'>Norsk</a>
                        <a <?php if (strpos($current_file_name, 'programming') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href='/Website/archive/programming/'>Programming</a>
                        <a <?php if (strpos($current_file_name, 'Science') !== false) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href='/Website/archive/Science/'>Science</a>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Secret</a>
                </li>
            </ul>
              <form class="form-inline">
    <button class="btn" type="button" onclick="toggleColorScheme()" id="darkModeToggle">
        
</button>
        <dark-mode-toggle
  ></dark-mode-toggle>
</form>
            <form class='form-inline my-2 my-lg-0' action='/Website/include/search.php' method='post' autocomplete="off" id="searchBox">
                <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' name='findMe' onkeyup="showResult(this.value)">
    <div id="livesearch" class="livesearch"></div>
            </form>
        </div>
    </nav>
    <!-- End of Navbar -->


