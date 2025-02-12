function updateTime() {
    fetch("time.php") // Fetch the time from time.php
    .then(response => response.text())
    .then(data => {
        document.getElementById("time").innerHTML = data;
    });
}

// Update the time every second without refreshing the entire page
setInterval(updateTime, 1000);

function openPanel() {
    document.getElementById("navigationPanel").className= "form-popup";
  }
  
function closePanel() {
    document.getElementById("navigationPanel").className = "form-closed";
  }

document.querySelectorAll(".toWaterbutton").forEach(button => {
  button.addEventListener("click", function() {
        let plantid = this.dataset.plantid;  
        let currentDateTime = new Date().toISOString().slice(0, 19).replace("T", " "); 

        // Log to verify data being sent
        console.log("Sending plantId: " + plantid + ", currentDateTime: " + currentDateTime);

        fetch("updateDate.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "plantId=" + encodeURIComponent(plantid) + "&waterDateTime=" + encodeURIComponent(currentDateTime)
        })
        .then(response => response.text())  
        .then(data => {
            // Check the response from the server
            console.log("Server response: " + data);
            alert("Watering updated: " + data); 
        })
        .catch(error => console.error("Error:", error)); 
    });
});
