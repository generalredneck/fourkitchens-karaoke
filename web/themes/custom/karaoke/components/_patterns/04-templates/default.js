(function() {
  Drupal.behaviors.offScreen = {
    attach: function(context) {
      "use strict";

      function toggleOffScreen() {
        const layoutContainer = document.querySelector(".layout-container");
        const offScreenContainer = document.querySelector(".off-screen");

        layoutContainer.classList.toggle("open");
        offScreenContainer.classList.toggle("open");
      }

      const offScreenToggle = document.querySelector(".menu-toggle", context);
      offScreenToggle.addEventListener("click", toggleOffScreen);

      const offScreenClose = document.querySelector(
        ".off-screen-close",
        context
      );
      offScreenClose.addEventListener("click", toggleOffScreen);
    }
  };
})();
