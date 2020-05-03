<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Function com referencia</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc11referencia.php" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <form method="GET" action="exerc11referencia.php">
            <fieldset><legend>Function SOMA</legend>
                <p><label for="num1">Número 1:</label>
                    <input type="number" name="pNum1" id="num1" min="0" required autofocus></p>
                <p><label for="num2">Número 2:</label>
                    <input type="number" name="pNum2" id="num2" min="0" required autofocus></p>
            </fieldset>
            <input type="submit" value="Calcular" class="btnvoltar">
        </form>
        
        <?php 
            
            $n1 = isset($_GET["pNum1"])?$_GET["pNum1"]:0;
            $n2 = isset($_GET["pNum2"])?$_GET["pNum2"]:0;
            echo "<br/>";
            
            # 1 - FUNÇÃO QUE RETORNA VALOR
            function soma (&$num1,&$num2){
                return $num1 + $num2;
            }
            echo "<p>A soma vale: "."<span class='foco'>".$res=soma($n1,$n2)."</span></p><br/>";
                     
            echo "FUNÇÃO COM PASSAGEM POR VALOR <br/>";
            function teste ($x){
                $x += 2;
                echo "X vale: $x <br/>";
            }
            $a=20; teste($a);
            echo "A vale: $a <br/><br/>";

            echo "FUNÇÃO COM PASSAGEM POR REFERENCIA <br/>";
            # qualquer alteração em "x" vai alterar "a"
            function teste2 (&$x){
                $x += 2;
                echo "X vale: $x <br/>";
            }
            $a=20; teste2($a);
            echo "A vale: $a <br/><br/>";

        ?>
        
    </div>
</body>
</html>