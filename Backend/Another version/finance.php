

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
    <title>FINANCE</title>
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
    <div class="grid grid-cols-1 justify-items-center text-white "></div>
      <button
        id="viewTotalTicketSaleBtn"
        class="btn bg-[hsl(9,100%,70%)] hover:bg-[hsl(9,100%,60%)] w-1/4 text-xl text-white mb-3"
      >
        Total Ticket Sale
      </button>
      <button
        id="viewTotalIncomeBtn"
        class="btn bg-[hsl(180,38%,33%)] hover:bg-[hsl(180,38%,23%)] w-1/4 text-xl text-white mb-3"
      >
        Total Income From Ticket
      </button>
      <button
        id="viewFuelCostBtn"
        class="btn bg-[hsl(211,28%,29%)] hover:bg-[hsl(211,28%,19%)] w-1/4 text-xl text-white mb-3"
      >
        Fuel Cost
      </button>
    </div>

    <div id="detailsSection" class="p-5 text-black"></div>

    <script>
      // Fetch Total Ticket Sale Data
      async function fetchTotalTicketSale() {
  try {
    const response = await fetch("http://localhost/ticket.php");
    const data = await response.json();

    const detailsSection = document.getElementById("detailsSection");
    detailsSection.innerHTML = "";

    if (data && data.length > 0) {
      data.forEach((item) => {
        detailsSection.innerHTML += `
          <p><strong>Flight ID:</strong> ${item.FlightID}</p>
          <p><strong>Total Tickets Sold:</strong> ${item.TotalSaleFromTicket}</p>
        `;
      });
    } else {
      detailsSection.innerHTML = "<p>No ticket sale data available.</p>";
    }
  } catch (error) {
    console.error("Error fetching total ticket sale:", error);
    document.getElementById("detailsSection").innerHTML = "<p>Error fetching total ticket sale.</p>";
  }
}
      async function fetchTotalIncome() {
        try {
          const response = await fetch("http://localhost/income.php"); // Use your php file name here
          const data = await response.json();

          const detailsSection = document.getElementById("detailsSection");
          detailsSection.innerHTML = "";
          if (data && data.length > 0) {
  let html = '';
  data.forEach((item) => {
    html += `
      <p><strong>Flight ID:</strong> ${item.FlightID}</p>
      <p><strong>Total Income from Tickets:</strong> $${item.TotalAmountFromTicket}</p>
    `;
  });
  detailsSection.innerHTML = html;
} else {
  detailsSection.innerHTML = "<p>No income data available.</p>";
}
        } catch (error) {
          console.error("Error fetching total income:", error);
          document.getElementById("detailsSection").innerHTML =
            "<p>Error fetching total income from tickets.</p>";
        }
      }

      async function fetchFuelCost() {
        try {
          const response = await fetch("http://localhost/fuel.php");
          const data = await response.json();

          const detailsSection = document.getElementById("detailsSection");
          detailsSection.innerHTML = "";

          if (data && data.length > 0) {
  let html = '';
  data.forEach((item) => {
    html += `
      <p><strong>Flight ID:</strong> ${item.FlightID}</p>
      <p><strong>Total Income from Tickets:</strong> $${item.FuelCost}</p>
    `;
  });
  detailsSection.innerHTML = html;
} else {
  detailsSection.innerHTML = "<p>No income data available.</p>";
}
              
        } catch (error) {
          console.error("Error fetching fuel cost:", error);
          document.getElementById("detailsSection").innerHTML =
            "<p>Error fetching fuel cost.</p>";
        }
      }

      document
        .getElementById("viewTotalTicketSaleBtn")
        .addEventListener("click", fetchTotalTicketSale);
      document
        .getElementById("viewTotalIncomeBtn")
        .addEventListener("click", fetchTotalIncome);
      document
        .getElementById("viewFuelCostBtn")
        .addEventListener("click", fetchFuelCost);
    </script>
   
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
