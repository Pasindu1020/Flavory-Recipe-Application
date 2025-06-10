document.addEventListener("DOMContentLoaded", () => {
  const premiumCards = document.querySelectorAll(".premium-recipe");

  premiumCards.forEach(card => {
    card.addEventListener("click", () => {
      fetch('get_user_data.php')
        .then(response => response.json())
        .then(data => {
          if (data.membership === 'Premium') {
            const targetURL = card.getAttribute("data-recipe-url");
            window.location.href = targetURL;
          } else {
            console.error("Access Denied");
            alert("Please upgrade to Premium User to get Access");
          }
        })
        .catch(err => {
          console.error("Error:",err);
          alert("Something went wrong. Please try again.");
        });
    });
  });
});