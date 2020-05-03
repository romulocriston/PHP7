<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>MODELO</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc8dowhile.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <form method="GET" action="exerc8dowhile.php">
            <fieldset><legend> Fatorial </legend>
                Número: <input type="number" name="pNum" id="cNum" size="4" min="0" max="100" autofocus required> 
                <br/><br/><input type="submit" value="Calcular"class="btnvoltar"><br/>
                <br/>
                <?php 
                    #Fatorial de número
                    $v = isset($_GET["pNum"]) ? $_GET["pNum"] : 0;
                    echo "Calculando fatorial de $v <br/>";
                    $c= $v;
                    $fat = 1;
                    
                    if ($v == 0){
                        echo "Fatorial de $v é: 1";
                    } else {
                        do{
                            $fat = $fat * $c;
                            $c--;
                        } while ($c >= 1);
                        echo "$v ! = ".number_format($fat,0, ",", ".");
                    }                        
                                       
                ?>
            </fieldset>
            
        </form>
            
        <?php 
            $cont = 1;
            do {
                echo "$cont ";
                $cont++;
            }while ($cont <= 10);
            
            echo "<br/><br/> Números impares: ";
            $c = 1;
            do {
                echo "<span class='foco'>$c</span> ";
                $c += 2;
            } while ($c <= 20);

            echo "<br/><br/> Contagem regressiva: ";
            $c=10;
            do{
                echo "<span class='foco'>$c</span> ";
                $c--;
            } while ($c >=1);
        ?>
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>