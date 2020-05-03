<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estiloform.css">
    <title>FORMULÁRIO</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div id="formul">
        <a class=voltar href="javascript:history.go(-1)" title="Voltar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <form method="GET" action="formulario.php">
            <fieldset><legend> Usuário </legend>
            <?php
                echo "<label for id='nome'> <b>Nome:</b> ";
                    $nome = isset($_GET["pNome"])?$_GET["pNome"]:"Sem nome";
                    print "$nome"."<br/><br/>";
                    $i = 1;

                    # Obtém via (GET) os 5 valores enviado pelo formulário 
                    while ($i <= 5){
                        $v = "num".$i;
                        $url = "pNum".$i;
                        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                        $i++;
                    }
                    # Imprime na tela os 5 valores 
                    $i = 1;
                    while ($i <= 5){
                        $v = "num".$i;
                        print "Valor $i: ".$$v."<br/>";
                        $i++;
                    }echo "<br/>";

                    # Obtém via (GET) os 2 e-mails enviado pelo formulário
                    for ($c=1; $c<=2; $c++){
                        $e = "email".$c;
                        $url = "pMail".$c;
                        $$e = isset($_GET[$url])?$_GET[$url]:"Sem e-mail $c";
                    }
                    # Imprime na tela os 2 e-mails
                    for ($c=1; $c<=2; $c++){
                        $e = "email".$c;
                        print "E-mail$c: ".$$e."<br/>";
                    }echo "<br/>";

                    # Obtém via (GET) as 2 cores enviadas pelo formulário
                    for ($c=1; $c<=2; $c++){
                        $cor = "cor".$c;
                        $url = "pCor".$c;
                        $$cor = isset($_GET[$url])?$_GET[$url]:"#777777";
                    }
                    # Imprime na tela as 2 cores
                    for ($c=1; $c<=2; $c++){
                        $cor = "cor".$c;
                        print "Cor$c: ".$$cor."<br/>";
                    }echo "<br/>";
                    
                    $qtde = isset($_GET["pQtde"])?$_GET["pQtde"]:0;
                    print "<b>Quantidade:</b> $qtde";
            ?>
                
            </fieldset>
        </form>
        
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>