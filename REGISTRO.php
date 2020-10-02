 <?php

 
require 'header.php';



 ?>
 <!DOCTYPE html>
<html>
<body background="images/fondo.jpg">
<div style="text-align:center">
    <h1 style="color:blue;font-size:400%;text-align:center;">
       COMPROBADOR DE MUTANTE
    </h1>
    </div>
 <div class="mitad">
        <div class="peticiones">
            <br>
			<h2 style="color:white;font-size:150%;text-align:center;">COMPROBAR INGRESE 6 GRUPOS DE 6  ENTRE ACTG</h2>
            <br><br>
			<form align = "center" action="mutante.php" method="POST">
                <input type="text" placeholder="DNA"  name="dna"  /><br>
				<input type="text" placeholder="DNA2"  name="dna2"  /><br>
				<input type="text" placeholder="DNA3"  name="dna3"  /><br>
				<input type="text" placeholder="DNA4"  name="dna4"  /><br>
				<input type="text" placeholder="DNA5"  name="dna5"  /><br>
				<input type="text" placeholder="DNA6"  name="dna6"  />
             
			 <br><br>
			 
			<input type="submit" value="Submit">   
            </form>

        </div>
        
        

    </div>
 


</body>
</html>


 
 <?php

 
require 'FOOTER.php';



 ?>





 
