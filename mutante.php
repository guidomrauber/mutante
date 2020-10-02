<?php
	
	$dna = $_POST['dna'];
	$dna2 = $_POST['dna2'];
	$dna3 = $_POST['dna3'];
    $dna4 = $_POST['dna4'];
	$dna5 = $_POST['dna5'];
	$dna6 = $_POST['dna6'];
	
	$cuenta = 0;
	$inverso = 0;
?>
<?php

 
require 'header.php';



 ?>
	<?php
$dna1 = $dna.$dna2.$dna3.$dna4.$dna5.$dna6;
$ajj1 = str_split($dna);
$ajj2 = str_split ($dna2);
$ajj3 = str_split ($dna3);
$ajj4 = str_split ($dna4);
$ajj5 = str_split ($dna5);
$ajj6 = str_split ($dna6);
$dna11[0][0] = $ajj1[0];
$dna11[0][1] = $ajj1[1];
$dna11[0][2] = $ajj1[2];
$dna11[0][3] = $ajj1[3];
$dna11[0][4] = $ajj1[4];
$dna11[0][5] = $ajj1[5];
$dna11[1][0] = $ajj2[0];
$dna11[1][1] = $ajj2[1];
$dna11[1][2] = $ajj2[2];
$dna11[1][3] = $ajj2[3];
$dna11[1][4] = $ajj2[4];
$dna11[1][5] = $ajj2[5];
$dna11[2][0] = $ajj3[0];
$dna11[2][1] = $ajj3[1];
$dna11[2][2] = $ajj3[2];
$dna11[2][3] = $ajj3[3];
$dna11[2][4] = $ajj3[4];
$dna11[2][5] = $ajj3[5];
$dna11[3][0] = $ajj4[0];
$dna11[3][1] = $ajj4[1];
$dna11[3][2] = $ajj4[2];
$dna11[3][3] = $ajj4[3];
$dna11[3][4] = $ajj4[4];
$dna11[3][5] = $ajj4[5];
$dna11[4][0] = $ajj5[0];
$dna11[4][1] = $ajj5[1];
$dna11[4][2] = $ajj5[2];
$dna11[4][3] = $ajj5[3];
$dna11[4][4] = $ajj5[4];
$dna11[4][5] = $ajj5[5];
$dna11[5][0] = $ajj6[0];
$dna11[5][1] = $ajj6[1];
$dna11[5][2] = $ajj6[2];
$dna11[5][3] = $ajj6[3];
$dna11[5][4] = $ajj6[4];
$dna11[5][5] = $ajj6[5];

echo  "<font color='red'><h1>LA MATRIZ ES LA SIGUIENTE</h1></font>";
echo "<td>".$dna11[0][0]."</td>";
echo "<td>".$dna11[0][1]."</td>";
echo "<td>".$dna11[0][2]."</td>";
echo "<td>".$dna11[0][3]."</td>";
echo "<td>".$dna11[0][4]."</td>";
echo "<td>".$dna11[0][5]."</td>";
echo "</br>";
echo "<td>".$dna11[1][0]."</td>";
echo "<td>".$dna11[1][1]."</td>";
echo "<td>".$dna11[1][2]."</td>";
echo "<td>".$dna11[1][3]."</td>";
echo "<td>".$dna11[1][4]."</td>";
echo "<td>".$dna11[1][5]."</td>";
echo "</br>";
echo "<td>".$dna11[2][0]."</td>";
echo "<td>".$dna11[2][1]."</td>";
echo "<td>".$dna11[2][2]."</td>";
echo "<td>".$dna11[2][3]."</td>";
echo "<td>".$dna11[2][4]."</td>";
echo "<td>".$dna11[2][5]."</td>";
echo "</br>";
echo "<td>".$dna11[3][0]."</td>";
echo "<td>".$dna11[3][1]."</td>";
echo "<td>".$dna11[3][2]."</td>";
echo "<td>".$dna11[3][3]."</td>";
echo "<td>".$dna11[3][4]."</td>";
echo "<td>".$dna11[3][5]."</td>";
echo "</br>";
echo "<td>".$dna11[4][0]."</td>";
echo "<td>".$dna11[4][1]."</td>";
echo "<td>".$dna11[4][2]."</td>";
echo "<td>".$dna11[4][3]."</td>";
echo "<td>".$dna11[4][4]."</td>";
echo "<td>".$dna11[4][5]."</td>";
echo "</br>";
echo "<td>".$dna11[5][0]."</td>";
echo "<td>".$dna11[5][1]."</td>";
echo "<td>".$dna11[5][2]."</td>";
echo "<td>".$dna11[5][3]."</td>";
echo "<td>".$dna11[5][4]."</td>";
echo "<td>".$dna11[5][5]."</td>";
echo "</br>";
?>



