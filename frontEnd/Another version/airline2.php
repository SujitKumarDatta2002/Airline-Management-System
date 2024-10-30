<?php

require_once("dbconnect.php");


$query ="select * from airline ";
$result= mysqli_query($conn,$query);

?>

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
    

   

    <div class="card-body">
      <table class="table table-bordered text-center">
        <tr class="bg-dark text-white">
          <td> AirlineID</td>
          <td> Name</td>
          <td> MaintenanceCost</td>
          <td> AircraftType </td>
          <td> AircraftPurchaseCost</td>
          

        </tr>
        <tr>
  
        <?php
          while($row =mysqli_fetch_assoc($result))
          {
        ?>
          <td><?php echo $row['AirlineID']?></td>
          <td><?php echo $row['Name']?></td>
          <td><?php echo $row['MaintenanceCost']?></td>
          <td><?php echo $row['AircraftType']?></td>
          <td><?php echo $row['AircraftPurchaseCost']?></td>
          
          <td><a href="#" class="btn btn-primary">Edit</a><td>
          <td><a href="#" class="btn btn-danger">Delete</a><td>

        </tr>
        <?php
         }
        ?>
      </table>

    </div>
    

  </body>
</html>