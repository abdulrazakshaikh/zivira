
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
        testEyeSection.scrollIntoView({ behavior: "smooth", block: "start" });
    });


});



// --------------------------COUNTER ON SCROLL--------------------------
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function countUp(element) {
    var target = +element.getAttribute('data-target');
    var count = +element.innerText;
    var increment = target / 100; // Adjust the increment value as needed

    if (count < target) {
      element.innerText = Math.ceil(count + increment);
      setTimeout(function() {
        countUp(element);
      }, 10); // Adjust the speed of counting here
    } else {
      element.innerText = target.toLocaleString();
    }
  }

  function startCountersOnScroll() {
    var counters = document.querySelectorAll('.counter');
    var counterElements = Array.from(counters);

    function updateCounters() {
      counterElements.forEach(function(counter, index) {
        if (isElementInViewport(counter)) {
          countUp(counter);
          counterElements.splice(index, 1);
        }
      });
    }

    // Initial check in case counters are already in view
    updateCounters();

    // Listen for scroll events
    window.addEventListener('scroll', updateCounters);
  }

  // Start counting when the page is loaded
  document.addEventListener('DOMContentLoaded', startCountersOnScroll);
