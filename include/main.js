if ("serviceWorker" in navigator) {
  // Register a service worker hosted at the root of the
  // site using the default scope.
  navigator.serviceWorker.register("/sw.js").then(
    function(registration) {
      console.log("Service worker registration succeeded:", registration);
    },
    /*catch*/ function(error) {
      console.log("Service worker registration failed:", error);
    }
  );
} else {
  console.log("Service workers are not supported.");
}

// If `prefers-color-scheme` is not supported, fall back to light mode.
// In this case, dark.css will be downloaded with `highest` priority.
$(document).ready(function() {
  const resBox = document.querySelector("#livesearch");
  const darkLightToggle = document.querySelector("#darkModeToggle");
  const darkModeToggle = document.querySelector("dark-mode-toggle");
  if (window.matchMedia("(prefers-color-scheme: dark)").media === "not all") {
    document.documentElement.style.display = "none";
    document.head.insertAdjacentHTML(
      "beforeend",
      '<link rel="stylesheet" href="/include/dark.css" onload="document.documentElement.style.display = \'\'">'
    );
  }
  if (darkModeToggle.mode == "dark") {
    darkLightToggle.textContent = "Light";
    darkLightToggle.classList.remove("btn-dark");
    darkLightToggle.classList.add("btn-light");
  } else if (darkModeToggle.mode == "light") {
    darkLightToggle.textContent = "Dark";
    darkLightToggle.classList.remove("btn-light");
    darkLightToggle.classList.add("btn-dark");
  }
  resBox.style.display = "none";
});

function toggleColorScheme() {
  let trans = () => {
    document.documentElement.classList.add("transition");
    window.setTimeout(() => {
      document.documentElement.classList.remove("transition");
    }, 500);
  };
  const darkLightToggle = document.querySelector("#darkModeToggle");
  const darkModeToggle = document.querySelector("dark-mode-toggle");
  if (darkModeToggle.mode == "dark") {
    darkModeToggle.mode = "light";
    console.log("changed to light");
    darkLightToggle.textContent = "Dark";
    darkLightToggle.classList.remove("btn-light");
    darkLightToggle.classList.add("btn-dark");
    trans();
  } else if (darkModeToggle.mode == "light") {
    darkModeToggle.mode = "dark";
    console.log("changed to dark");
    darkLightToggle.textContent = "Light";
    darkLightToggle.classList.remove("btn-dark");
    darkLightToggle.classList.add("btn-light");
    trans();
  }
}

//Wait until the light/dark mode toggle happens
document.addEventListener("colorschemechange", e => {
  const darkModeToggle = document.querySelector("dark-mode-toggle");
  const darkLightToggle = document.querySelector("#darkModeToggle");
  //Logging for debbuging purpuses, such as browser compatibility check
  console.log(`Color scheme changed to ${e.detail.colorScheme}.`);
  darkModeToggle.setAttribute("permanent", "");
  if (e.detail.colorScheme == "dark") {
    darkLightToggle.textContent = "Dark";
    darkLightToggle.classList.remove("btn-light");
    darkLightToggle.classList.add("btn-dark");
  } else if (e.detail.colorScheme == "light") {
    darkLightToggle.textContent = "Light";
    darkLightToggle.classList.remove("btn-dark");
    darkLightToggle.classList.add("btn-light");
  }
});

$(document).on("focus", "textarea", function() {
  $(this).asciimoji({
    //  prefix: '[',
    //  suffix: ']'
  });
});

//Live search function
function showResult(str) {
  const resBox = document.querySelector("#livesearch");
  if (str.length == 0) {
    document.getElementById("livesearch").innerHTML = "";
    //document.getElementById("livesearch").style.border="0px";
    resBox.style.display = "none";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("livesearch").innerHTML = this.responseText;
      resBox.style.display = "";
      //document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  };
  xmlhttp.open("GET", "/include/search.php?q=" + str, true);
  xmlhttp.send();
}
