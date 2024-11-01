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
    <title>AIRLINE</title>
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
    <div class="grid grid-cols-1 justify-items-center text-white">
      <button
        id="viewMaintenanceBtn"
        class="btn bg-[hsl(250,23%,40%)] hover:bg-[hsl(250,23%,30%)] w-1/4 text-xl text-white mb-3"
      >
        Maintenance Cost
      </button>
      <button
        id="viewAircraftBtn"
        class="btn bg-[hsl(186,64%,44%)] hover:bg-[hsl(186,64%,34%)] w-1/4 text-xl text-white mb-3"
      >
        View Aircraft Details
      </button>
    </div>

    <div id="detailsSection" class="p-5 text-black"></div>

    <script>
      // Fetch Maintenance Cost Data
      async function fetchMaintenanceCost() {
        try {
          const response = await fetch("http://localhost/maintenancecost.php");
          const data = await response.json();

          const detailsSection = document.getElementById("detailsSection");
          detailsSection.innerHTML = "";
          if (data.length > 0) {
            data.forEach((item) => {
              const itemDiv = document.createElement("div");
              itemDiv.className = "bg-gray-100 p-4 m-2 rounded-lg shadow-lg";
              itemDiv.innerHTML = `
                <p><strong>Aircraft ID:</strong> ${item.AirlineID}</p>
                <p><strong>Name:</strong> ${item.Name}</p>
                <p><strong>Maintenance Cost:</strong> ${item.maintenance_cost}</p>
              `;
              detailsSection.appendChild(itemDiv);
            });
          } else {
            detailsSection.innerHTML =
              "<p>No maintenance cost data available.</p>";
          }
        } catch (error) {
          console.error("Error fetching maintenance data:", error);
          document.getElementById("detailsSection").innerHTML =
            "<p>Error fetching maintenance cost.</p>";
        }
      }

      async function fetchAircraftDetails() {
        try {
          const response = await fetch("http://localhost/craft.php");
          const data = await response.json();

          const detailsSection = document.getElementById("detailsSection");
          detailsSection.innerHTML = "";
          if (data.length > 0) {
            data.forEach((aircraft) => {
              const aircraftDiv = document.createElement("div");
              aircraftDiv.className =
                "bg-gray-100 p-4 m-2 rounded-lg shadow-lg";
              aircraftDiv.innerHTML = `
                <p><strong>Aircraft ID:</strong> ${aircraft.AirlineID}</p>
                <p><strong>Name:</strong> ${aircraft.Name}</p>
                <p><strong>Aircraft Type:</strong> ${aircraft.AircraftType}</p>
                <p><strong>Aircraft Purchase Cost:</strong> ${aircraft.AircraftPurchaseCost}</p>
              `;
              detailsSection.appendChild(aircraftDiv);
            });
          } else {
            detailsSection.innerHTML = "<p>No aircraft details available.</p>";
          }
        } catch (error) {
          console.error("Error fetching aircraft data:", error);
          document.getElementById("detailsSection").innerHTML =
            "<p>Error fetching aircraft details.</p>";
        }
      }

      document
        .getElementById("viewMaintenanceBtn")
        .addEventListener("click", fetchMaintenanceCost);
      document
        .getElementById("viewAircraftBtn")
        .addEventListener("click", fetchAircraftDetails);
    </script>

    <!-- <div class="grid grid-cols-1 justify-items-center text-white">
      <button
        class="btn bg-[hsl(250,23%,40%)] hover:bg-[hsl(250,23%,30%)] w-1/4 text-xl text-white mb-3"
      >
        Maintenance Cost
      </button>
      <button
        class="btn bg-[hsl(186,64%,44%)] hover:bg-[hsl(186,64%,34%)] w-1/4 text-xl text-white mb-3"
      >
        View Aircraft Details
      </button>
    </div> -->

    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
