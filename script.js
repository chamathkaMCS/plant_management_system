function updateTime() {
    fetch("time.php") // Fetch the time from time.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("time").innerHTML = data;
    });
}

// Update the time every second without refreshing the entire page
setInterval(updateTime, 1000);

document.addEventListener("NavActive", function () {
    // Get current URL path
    let currentPath = window.location.pathname;

    // Select all navigation links
    let navButtons = document.querySelectorAll(".nav-link");

    navButtons.forEach(link => {
        // Compare href attribute with current path
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });
});

function openPanel() {
    document.getElementById("navigationPanel").className= "form-popup";
  }
  
  function closePanel() {
    document.getElementById("navigationPanel").className = "form-closed";
  }