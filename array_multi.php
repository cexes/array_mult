<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>

  <?php

   $lista_coisa =[];
   $lista_coisa['frutas'] = array(1=>'banana',2=>'maca', 3=>'uva');
   $lista_coisa['pessoas'] = array(1=>'Joao',2=>'Maria', 3=>'leticia');
   
   echo'<pre>';
   print_r($lista_coisa);
   echo '</pre>';
   echo '<hr>';
   echo $lista_coisa['frutas'][3];
   echo '<hr>';
   echo $lista_coisa['pessoas'][1];
 ?>
    
</body>
</html>