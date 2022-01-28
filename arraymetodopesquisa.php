<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Metodo de pesquisa</title>
</head>

<body>

      <?php
 
         //in_array()
         //array_search()

         $lista_frutas = ['Banana','Maca','Morango','Uva'];
        
        echo '<pre>';
        print_r ($lista_frutas);
        echo '</pre>';

       $existe = in_array('Uva',$lista_frutas);
       if($existe){
           echo 'Existe';
        }
        else{
            echo 'Não existe';
        }
        echo '<hr>';
        //retorna o indicie
        echo array_search('Uva',$lista_frutas);
        
    
     echo '<hr>';

     $lista_coisas = ['frutas'=> $lista_frutas, 
                    'pessoas'=>['Joao','Maria']];
    echo '<pre>';
      print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';
         
       echo in_array('Uva',$lista_coisas['frutas']);
     ?>



</body>

</html>