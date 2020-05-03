<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Gerenciando Elementos</title>
    <style>
        div {
        font-size: 20px; 
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .4); 
        height: auto;
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
                /* #MANIPULANDO VETORES
                $vetor = array(3, 5, 8, 2);
                print_r($vetor);
                echo "<br/>";
                
                array_push($vetor,10,20); #insere valor na última posição do vetor
                print_r($vetor);
                echo "<br/>";

                array_pop($vetor); #mesmo que UNSET. Remove o valor da última posição do vetor
                #unset($vetor[5]);
                print_r($vetor);
                echo "<br/>";
                */

                /* #MANIPULANDO MATRIZES
                $matriz = array(array(5,"dez"), array(15,20), array(25,30));
                print_r($matriz); 
                echo "<br/>";
                
                array_push($matriz,[40,50]); #insere valor na última posição da matriz
                print_r($matriz); 
                echo "<br/>";
                
                array_pop($matriz); #mesmo que UNSET. Remove o valor da última posição da matriz
                #unset($matriz[3][1]);
                print_r($matriz); 
                */

                /* LIFO (Last In First OUT - último a entrar é o primeiro a sair)
                array_push($v) - inserir no final
                array_pop($v) - remover do final
                */
                echo "<br/>";
                
                ###################################################################################

                /*
                $vetor = array(3, 5, 8, 2);
                print_r($vetor);
                echo "<br/>";

                array_unshift($vetor,7);
                print_r($vetor);
                echo "<br/>";

                array_shift($vetor);
                print_r($vetor);
                echo "<br/>";
                */
                /*
                $matriz = array(array(5,"dez"), array(15,20), array(25,30));
                print_r($matriz); 
                echo "<br/>";
                
                array_unshift($matriz,[40,50]); #insere valor na primeira posição da matriz
                print_r($matriz);
                echo "<br/>";
                
                array_shift($matriz); #Remove o valor da primeira posição da matriz
                print_r($matriz);
                echo "<br/>";
                */
                /* FIFO (First In First OUT - primeiro a entrar é o primeiro a sair)
                array_unshift($v) - inserir no ínicio
                array_pop($v) - remover do ínicio
                */
                
            ?>
        </pre>
    </div>
</body>
</html>