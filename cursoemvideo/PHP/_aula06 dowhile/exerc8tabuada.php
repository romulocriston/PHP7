<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Exerc 8 - TABUADA</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc8tabuada.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <?php 
            $v = isset($_GET["pTab"]) ? $_GET["pTab"] : 0;
            $c = 1;
            do{
                echo "$v X $c = ".($c*$v)."<br/>";
                $c++;
            } while ($c <= 10);
            
            /*while ($c <=10) {
                echo "$v X $c = ".($c*$v)."<br/>";
                $c++;
            }*/
            
        ?>
        </p>
            <a href="exerc8tabuada.html" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>