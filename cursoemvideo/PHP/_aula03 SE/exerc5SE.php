<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Condição SE</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc5SE.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <?php 
            $nome = isset($_GET["pNome"]) ? $_GET["pNome"] : "Sem nome";
            $ano = isset($_GET["pAno"]) ? $_GET["pAno"] : "1900";
            $idade = date("Y")-(int)$ano;
            if ($idade < 16){
                $sit = "não pode votar";
                $dir = "não pode dirigir.";
            } elseif ($idade >= 16 && $idade < 18){
                $sit = "o voto é opcional";
                $dir = "não pode dirigir.";
            } elseif ($idade >= 18 && $idade < 65){
                $sit = "o voto é obrigatório";
                $dir = "pode dirigir.";
            } else{
                $sit = "o voto é opcional";
                $dir = "pode dirigir.";
            }
            echo "O(A) Sr(a) $nome, tem ".$idade." anos e ".$sit ." e ".$dir."<br/>";
            $nota1 = isset($_GET["pNota1"]) ? $_GET["pNota1"] : "Sem nota1";
            $nota2 = isset($_GET["pNota2"]) ? $_GET["pNota2"] : "Sem nota2";
            $med = ((float)$nota1+(float)$nota2)/2;
            if ($med <5){
                $sit = "Reprovado";
            } elseif ($med >=5 && $med <7){
                $sit = "Recuperação";
            } else {
                $sit = "Aprovado";
            }
            echo "<br/><hr><br/>";
            echo "A média entre <span class='foco'>".number_format((float)$nota1,1)."</span> e <span class='foco'>".number_format((float)$nota2,1)."</span> é igual a <span class='foco'>".number_format((float)$med, 2)."</span>";
            echo "<br/> Situação do aluno: <span class='foco'>$sit</span>.";
        ?>
        </p>
            <a href="exerc5SE.html" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>