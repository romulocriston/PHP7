<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>CONTADOR PERSONALIZÁVEL</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc7whiledesafio.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <?php 
            $inicio = isset($_GET["pIni"]) ? $_GET["pIni"] : 0;
            $final = isset($_GET["pFim"]) ? $_GET["pFim"] : 0;
            $incremento = isset($_GET["pInc"]) ? $_GET["pInc"] : 0;
            if ($inicio < $final) {
                while ($inicio <= $final){
                    echo "$inicio ";
                    $inicio += $incremento;
                }
            } else {
                while ($inicio >= $final){
                    echo "$inicio ";
                    $inicio -= $incremento;
                }
            }
        ?>
        </p>
            <a href="exerc7whiledesafio.html" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>