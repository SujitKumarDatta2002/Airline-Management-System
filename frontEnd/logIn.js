// document.getElementById("loginBtn").addEventListener("click", function () {
//   const isNew = confirm("Are you new here?");
//   const formContainer = document.getElementById("formContainer");
//   const registrationForm = document.getElementById("registrationForm");
//   const loginForm = document.getElementById("loginForm");

//   formContainer.classList.remove("hidden");

//   if (isNew) {
//     registrationForm.classList.remove("hidden");
//     loginForm.classList.add("hidden");
//   } else {
//     loginForm.classList.remove("hidden");
//     registrationForm.classList.add("hidden");
//   }
// });

// // Handle registration form submission
// document
//   .getElementById("submitRegistration")
//   .addEventListener("click", function () {
//     alert("Registration submitted!");
//     // Handle form validation and submission logic here
//     closeForms();
//   });

// // Handle login form submission
// document.getElementById("submitLogin").addEventListener("click", function () {
//   alert("Login submitted!");
//   // Handle login logic here
//   closeForms();
// });

// // Handle cancel button in registration form
// document
//   .getElementById("cancelRegistration")
//   .addEventListener("click", function () {
//     closeForms();
//   });

// // Function to close the forms and reset the display
// function closeForms() {
//   document.getElementById("formContainer").classList.add("hidden");
//   document.getElementById("registrationForm").classList.add("hidden");
//   document.getElementById("loginForm").classList.add("hidden");
// }
// // Handle registration form submission
// document
//   .getElementById("submitRegistration")
//   .addEventListener("click", function (event) {
//     // Get the values of the password fields
//     const createPassword = document
//       .getElementById("createPassword")
//       .value.trim();
//     const confirmPassword = document
//       .getElementById("confirmPassword")
//       .value.trim();

//     // Check if the passwords match
//     if (createPassword !== confirmPassword) {
//       // Show error message
//       document.getElementById("passwordError").classList.remove("hidden");
//       event.preventDefault(); // Prevent form submission
//       return; // Exit the function early
//     } else {
//       // Hide error message if passwords match
//       document.getElementById("passwordError").classList.add("hidden");
//     }

//     // Handle further validation and form submission here
//     alert("Registration submitted!");
//     closeForms(); // Close the form after submission
//   });

// // Handle cancel button in registration form
// document
//   .getElementById("cancelRegistration")
//   .addEventListener("click", function () {
//     closeForms();
//   });

// // Function to close the forms and reset the display
// function closeForms() {
//   document.getElementById("formContainer").classList.add("hidden");
//   document.getElementById("registrationForm").classList.add("hidden");
//   document.getElementById("loginForm").classList.add("hidden");
//   document.getElementById("passwordError").classList.add("hidden"); // Reset error message visibility
// }
// Show the registration form when "Signup now" is clicked
document
  .getElementById("signupLink")
  .addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById("registrationWrapper").classList.remove("hidden");
  });

// Handle registration form submission
document
  .getElementById("submitRegistration")
  .addEventListener("click", function (event) {
    // Get the values of the required fields
    const name = document.getElementById("regName").value.trim();
    const phone = document.getElementById("regPhone").value.trim();
    const nationalId = document.getElementById("regNationalId").value.trim();
    const address = document.getElementById("regAddress").value.trim();
    const createPassword = document
      .getElementById("regCreatePassword")
      .value.trim();
    const confirmPassword = document
      .getElementById("regConfirmPassword")
      .value.trim();

    // Check if all fields are filled
    if (
      !name ||
      !phone ||
      !nationalId ||
      !address ||
      !createPassword ||
      !confirmPassword
    ) {
      alert(
        "You did not provide all the required information. Please fill in all fields."
      );
      return; // Stop further execution
    }

    // Check if the passwords match
    if (createPassword !== confirmPassword) {
      document.getElementById("passwordError").classList.remove("hidden");
      return; // Stop further execution if passwords don't match
    } else {
      document.getElementById("passwordError").classList.add("hidden");
    }

    // Show success message
    alert("Registered successfully! Welcome to our family.");
    closeRegistrationForm();
  });

// Handle cancel button in registration form
document
  .getElementById("cancelRegistration")
  .addEventListener("click", function () {
    closeRegistrationForm();
  });

// Function to close the registration form and reset the display
function closeRegistrationForm() {
  document.getElementById("registrationWrapper").classList.add("hidden");
  document.getElementById("registrationForm").reset(); // Reset the form fields
  document.getElementById("passwordError").classList.add("hidden"); // Reset error message visibility
}
