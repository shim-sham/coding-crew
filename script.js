function redirectToPage(event) {
  event.preventDefault(); // Prevent the form from submitting
  var form = document.getElementById('sign-up-form');
  if (form.checkValidity()) {
    // Form is valid, you can redirect or do other actions here
    window.location.href = "thanks.html"; // Change this URL to the desired page
  } else {
    // Form is not valid, let the browser display the validation messages
    form.reportValidity();
  }
}