// MySQL database connection code
<?php

$connection = mysql_connect("localhost","root","","mutante") or die("Error " . mysql_error($connection));
//Fetch productos data
$sql = "SELECT * FROM products";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysql_error($connection));
//create an array
$array = array();
$i = 0;
while($row = mysql_fetch_assoc($result))
{  
    $adn = $row['adn'];
    $condicion = $row['condicion'];
    $array['cols'][] = array('type' => 'string'); 
    $array['rows'][] = array('c' => array( array('v'=> $producto), array('v'=>(int)$unidades_vendidas)) );
}
$data = json_encode($array);
echo $data;
?>