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
        let previous = this.dataset.previous;
        let plantid = this.dataset.plantid;
        let currentDateTime = new Date().toISOString().slice(0, 19).replace("T", " ");
        localStorage.setItem("plantID"+ plantid,previous);

        console.log(previous,plantid);
        setTimeout(function() {location.reload();}, 100); 

        fetch("updateDate.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "plantId=" + encodeURIComponent(plantid) + "&waterDateTime=" + encodeURIComponent(currentDateTime)
        })
        .catch(error => console.error("Error:", error)); 
    });
});
document.querySelectorAll(".wateredButton").forEach(button => {
    button.addEventListener("click", function() {
          let plantid = this.dataset.plantid;
          let prevDate =localStorage.getItem("plantID"+ plantid);

          console.log(prevDate,plantid);
          setTimeout(function() {location.reload();}, 100);

          fetch("updateDate.php", {
              method: "POST",
              headers: { "Content-Type": "application/x-www-form-urlencoded" },
              body: "plantId=" + encodeURIComponent(plantid) + "&waterDateTime=" + encodeURIComponent(prevDate)
          })
          .catch(error => console.error("Error:", error)); 
      });
  });
