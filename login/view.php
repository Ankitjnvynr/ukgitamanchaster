<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location: index.php");
    exit;
}
include '../partials/_db.php';


$show = true;

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GIEO Gita Manchaster</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>



</head>

<body>
  <?php
  include '../partials/_header.php';
  ?>
<div class="container mt-2">
  <div class="sticky d-flex justify-content-between">
    <span>
    <a href="view.php" class="btn btn-danger">Form Data</a>
    <a href="volunteer.php" class="btn btn-danger">Volunteer Data</a>
  </span>
  <a href="logout.php" class="btn btn-danger">Logout ></a>
  </div>
</div>
  <div class="container mt-4 overflow-x-scroll">

    <?php
      if($show){
        echo '
        <table class="table" id="tbl_exporttable_to_xls">
      <thead>
        <tr>
          <th scope="col">sr</th>
          <th scope="col">country</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
      </thead>
      <tbody>
        
        ';
      }
    ?>



        <?php



        $sql = "SELECT * FROM `form_submissions`";
        $result = mysqli_query($conn, $sql);

        // Find the number of records returned
        $num = mysqli_num_rows($result);
        if ($show)
          echo "Total " . $num . " Entries found<br>";
        // echo " Entry Found <br>";
        $in = "'";
        
          $gg= '<button class="btn btn-primary my-3" onclick="ExportToExcel('.$in.'xlsx'.$in.')">Download Excel sheet </button>';
         if($show) echo $gg;
        
        ?>
        <?php
        // Display the rows returned by the sql query
        if ($num > 0) {
          $num1 = 1;
          // We can fetch in a better way using the while loop
          while ($row = mysqli_fetch_assoc($result)) {
            // echo var_dump($row);
            //echo $row['name'] .  ". Hello ". $row['phone'] ." Welcome to ". $row['email'] ."on".$row['date'];
            if ($show) {
              echo "<tr>
              <th scope='row'>" . $num1 . "</th>
              <td>" . $row['country'] . "</td>
              <td>" . $row['name'] . "</td>
              <td>" . $row['phone'] . "</td>
              <td>" . $row['email'] . "</td>
              
            </tr>";
            }
            $num1++;
          }
        }
        ?>
      <?php
        if($show){
          echo '
          </tbody>
    </table>';
        }
      ?>

  </div>

  <script>
    // Create a new Date object which represents the current date and time
    var currentDate = new Date();

    // You can then get various components of the date and time from this object
    var year = currentDate.getFullYear(); // Get the current year
    var month = currentDate.getMonth() + 1;
    var day = currentDate.getDate();
    var hours = currentDate.getHours();
    var minutes = currentDate.getMinutes();
    var seconds = currentDate.getSeconds();
    var milliseconds = currentDate.getMilliseconds();


    // You can also get the entire date and time as a string
    var dateTimeString = currentDate.toString(); // Get the date and time in a string format

    // Or you can get the date and time in a specific format
    var formattedDateTime = currentDate.toLocaleString(); // Get the date and time in a localized string format

    // Output the current date and time to the console
    // formattedDateTime = formattedDateTime.substring(4, 14)
    currentStamp = day + '-' + month + '-' + year + ' ' + hours + '-' + minutes;
    

    var jsonString = JSON.stringify(currentDate);
    


    function ExportToExcel(type, fn, dl) {
      var elt = document.getElementById('tbl_exporttable_to_xls');
      var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
      return dl ?
        XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('GIEO Gita Manchaster ' + formattedDateTime + '.' + (type || 'xlsx')));
    }

  </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</body>

</html>