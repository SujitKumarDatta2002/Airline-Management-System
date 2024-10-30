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
    <!-- Navbar -->
    <div class="navbar bg-base-100">
      <div class="flex-1">
        <a href="homePage.php" class="btn btn-ghost text-xl hover:bg-sky-300"
          >AIRLINE</a
        >
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li><a>Home</a></li>
          <li><a>Home</a></li>
          <!-- <li>
            <a
              href="logIn.html"
              id="loginBtn"
              class="btn bg-[#E85C0D] hover:bg-sky-900 text-white text-lg"
              >Admin Login</a
            >
          </li> -->
        </ul>
      </div>
    </div>
    <!-- Login Form -->
    <div class="bg-white p-6 rounded-lg shadow-md w-80 mx-auto mt-20">
      <div
        class="bg-black text-center text-white title text-2xl font-bold mb-4 border-none p-1 rounded-lg"
      >
        Login Form
      </div>
      <form id="loginForm" action="signin.php" method="post">
        <div class="field mb-4">
          <input
            placeholder="Email Address"
            type="text"
            id="regEmail"
            name= "regEmail"
            required
            class="input input-bordered w-full border-gray-400 rounded-lg"
          />
          <label>Email Address</label>
        </div>
        <div class="field mb-4">
          <input
            placeholder="Password"
            type="password"
            id="regConfirmPassword"
            name="regConfirmPassword"
            required
            class="input input-bordered w-full border-gray-400 rounded-lg"
          />
          <label>Password</label>
        </div>
        <div class="content mb-4 flex justify-between items-center">
          <div class=" flex flex-inline checkbox">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
        </div>
        <div class="field mb-4">
          <input
            type="submit"
            value="Login"
            class="btn btn-primary w-full bg-green-800"
          />
        </div>
        <div class="signup-link">
          Not a member?
          <a class="text-blue-500" href="#" id="signupLink">Signup now</a>
        </div>
      </form>
    </div>

    <!-- Registration Form -->
    <div
      id="registrationWrapper"
      class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center"
    >
      <div class="bg-white p-8 rounded-lg shadow-md w-96 space-y-4">
        <h2
          class="text-2xl font-bold mb-4 text-center bg-black text-white p-1 rounded-lg"
        >
          Registration
        </h2>
        <form id="registrationForm" action="#">
          <input
            type="text"
            id="regName"
            placeholder="Name*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regPhone"
            placeholder="Phone Number*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regNationalId"
            placeholder="National ID Number*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="text"
            id="regAddress"
            placeholder="Address"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="password"
            id="regCreatePassword"
            placeholder="Create Password*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <input
            type="password"
            id="regConfirmPassword"
            placeholder="Confirm Password*"
            class="input input-bordered w-full rounded-lg mb-2"
            required
          />
          <div class="flex flex-col">
            <button
              type="button"
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

    <script src="logIn.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>