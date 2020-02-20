// If `prefers-color-scheme` is not supported, fall back to light mode.
// In this case, dark.css will be downloaded with `highest` priority.
$(document).ready(function() {
    if (window.matchMedia('(prefers-color-scheme: dark)').media === 'not all') {
        document.documentElement.style.display = 'none';
        document.head.insertAdjacentHTML('beforeend', '<link rel="stylesheet" href="/Website/include/dark.css" onload="document.documentElement.style.display = \'\'">');
        //This is for comments, make them dark mode if the browser doesn't support color schemes
        $(".cardyly div:first-child").addClass("card text-white bg-dark mb-3");
    }
});
// Import darkmodeToggle, this helps with toggling between dark mode and light mode
const darkModeToggle = document.querySelector('dark-mode-toggle');
//Wait until the light/dark mode toggle happens
document.addEventListener('colorschemechange', (e) => {
    const darkModeToggle = document.querySelector('dark-mode-toggle');
    //Logging for debbuging purpuses, such as browser compatibility check
    console.log(`Color scheme changed to ${e.detail.colorScheme}.`);
    darkModeToggle.setAttribute('permanent', '');
    //Change the theme of comments from light to dark
    if (e.detail.colorScheme == "light") {
        //If light mode then remove the old class and add a new one
        $(".cardyly div:first-child").removeClass("card text-white bg-dark mb-3");
        $(".cardyly div:first-child").addClass("card text-black border-dark mb-3");
    } else if (e.detail.colorScheme == "dark") {
        //If Dark mode then remove the old class and add a new one
        $(".cardyly div:first-child").removeClass("card text-black border-dark mb-3");
        $(".cardyly div:first-child").addClass("card text-white bg-dark mb-3");
    }
})

function addAnchors(tags) {
    //loop through all your headers
    $.each($(tags), function(index, value) {
        //append the text of your header to a list item in a div, linking to an anchor we will create on the next line
        $('#box-anchors').append('<li><a href="#anchor-' + index + '">' + $(this).html() + '</a></li>');
        //add an a tag to the header with a sequential name
        $(this).html('<a id="heading-' + index + '">' + $(this).html() + '</a>');
    });
}
addAnchors('h1');