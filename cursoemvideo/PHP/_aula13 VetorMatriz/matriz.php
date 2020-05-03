<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>MATRIZ</title>
    <style>
        div {
        font-size: 21px; 
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .4); 
        }
    </style>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="javascript:history.go(-1)" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <pre>
            <?php  
                $matriz = array(array(5,"dez"), array(15,20), array(25,30));
                #print_r($matriz);
                echo "<br/>";
                echo "A matriz tem ".count($matriz)." elementos.";
                #var_dump($matriz);  #mostra o tipo de campo do vetor/matriz
                #var_export($matriz);
                #echo "<br/>";
                #$matriz[2][1] = 50; 
                /*
                for ($l=0; $l<count($matriz); $l++){
                    echo "array - $l <br/>";
                    for ($c=0; $c<(count($matriz)-1); $c++){
                        echo "<p>[$l][$c] => ".$matriz[$l][$c]."<br/></p>";
                    }
                } 
                */
            /*
                $list = array(  array( "ninja" , "sakuke"),
                                array( "ninja" , "naruto"),
                                array( "ninja" , "itachi")
                );
                $list[0][0] = "genin";
                $list[1][0] = "genin";
                #print_r($list);
                echo "<br/>";
                
                for ($l=0; $l<count($list); $l++){
                    for ($c=0; $c<(count($list)-1); $c++){
                        echo "[$l][$c] => ".$list[$l][$c]."<br/>";
                    }
                }
                echo "<br/><br/>";
               
                foreach($list as $v){
                    echo "$v - ";
                }
                */
            ?>
        </pre>
    </div>
</body>
</html>