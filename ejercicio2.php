<form action="" method="post">
Ingrese un Numero:<input  type="text" name="Num"><br/>
   
    <input type="submit" />
</form>

<?php
$Num1 = $_POST['Num'];

for ($i=1; $i<=$Num1; $i++) {
    if (isPrime($i)) {
        echo "<br>El número ".$i." es primo";
    } else {
        echo "<br>El número ".$i." NO es primo";
    }
}
 
/**
* Función que determina si un numero es primo
* Tiene que recibir el numero a determinar si es primo o no
* Devuelve True o False
*/
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}
?>