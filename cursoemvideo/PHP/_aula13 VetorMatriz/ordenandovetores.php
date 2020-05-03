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
                echo "<br/>";
                $vetor = array(3, 5, 8, 2);
                print_r($vetor);
                echo "<br/>";

                #sort($vetor);      #ordena somente os VALORES do vetor
                #rsort($vetor);     #ordena somente os VALORES de forma REVERSA
                #asort($vetor);     #ordena os VALORES junto com os INDICES do vetor
                #arsort($vetor);    #ordena os VALORES de forma REVERSA junto com os INDICES do vetor
                print_r($vetor);
                echo "<br/>";
                */

                $vetor = array(1=>3, 3=>5, 0=>8, 2=>2);
                print_r($vetor);
                echo "<br/>";
                
                #ksort($vetor);      #ordena as chaves (INDICES) com os VALORES do vetor
                krsort($vetor);      #ordena as chaves (INDICES) de forma reversa com os VALORES do vetor
                print_r($vetor);
                echo "<br/>";


                /* 
                $vtrletras = array("C", "A", "B", "F");
                print_r($vtrletras);
                echo "<br/>";

                sort($vtrletras);
                #rsort($vtrletras);
                print_r($vtrletras);
                echo "<br/>";
                */

            ?>
        </pre>
    </div>
</body>
</html>