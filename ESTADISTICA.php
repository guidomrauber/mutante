 <?php

 
require 'header.php';



 ?>
 <?php
// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mutante';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result1 = $db->query("UPDATE programming_languages SET rating=(SELECT  COUNT(*)  FROM products WHERE condicion = 'mutante') WHERE id='1'");
$result2 = $db->query("UPDATE programming_languages SET rating=(SELECT  COUNT(*)  FROM products WHERE condicion = 'no mutante') WHERE id='2'");
$result = $db->query("SELECT name,rating FROM programming_languages WHERE status = '1' ORDER BY rating DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Languaje', 'Rating'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['name']."', ".$row['rating']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'MUTANTES --- NO MUTANTES ',
        width: 900,
        height: 300,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>
</body>
</html>
 
 <?php

 
require 'FOOTER.php';



 ?>





 
