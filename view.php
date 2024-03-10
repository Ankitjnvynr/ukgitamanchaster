
<?php 
include 'partials/_db.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pratham Leads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11294526822">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11294526822');
</script>
  </head>
  <body>
  	
  	
<div class="container"> 
  	
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
  	
  	

<?php



$sql = "SELECT * FROM `form_submissions`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo "Total ".$num ." Entries found<br>";
// echo " Entry Found <br>";
?>
<button class="btn btn-primary" onclick="ExportToExcel('xlsx')">Download Excel sheet </button>
<?php
// Display the rows returned by the sql query
if($num> 0){
	$num1=1;
    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
       //echo $row['name'] .  ". Hello ". $row['phone'] ." Welcome to ". $row['email'] ."on".$row['date'];

        echo  "<tr>
      <th scope='row'>".$num1."</th>
      <td>".$row['country']."</td>
      <td>".$row['name']."</td>
      <td>".$row['phone']."</td>
      <td>".$row['email']."</td>
      
    </tr>";
        $num1++;
    }
}


?>




  	
   
  	
  	
  	
  	
  </tbody>
</table>
    
    </div>
   
    <script>

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('tbl_exporttable_to_xls');
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
                XLSX.writeFile(wb, fn || ('Pratham.' + (type || 'xlsx')));
        }

    </script>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
  </body>
</html>


