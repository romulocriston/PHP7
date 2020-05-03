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
        <a class=voltar href="javascript:history.go(-1)" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <?php 
            # include permite chamar as funções dentro do arq funcoes.php. Caso ele não exista, o código continua tentando até dar erro.
            # require caso ele não exista, o código não é chamado e dá erro fatal.
            # include_once e require_once carrega o arq funcoes.php somente uma vez. Permitindo fazer a chamada de funções novamente.
            include "funcoes.php"; 
            echo "<h2> Testando novas funções </h2>";
            ola();
            mostraValor(100);
            echo "<h2> Finalizando ... </h2>";
            
            include_once "funcoes.php"; 
            echo "<h2> Testando novas funções </h2>";
            ola();
            mostraValor(100);
            echo "<h2> Finalizando Include ... </h2>";
            
            require_once "funcoes.php"; 
            echo "<h2> Testando novas funções </h2>";
            ola();
            mostraValor(100);
            echo "<h2> Finalizando Require... </h2>";
        ?>
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>