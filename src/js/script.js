document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector("[data-hs-collapse]");
    const dropdownMenu = document.querySelector("#navbar-with-collapse");

    toggleButton.addEventListener("click", function () {
      dropdownMenu.classList.toggle("hidden");
    });
  });