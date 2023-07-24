function showDetails(language) {
    // You can use the 'language' parameter to determine which tutorial to show.
    // For example, if language === 'java', show Java tutorial details.
    // You can implement the logic here to display the details and tutorial.
  }
  // JavaScript to show/hide the login modal
function openLoginModal() {
  document.getElementById("loginModal").style.display = "block";
}

function closeLoginModal() {
  document.getElementById("loginModal").style.display = "none";
}
function openSignUpModal() {
  document.getElementById("signupModal").style.display = "block";
}

function closeSignUpModal() {
  document.getElementById("signupModal").style.display = "none";
}
const aboutUsLink = document.querySelector('a[href="#about-us"]');
aboutUsLink.addEventListener('click', function (event) {
    event.preventDefault();
    const aboutUsSection = document.getElementById('about-us');
    const headerHeight = document.querySelector('header').clientHeight;
    const offset = aboutUsSection.getBoundingClientRect().top;
    window.scrollTo({
        top: offset + window.pageYOffset - headerHeight,
        behavior: 'instant'
    });
});
