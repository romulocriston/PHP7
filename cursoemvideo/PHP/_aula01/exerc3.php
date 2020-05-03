<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div id="cabecalho">
        <p> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <h3> Operador de comparação e unário </h3>
        <?php
             $v1 = $_GET["a"]; 
             $v2 = $_GET["b"];
             $op = $_GET["c"];
             $resposta = ($op == "s") ? $v1+$v2  :$v1*$v2;
             echo "Operador escolhido foi: $op e a resposta é: " . $resposta;
             $n1 = 3; $n2 = "3"; 
             
             $r = ($n1==$n2) ? "SIM - mesmo valor" : "NÃO - tipos diferentes";
             echo "<br/><br/> $r: $n1 é igual a $n2";
            
             $r = ($n1===$n2) ? "SIM - mesmo valor" : "NÃO - tipos diferentes";
             echo "<br/> $r";
             $nota1 = $_GET["a"]; $nota2 = $_GET["b"];
             $med = ($nota1+$nota2)/2;
             $sit = ($med>=7.0)?"Aprovado":"Reprovado";
             echo "<br/><br/> Média das notas: $med";
             echo "<br/> Situação: $sit";

             //Outra forma de fazer sem a variavel média
             echo "<br/> Situação: ". (($nota1+$nota2)/2>=7.0?"Aprovado":"Reprovado");
             $sit = ($med>=7.0) ? "Aprovado": (($med<7 && $med>=5) ? "Recuperação" : "Reprovado");
             echo "<br/> Situação: ". $sit;
             "<br/>";
             
             //date_default_timezone_set('America/Sao_Paulo');
             $ano = $_GET["d"];
            echo "<br/> Idade: ". ($idade=(date("Y")-$ano));
            $sit = ($idade<65 && $idade>=18)?"Voto obrigatório":"Voto NÃO obrigatório";
            echo "<br/> Situação: ". $sit;
            echo "<br/> Data atual: ". date("D, d/M/Y - H:i");
             
        ?>
    </div>
</body>
</html>