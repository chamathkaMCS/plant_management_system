function updateTime() {
    fetch("time.php") // Fetch the time from time.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("time").innerHTML = data;
    });
}

// Update the time every second without refreshing the entire page
setInterval(updateTime, 1000);
