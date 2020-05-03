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
        <a class=voltar href="exerc7while2.php" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <form method="GET" action="exerc7while3.php">
            <fieldset><legend> Resposta </legend>
                <?php
                   
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
                    # Vai imprimir na tela o valor das 5 caixas de texto
                    $i = 1;
                    while ($i <= 5){
                        $v = "num".$i;
                        echo "Valor $i: ".$$v."<br/>";
                        $i++;
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