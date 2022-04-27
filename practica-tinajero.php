/**
* Función dividir
*
*La primer función divide dos números y retorna el resultado
*la segunda recibe un número y devuelve true si es múltiplo de 2
*y false si no lo es
*
*@author Noelia Tinajero Ortiz
*@version 7.4 php
*@param integer $num1, $num2, $num, $resultado
*@return
*{@internal Obtenemos el resultado de la operación}
*/
<?php
   function dividir($num1, $num2){
      $resultado = $num1 / $num2;
      return $resultado;
   }
   function verificarMultiplo2($num){
      if($num % 2 == 0){
         return true;
      }else{
         return false;
      }
   }
?>
