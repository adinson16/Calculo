<?php
   //echo 'El valor obtenido es'
   $num1=$_GET['n1'];
   $num2=$_GET['n2'];
   $operacion=$_GET['operacion'];

   if($operacion== 'Sumar')
   {
     $total= $num1+$num2;
   }
   else if($operacion== 'Restar')
   {
      $total= $num1-$num2;
   }
   else if($operacion== 'Multiplicar')
   {
      $total= $num1*$num2;
   }
   else if($operacion== 'Division')
   {
      $total= $num1/$num2;
   }
    
   echo '<h1>El resultado es '.$total.'</h1>';

?>
<!DOCTYPE html>

<html>

    <head>

        <!--Import Google Icon Font-->

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <title>Calculadora</title>

    </head>

<body>
</body>

</html>