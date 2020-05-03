<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>NRO PRIMO</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc8nroprimo.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <form>
            <fieldset><legend>Cálculo de número primo</legend>
                <?php 
                    $n = isset($_GET["pNump"]) ? $_GET["pNump"] : 1;
                    print "<h2> Analisando o número: $n <h2>";
                    $tot = 0;
                    echo "Valores múltiplos: ";
                    for ($c=1; $c<=$n; $c++){
                        if ($n%$c == 0) {
                            $tot+=1; 
                            $vm = $c; 
                            echo "$vm";
                        } 
                    }
                    
                    echo "<br/> Total de múltiplos: $tot";
                    if ($tot > 2) {
                        echo "<br/> Resultado: $n <span class='foco'>não é primo</span>.";
                    } else{
                        echo "<br/> Resultado: $n <span class='foco'>é primo</span>.";
                    }
                    
                ?>
            </fieldset>

        </form>
        
        
    </div>
</body>
</html>