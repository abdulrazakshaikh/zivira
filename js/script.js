
// --------------------------------TOOLTIP INIT--------------------------------
window.addEventListener('load', function(){
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"], [data-bs-tooltip="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))    
})


// -------------------------------HEADER STICKY--------------------------------
var activeSticky = document.getElementById("navbarHeader");
var winDow = window;

winDow.addEventListener("scroll", function () {
  var scroll = winDow.scrollY;
  var isSticky = activeSticky;

  if (scroll < 50) {
    isSticky.classList.remove("fixed-header");
  } else {
    isSticky.classList.add("fixed-header");
  }
});




// --------------------------SMOOTH SCROLL TO SECTION--------------------------
document.addEventListener("DOMContentLoaded", function () {
    const exerciseBtn = document.getElementById("exercise-btn");

    exerciseBtn.addEventListener("click", function () {
        const exerciseSection = document.getElementById("exercise-section");
        exerciseSection.scrollIntoView({ behavior: "smooth" });
    });

    const testEyeBtn = document.getElementById("testeye-btn");

    testEyeBtn.addEventListener("click", function () {
        const testEyeSection = document.getElementById("testeye-section");
        testEyeSection.scrollIntoView({ behavior: "smooth" });
    });


});