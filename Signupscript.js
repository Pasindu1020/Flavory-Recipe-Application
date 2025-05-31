document.addEventListener("DOMContentLoaded", function() {
    const showSignup = document.getElementById("showSignup");
    const showLogin = document.getElementById("showLogin");
    const loginCard = document.querySelector(".login-card");
    const signupCard = document.querySelector(".signup-card");

    showSignup.addEventListener("click", function(event) {
        event.preventDefault();
        loginCard.style.display = "none";  // Hide Login
        signupCard.style.display = "block"; // Show Sign-Up
    });

    showLogin.addEventListener("click", function(event) {
        event.preventDefault();
        signupCard.style.display = "none"; // Hide Sign-Up
        loginCard.style.display = "block"; // Show Login
    });
});
