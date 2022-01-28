<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, null and empty</title>
</head
>
<body>
  
 <?php 

    //false/true = boolean
    //null e empty = valores especiais

    $func1 = null; 
    $func2 = '';
    $func3 = false;

    if(is_null($func1)){
        echo 'Variavel é null';
    }else{
         echo 'Não é';
    }
    echo '<hr>';
    if(is_null($func2)){
        echo 'Variavel é null';
    }else{
         echo 'Não é';
    }

    echo '<hr>';
    if(empty($func2)){
        echo 'Variavel é vazia';
    }else{
         echo 'Não é vazia';
    }

    echo '<hr>';
    if(empty($func3)){
        echo 'Variavel é vazia';
    }else{
         echo 'Não é vazia';
    }
?>
   
 
</body>
</html