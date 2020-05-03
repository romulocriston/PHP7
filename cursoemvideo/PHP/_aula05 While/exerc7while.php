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
        <a class=voltar href="exerc7while.php" title="Home">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <form method="GET" action="exerc7while.php">
            <fieldset><legend> Cálculo </legend>
                <?php
                    # Vai criar 5 caixas de texto.
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
                    # Vai buscar os dados na URL das 5 caixas de texto
                    # $v recebe num1, num2 até num5
                    # $url recebe o nome da variável pNum1, pNum2 até pNum5
                    # $$v cria uma variável da variável -> $$v cria $num1 que vai receber o GET, até $num5
                    $i = 1;
                    while ($i <= 5){
                        $v = "num".$i;
                        $url = "pNum".$i;
                        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                        $i++;
                    }
                ?>
            </fieldset>
            <input type="submit" value="Enviar" class="btnvoltar"><br/><br/>
        </form>
        <form method="GET" action="exerc7while.php">
            <fieldset><legend> Resposta </legend>
            <?php 
                # Vai imprimir na tela o valor das 5 caixas de texto
                $i = 1;
                while ($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i: ".$$v."<br/>";
                    $i++;
                }
            ?>
        </fieldset>
        </form>
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>