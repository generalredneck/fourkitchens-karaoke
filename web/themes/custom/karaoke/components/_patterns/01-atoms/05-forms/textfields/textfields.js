(function() {
  // REMOVE IF DRUPAL.

  Drupal.behaviors.textFields = {
    attach: function(context) {
      "use strict";

      const loginWithGoogleButton = document.querySelector(
        "#edit-openid-connect-client-google-login",
        context
      );
      if (loginWithGoogleButton) {
        loginWithGoogleButton.value = "Login with Google";
      }
    }
  };
})();
