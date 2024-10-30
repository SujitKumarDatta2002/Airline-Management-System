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
    <title>FLIGHT</title>
  </head>
  <body>
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
              >HOME</a
            >
          </li>
          <li>
            <a
              href="finance.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#1F5F8B] hover:text-white"
              >FINANCE</a
            >
          </li>
          <li>
            <a
              href="airline.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#1891AC] hover:text-white"
              >AIRLINE</a
            >
          </li>
          <li>
            <a
              href="flight.php"
              class="btn rounded-lg bg-white border-none hover:bg-[#419197] hover:text-white"
              >FLIGHT</a
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

    <!-- Flight Details -->
    <h2 class="font-bold text-3xl ml-5">Flight Details</h2>
    <!-- <div class="flex justify-center">
      <button
        class="btn bg-[hsl(169,87%,18%)] hover:bg-[hsl(169,87%,28%)] w-1/4 text-xl m-3 text-white"
      >
        View Flight Details
      </button>
    </div> -->
    <button
      id="viewFlightBtn"
      class="btn bg-[hsl(169,87%,18%)] hover:bg-[hsl(169,87%,28%)] w-1/4 text-xl m-3 text-white"
    >
      View Flight Details
    </button>
    <div id="flightDetails" class="p-5">
      <!-- Flight data will be injected here -->
    </div>

    <script>
      async function fetchFlightDetails() {
        try {
          const response = await fetch("http://localhost/flightdetails.php");
          const data = await response.json();

          const flightDetailsContainer =
            document.getElementById("flightDetails");
          flightDetailsContainer.innerHTML = "";

          if (data.length > 0) {
            data.forEach((flight) => {
              const flightInfo = document.createElement("div");
              flightInfo.className = "bg-gray-100 p-4 m-2 rounded-lg shadow-lg";
              flightInfo.innerHTML = `
          <p><strong>Flight Number:</strong> ${flight.flightNo}</p>
          <p><strong>Departure:</strong> ${flight.source}</p>
          <p><strong>Arrival:</strong> ${flight.destination}</p>
          <p><strong>Arrival Time:</strong> ${flight.arrival}</p>
          <p><strong>Departure Time:</strong> ${flight.departure}</p>
        `;
              flightDetailsContainer.appendChild(flightInfo);
            });
          } else {
            flightDetailsContainer.innerHTML =
              "<p>No flight details available.</p>";
          }
        } catch (error) {
          console.error("Error fetching flight details:", error);
          document.getElementById("flightDetails").innerHTML =
            "<p>Error fetching flight details.</p>";
        }
      }

      document
        .getElementById("viewFlightBtn")
        .addEventListener("click", fetchFlightDetails);
    </script>
    <!-- Update Flight Info -->
    <!-- <h2 class="font-bold text-3xl ml-5">Update Flight Information</h2> -->
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
