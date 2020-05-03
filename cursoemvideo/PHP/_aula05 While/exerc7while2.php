<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Estrutura Repetição WHILE</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc7while3.php" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <form method="GET" action="exerc7while3.php">
            <fieldset><legend> Cálculo </legend>
                <?php
                    # Vai criar 5 caixas de texto.
                    #usar a condição SE dentro do WHILE para definir o foco automático para o 1º campo (Valor 1).
                    $c = 1;
                    while ($c <=5){
                    if ($c == 1) {
                        echo "<label for='tNum$c'> Valor $c: </label>
                        <input type='number' name='pNum$c' id='tNum$c' min='0' max='100' autofocus> <br/>";
                        
                    } else {
                        echo "<label for='tNum$c'> Valor $c: </label>
                        <input type='number' name='pNum$c' id='tNum$c' min='0' max='100'><br/>";
                    }
                        $c++;
                    }
                    
                ?>
            </fieldset>
            <input type="submit" value="Enviar" class="btnvoltar"><br/><br/>
        </form>
        
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>