 <?php

 
require 'header.php';



 ?>
 
 <?php 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mutante';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
$consulta = "SELECT id,adn,condicion    FROM products";
$resultado = mysqli_query($db, $consulta);
mysqli_data_seek($resultado,0);


?>
<div>
    <table border="1">
        <thead>
            <td>id</td>
            <td>ADN</td>
            <td>CONDICION</td>
            
        </thead>
        <tbody>
<?php
while($fila = mysqli_fetch_array($resultado))
{
?>
				<tr>
                <td><?php echo filtrado($fila['id']);?></td>
                <td><?php echo filtrado($fila['adn']);?></td>
                <td><?php echo filtrado($fila['condicion']);?></td>
				</tr>
<?php
}
?>
</tbody>
    </table>
</div>
 <?php

 
require 'FOOTER.php';

 ?>