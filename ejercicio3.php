<?
class MiCalculadora {
var $numero1;
var $numero2;
var $operador;
var $resultado;
function sumar($num1,$oper,$num2){
    $numero1 = $num1;
    $numero2 = $num2;
    $operador = $oper;
    if($operador == "+"){
        $resultado = $numero1+$numero2;
    }   
    return $resultado;
}
function resta($num1,$oper,$num2){
    $numero1 = $num1;
    $numero2 = $num2;
    $operador = $oper;
    if($operador == "-"){
        $resultado = $numero1-$numero2;
    }
    return $resultado;
}
function multiplicar($num1,$oper,$num2){
    $numero1 = $num1;
    $numero2 = $num2;
    $operador = $oper;
    if($operador == "*"){
        $resultado = $numero1*$numero2;
    }
    return $resultado;
}
function dividir($num1,$oper,$num2){
    $numero1 = $num1;
    $numero2 = $num2;
    $operador = $oper;
    if($operador == "/"){
        $resultado = $numero1/$numero2;
    }
    return $resultado;
}
}
$mycalc = new MiCalculadora(12, 6);
echo $mycalc->sumar("12","+","6")."<br>".$mycalc->multiplicar("12","*","6");
?>