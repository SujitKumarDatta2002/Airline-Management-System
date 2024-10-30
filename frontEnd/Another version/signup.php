<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Registration</title>
    <!-- Tailwind CSS and DaisyUI CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body
    class="bg-[url('resources/sky-bg.jpg')] bg-opacity-70 bg-cover h-[100vh]"
  >

    <!-- Registration Form -->
    <div
      id="registrationWrapper"
      class=" fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center"
    >
      <div class="bg-white p-8 rounded-lg shadow-md w-96 space-y-4">
        <h2
          class="text-2xl font-bold mb-4 text-center bg-black text-white p-1 rounded-lg"
        >
          Registration
        </h2>
        <form id="registrationForm" action="reg.php" method="post">
          <input
            type="text"
            id="regName"
            name="regName"
            placeholder="Name*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regEmail"
            name="regEmail"
            placeholder="Email Address*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regPhone"
            name="regPhone"
            placeholder="Phone Number*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regNationalId"
            name="regNationalId"
            placeholder="National ID Number*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regAddress"
            name="regAddress"
            placeholder="Address"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="password"
            id="regCreatePassword"
            name="regCreatePassword"
            placeholder="Create Password*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="password"
            id="regConfirmPassword"
            name="regConfirmPassword"
            placeholder="Confirm Password*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <div class="flex flex-col">
            <button
              type="submit"
              id="submitRegistration"
              class="btn btn-success w-full mr-2 mt-3"
            >
              Submit
            </button>
            <button
              type="button"
              id="cancelRegistration"
              class="btn btn-secondary w-full mt-3"
            >
              Cancel
            </button>
          </div>
        </form>
        <!-- Error Message for Password Mismatch -->
        <p id="passwordError" class="text-red-500 mt-2 hidden">
          Passwords do not match. Please try again.
        </p>
      </div>
    </div>

    <!-- <script src="logIn.js"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
<?php