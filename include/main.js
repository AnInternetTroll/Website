// If `prefers-color-scheme` is not supported, fall back to light mode.
// In this case, dark.css will be downloaded with `highest` priority.
$(document).ready(function() {
    const toggleBtn = document.querySelector('#darkModeToggle');
    const darkModeToggle = document.querySelector('dark-mode-toggle');
    if (window.matchMedia('(prefers-color-scheme: dark)').media === 'not all') {
        document.documentElement.style.display = 'none';
        document.head.insertAdjacentHTML('beforeend', '<link rel="stylesheet" href="/Website/include/dark.css" onload="document.documentElement.style.display = \'\'">');
    }
    if (darkModeToggle.mode == 'dark') {
        toggleBtn.textContent = "Light";
        toggleBtn.classList.add('btn-light');
    } else if (darkModeToggle.mode == 'light') {
        toggleBtn.textContent = "Dark";
        toggleBtn.classList.add('btn-dark');
    }

});

function toggleColorScheme() {
    const toggleBtn = document.querySelector('#darkModeToggle');
    const darkModeToggle = document.querySelector('dark-mode-toggle');
    if (darkModeToggle.mode == 'dark') {
        darkModeToggle.mode = 'light';
        console.log("changed to light");
        toggleBtn.textContent = "Dark";
        toggleBtn.classList.remove('btn-light');
        toggleBtn.classList.add('btn-dark');
    } else if (darkModeToggle.mode == 'light') {
        darkModeToggle.mode = 'dark';
        console.log("changed to dark");
        toggleBtn.textContent = "Light";
        toggleBtn.classList.remove('btn-dark');
        toggleBtn.classList.add('btn-light');
    }
}

//Wait until the light/dark mode toggle happens
document.addEventListener('colorschemechange', (e) => {
    const darkModeToggle = document.querySelector('dark-mode-toggle');
    //Logging for debbuging purpuses, such as browser compatibility check
    console.log(`Color scheme changed to ${e.detail.colorScheme}.`);
    darkModeToggle.setAttribute('permanent', '');
})


$(document).on('focus', 'textarea', function() {
    $(this).asciimoji({
        //  prefix: '[',
        //  suffix: ']'
    })
});

//Live search function
function showResult(str) {
    if (str.length == 0) {
        document.getElementById("livesearch").innerHTML = "";
        //document.getElementById("livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("livesearch").innerHTML = this.responseText;
            //document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET", "/Website/include/search.php?q=" + str, true);
    xmlhttp.send();
}