<?php
$mutante = ismutant($dna11);
if ($mutante == true){
	echo  "<font color='red'><h1>EL INDIVIDUO ES MUTANTE</h1></font>";
	$condicion = 'mutante';
	}
        else {
             echo "<font color='red'><h1>EL INDIVIDUO NO ES MUTANTE</h1></font>";
			 $condicion = 'no mutante';
        }

?>
<body >
<div style="text-align:center">
    <h1 style="color:blue;font-size:400%;text-align:center;">
		LOS DATOS SON LOS SIGUIENTES
    </h1>
    </div>
 <div class="mitad">
        <div class="peticiones">
            <br>
			<form align = "center" action="guardar.php" method="POST">
                <input type="text" id ='dna' value ="<?php echo $dna1 ; ?>" name="pepe"  /><br>
				<input type="text" id = 'condicion' value ="<?php echo $condicion ; ?>" name="condicion"  /><br>
							 
			<input type="submit" value="guardar base de datos">   
            </form>

        </div>
        
        

    </div>
 


</body>
<?php 
$cuenta=0;
function isMutant($tablero){
// compara la fila 
		$linea = coincidenciaLinea($tablero);
		$cuenta=0+$linea;
// compara columna
        $inverso=coincidenciaColumna($tablero);
        $cuenta=$cuenta+$inverso;

        // compara diagonal principal
        
        $inverso=coincidenciaDiagonal($tablero);
        $cuenta=$cuenta+$inverso;
		 // compara diagonal inversa
        
        $inverso=coincidenciaInversa($tablero);
        $cuenta=$cuenta+$inverso;
if($cuenta >1 )
        {
            $Mutante = true;
        }
        else
        {
            $Mutante = false;
        }
        return $Mutante;
    }	
?>
<?php
function coincidenciaLinea($matriz) {
	$contador = 0;
	$coincidencia = 0;
	for($i = 0; $i < 6 ; $i++){
		for ($j = 0; $j < 3; $j++){
			$simbolo = $matriz[$i][$j];
			if ($simbolo == $matriz[$i][$j+1] && $simbolo == $matriz[$i][$j+2] && $simbolo == $matriz[$i][$j+3]) {
                  $contador = $contador + 1;
                  
                  return $contador;
              } 
          }
      }
   return $coincidencia;
    
        }

?>

<?php
function coincidenciaColumna($matriz) {
        
        $contador=0;
        $coincidencia=0;
 
        for ($i = 0; $i < 6; $i++) {
                for($j=0;$j<3; $j++){
            //Reiniciamos la coincidencia
            
            //Cogemos el simbolo de la fila
            $simbolo = $matriz[$j][$i];
            
                    //sino coincide ya no habra semimutante  en esta fila
                    if ($simbolo == $matriz[$j+1][$i]&& $simbolo == $matriz[$j+2][$i] && $simbolo == $matriz[$j+3][$i]) {
                        $contador = $contador + 1;
                        
                        return $contador;
                    }
                    
              }
 
        }
   return $coincidencia;
    }
?>
<?php
function  coincidenciaDiagonal($matriz) {
 
        $contador=0;
	$cont=1;
       $coincidencia=0;
        //Diagonal principal
        for($i=0;$i<3; $i++){
	$simbolo = $matriz[$i][$i];
        
                           //sino coincide ya no habra mutante en esta fila

                if ($simbolo == $matriz[$i+1][$i+1] && $simbolo == $matriz[$i+2][$i+2] && $simbolo == $matriz[$i+3][$i+3]) {
                    			
					$contador = $contador + 1;
					return $contador;
		  
                        }
         }
 return $coincidencia;
     
        }
?>
<?php
function coincidenciaInversa($matriz) {
       
        
       $contador=0;
	$cont=1;
        $coincidencia=0;
        //Diagonal principal
        
        for ($i=0;$i<3;$i++){
            
            for ($j=5;$j>2; $j--){
                $simbolo = $matriz[$i][$j];
        
               //sino coincide ya no habra mutante en esta fila

                if ($simbolo == $matriz[$i+1][$j-1]&& $simbolo == $matriz[$i+2][$j-2]&& $simbolo == $matriz[$i+3][$j-3]) {
                    
			$contador = $contador + 1;
			return $contador;
				  }
             
 
    }
        
            }
            return $coincidencia;
    }
  
            
 
?>

 

<?php

 
require 'FOOTER.php';



 ?>
