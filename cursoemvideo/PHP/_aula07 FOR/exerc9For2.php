<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Repetição FOR</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc9For.php" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <form method="POST" action="exerc9For.php"> 
            <fieldset>
            Escolha a tabuada: <select name="pTab"> 
                    <?php 
                        for ($c=1 ; $c <= 10 ; $c++){
                            echo "<option value='$c'> $c </option>";
                        }
                    ?>
                </select><br/>
                <input type="submit" value="Calcular" class="btnvoltar">
            </fieldset>
        </form>
        </p>
            <a href="exerc9For.php" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>