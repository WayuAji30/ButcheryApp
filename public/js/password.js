document.addEventListener("DOMContentLoaded", function () {
  const eyeCloseButtons = document.querySelectorAll(".btn-eye-close");
  const eyeOpenButtons = document.querySelectorAll(".btn-eye-open");
  const passwordInputs = document.querySelectorAll('input[type="password"]');

  eyeCloseButtons.forEach(function (button, index) {
    button.addEventListener("click", function () {
      passwordInputs[index].type = "text";
      button.hidden = true;
      eyeOpenButtons[index].hidden = false;
    });
  });

  eyeOpenButtons.forEach(function (button, index) {
    button.addEventListener("click", function () {
      passwordInputs[index].type = "password";
      button.hidden = true;
      eyeCloseButtons[index].hidden = false;
    });
  });
});
