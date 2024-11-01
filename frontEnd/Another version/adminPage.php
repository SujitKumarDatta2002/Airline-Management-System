<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Airline Management</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss-jit-cdn"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.15.0/dist/full.css"
      rel="stylesheet"
    />
  </head>

  <body class="bg-gray-100">
    <!-- Navbar -->
    <div class="navbar bg-base-100">
      <div class="flex-1">
        <a href="homePage.php" class="btn btn-ghost text-xl">AIRLINE</a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li>
            <a
              href="adminPage.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#253B6E] hover:text-white"
              >Home</a
            >
          </li>
          <li>
            <a
              href="finance.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#1F5F8B] hover:text-white"
              >Finace</a
            >
          </li>
          <li>
            <a
              href="airline.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#1891AC] hover:text-white"
              >Airline</a
            >
          </li>
          <li>
            <a
              href="flight.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#419197] hover:text-white"
              >Flight</a
            >
          </li>

          <li>
            <a
              href="logIn.php"
              id="loginBtn"
              class="btn bg-[hsl(22,89%,48%)] hover:bg-[hsl(22,89%,38%)] text-white text-lg rounded-xl"
              >Log out</a
            >
          </li>
        </ul>
      </div>
    </div>

    <!-- Admin and User Panel -->
    <div id="adminPanel" class="container mx-auto mt-10">
      <h2 class="text-3xl font-bold mb-4">Admin Panel</h2>
      <div class="grid grid-cols-1 gap-4 justify-items-center">
        <a id="addFlight" class="btn btn-primary w-1/4" href="finance.php">FINANCE</button>
        <a id="removeFlight" class="btn btn-secondary w-1/4" href="airline.php">
          AIRLINE
</a>
        <a id="modifyFlight" class="btn btn-accent w-1/4" href="flight.php">
          FLIGHT
</a>
        
      </div>
    </div>

    <!-- User Panel -->
    <div id="userPanel" class="hidden container mx-auto mt-10">
      <h2 class="text-3xl font-bold mb-4">User Panel</h2>
      <div class="grid grid-cols-1 gap-4">
        <button id="viewFlightsUser" class="btn btn-info">
          View Flight Details
        </button>
        <button id="sourceAirport" class="btn btn-secondary">
          Source Airport
        </button>
        <button id="destinationAirport" class="btn btn-accent">
          Destination
        </button>
        <button id="departureTime" class="btn btn-primary">
          Departure Time
        </button>
        <button id="arrivalTime" class="btn btn-success">Arrival Time</button>
      </div>
    </div>
  </body>
</html>
