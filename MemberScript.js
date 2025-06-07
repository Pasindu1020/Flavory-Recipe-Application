document.addEventListener("DOMContentLoaded", function () {
    fetch('get_user_data.php')
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          document.getElementById("user-info").innerText = "Session expired. Please log in.";
        } else {
          document.getElementById("user-info").innerText = `Welcome ${data.email} (${data.membership})`;
  
          if (data.membership === "Premium") {
            document.getElementById("premium-recipe").style.display = "block";
          } else {
            document.getElementById("premium-recipe").style.display = "none";
          }
        }
      });
  });
  