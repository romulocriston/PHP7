<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Function SOMA</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc10rotinas.php" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <form method="GET" action="exerc10rotinas.php">
            <fieldset><legend>Function SOMA</legend>
                <p><label for="num1">Número 1:</label>
                    <input type="number" name="pNum1" id="num1" min="0" required autofocus></p>
                <p><label for="num2">Número 2:</label>
                    <input type="number" name="pNum2" id="num2" min="0" required autofocus></p>
            </fieldset>
            <input type="submit" value="Calcular" class="btnvoltar">
        </form>
        
        <?php 
            /*
            $n1 = isset($_GET["pNum1"])?$_GET["pNum1"]:0;
            $n2 = isset($_GET["pNum2"])?$_GET["pNum2"]:0;
            echo "<br/>";
            
            # 1 - FUNÇÃO QUE RETORNA VALOR
            function soma ($num1,$num2){
                return $num1 + $num2;
            }
            echo "<p>A soma vale: "."<span class='foco'>".$res=soma($n1,$n2)."</span></p><br/>";
            */

            # 2 - FUNÇÃO COM PARAMETROS DINAMICOS
            function soma(){
                $p = func_get_args();
                $tot_args = func_num_args();
                $s = 0;
                echo "A soma de : ";
                for ($indice=0; $indice<$tot_args; $indice++){
                    $s += $p[$indice];
                    echo "$p[$indice], ";
                }
                return $s;
            }
            $resp = soma(10,10,10,25,10,10,10);
            echo "<br/> $resp";

            /* 
            # 3 - FUNÇÃO QUE NÃO RETORNA VALOR, OU SEJA, UM PROCEDIMENTO
            function soma ($a,$b){
                $s = $a + $b;
                echo "A soma vale : $s";
            }
            soma(5,10);
            soma(10,20);
            $x=20; $y=30; soma($x,$y);
            */
        ?>
        
    </div>
</body>
</html>