<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <?php 
        $texto = isset($_GET["tTexto"]) ? $_GET["tTexto"] : "Texto não informado";
        $tamanho = isset($_GET["tTam"]) ? $_GET["tTam"] : "14pt";
        $cor = isset($_GET["tCor"]) ? $_GET["tCor"] : "#000000";
    ?>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a href="exerc4Form.html" title="Formulário">
            <img src="../_css/_imagens/back.png" width="40px">
        </a>
        <a class="botaovoltar" href="exerc4Form.html" title="Formulário">
            <img src="../_css/_imagens/back2.png" width="40px">
        </a>
        <?php
            // isset = configura a variavel caso não seja passado nenhum valor pelo GET/POST.
                $nome = isset($_GET["tNome"]) ? $_GET["tNome"] : "Nome não informado";  
                #$nomep = $_GET["tNome"];
                $senha = isset($_GET["tSenha"]) ? $_GET["tSenha"] : "Senha não informada";
                $email = isset($_GET["tMail"]) ? $_GET["tMail"] : "E-mail não informado";
                $ano = isset($_GET["tAno"]) ? $_GET["tAno"] : 0;
                $sexo = isset($_GET["tSexo"]) ? $_GET["tSexo"] : "Sexo não informado";
                //$data = $_GET["tData"];
                echo "<br/><br/><hr>";
                #$idade = date("Y") - (int)$ano;
                echo " O nome é: "."<b>".$nome."</b>";
                echo "<br/> E-mail: "."<b>".$email."</b>";
                echo "<br/> Sexo: "."<b>".$sexo."</b>"; 
                echo "<br/> Idade: "."<b>". (date("Y") - (int)$ano)."</b>";      
                #echo "<br/> Idade: "."<b>". $idade."</b>";
                echo "<br/><br/><hr>";
                echo "<span class='texto'> $texto </span>";


                //$rq = sqrt($qd);
                //echo "<br/> Quadra: ". number_format($rq, 2);
            ?>
            
    </div>
    
</body>
</html>