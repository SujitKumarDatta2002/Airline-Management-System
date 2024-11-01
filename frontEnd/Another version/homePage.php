<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="logIn.html" />
    <!-- <link href="./src/o" rel="stylesheet" /> -->
    <title>Airline</title>
  </head>
  <body>
    <!-- NavBar Creation -->
    <div class="navbar bg-base-100">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16"
              />
            </svg>
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow"
          >
            <li><a>Home</a></li>
            <li><a>Item 2</a></li>
            <li><a>Item 3</a></li>
          </ul>
        </div>
        <a href="homePage.php" class="btn btn-ghost text-xl hover:bg-sky-300"
          >AIRLINE</a
        >
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a href="homePage.php">Home</a></li>
          <li><a>Item 2</a></li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <a
          href="logIn.php"
          id="loginBtn"
          class="btn bg-[#A02334] hover:bg-sky-900 text-white text-lg mr-1"
          >Admin Login</a
        >
        <a
          href="logIn.php"
          id="loginBtn"
          class="btn bg-[#E85C0D] hover:bg-sky-900 text-white text-lg"
          >Log in</a
        >
      </div>
    </div>

    <!-- banner portion -->

    <div
      class="bg-[url('resources/sky.jpg')] bg-opacity-70 h-[90vh] flex flex-col items-center justify-center space-y-6 px-4 sm:px-6 md:px-8"
    >
      <div>
        <img
          class="bg-none h-[400px] w-[600px]"
          src="resources/flight.png"
          alt=""
        />
      </div>
      <div class="flex flex-col items-center space-x-2">
        <div class="flex flex-col items-center">
          <h1
            class="font-bold text-6xl menu menu-horizontal space-x-4 md:space-x-8 text-center text-[#212121] pb-6"
          >
            Welcome to our Airlines!
          </h1>
          <p
            class="menu menu-horizontal space-x-4 md:space-x-8 text-center pb-32px font-bold text-lg"
          >
            Want to become part of something special? Just click the "Join Now"
            button below!
          </p>
        </div>
        <div>
          <a
            href="logIn.html"
            class="btn bg-[#8DECB4] bg-opacity-50 font-bold border-none text-black text-xl rounded-2xl"
          >
            Join Now
          </a>
        </div>
      </div>
    </div>

    <!-- Forms Container -->
    <div
      id="formContainer"
      class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 items-center justify-center"
    >
      <!-- Registration Form -->
      <div
        id="registrationForm"
        class="hidden bg-white p-8 rounded-lg shadow-md w-96 space-y-4"
      >
        <h2 class="text-2xl font-bold mb-4">Registration</h2>
        <input
          type="text"
          id="name"
          placeholder="Name"
          class="input input-bordered w-full"
          required
        />
        <input
          type="text"
          id="phone"
          placeholder="Phone Number"
          class="input input-bordered w-full"
          required
        />
        <input
          type="email"
          id="email"
          placeholder="Email"
          class="input input-bordered w-full"
          required
        />
        <input
          type="text"
          id="fatherName"
          placeholder="Father's Name"
          class="input input-bordered w-full"
        />
        <input
          type="text"
          id="motherName"
          placeholder="Mother's Name"
          class="input input-bordered w-full"
        />
        <input
          type="text"
          id="nationalId"
          placeholder="National ID Number"
          class="input input-bordered w-full"
          required
        />
        <input
          type="password"
          id="password"
          placeholder="Create Password"
          class="input input-bordered w-full"
          required
        />
        <input
          type="password"
          id="confirmPassword"
          placeholder="Confirm Password"
          class="input input-bordered w-full"
          required
        />

        <div class="flex flex-col">
          <button
            id="submitRegistration"
            class="btn btn-success w-full mr-2 mb-2"
          >
            Submit
          </button>
          <button id="cancelRegistration" class="btn btn-secondary w-full">
            Cancel
          </button>
        </div>
      </div>

      <!-- Login Form -->
      <div
        id="loginForm"
        class="hidden bg-white p-8 rounded-lg shadow-md w-96 space-y-4"
      >
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <input
          type="email"
          id="loginEmail"
          placeholder="Email"
          class="input input-bordered w-full"
        />
        <input
          type="password"
          id="loginPassword"
          placeholder="Password"
          class="input input-bordered w-full"
        />
        <button id="submitLogin" class="btn btn-primary w-full">Login</button>
      </div>
    </div>

    <!-- <script src="logIn.js"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
