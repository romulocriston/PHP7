<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="../_css/estilo2.css">
</head>
<body>
    <div id="cabecalho">
        <p> Curso de PHP - Rômulo Criston </p>
    </div>
    <div class="esquerda">
        <?php
            $nome = (string) "Rômulo";
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            
            echo "<h3>Valores recebidos: $n1 e $n2</h3>";
            echo "A soma entre $n1 e $n2 é igual a: " . ($n1+$n2); 
            echo "<br/> A subtração entre $n1 e $n2 é igual a: " . ($n1-$n2);
            echo "<br/> Valor absoluto de $n2 é: " . abs($n2);
            echo "<br/> O valor de $n1<sup>$n2</sup> é: " . pow($n1, $n2);
            echo "<br/> A raiz quadrada de $n1 é: " . sqrt($n1);
            //ceil arredonda para cima e floor para baixo
            echo "<br/> Valor arrendondado de $n2 é: " . floor($n2);
            //pega a parte inteira do valor
            echo "<br/> A parte inteira de $n2 é: " . intval($n2);
            echo "<br/> O valor em reais de $n1 é: " . number_format($n1, 2, ",", ".");
            
            /*$var1 = 5**2;
            $var2 = pow(5,2);
            echo "No PHP 7 $var1 é igual $var2"; */
            $preco = $_GET["a"];
            $precoAcresc = $preco;
            $precoDesc = $preco;
            $precoDesc-=($precoDesc * 0.1);
            $precoAcresc+=($precoAcresc * 0.1);
            echo "<h3>Desconto usando variável de atribuição</h3>";
            echo "10% de desconto sobre $preco é: " . $precoDesc;
            echo "<br/>10% de aumento sobre $preco é: " . $precoAcresc;
            
            #Operadores de incremento
            $anoatual = $_GET["c"];
            echo "<br/> Ano atual: $anoatual e o ano anterior: " . --$anoatual; 
            ++$anoatual;
            echo "<br/> Ano posterior: " . ++$anoatual;
            
            #Variaveis referenciadas
            $aa = 3; 
            $bb = &$aa;
            $bb += 5;
            echo " <br/> Valor de A: $aa e Valor de B: $bb"; 

            # Variaveis de variaveis ou variaveis variantes
            $curso = "cursoPHP";
            $$curso = "Curso_PHP7.3";
            echo "<br/> $curso - $cursoPHP"
        
        ?>
    </div>
    <div class="direita">
        <?php
            $v1 = $_GET["d"];
            $v2 = $_GET["e"];
            $op = $_GET["f"];
            $resposta = ($op == "s")?$v1+$v2:$v1*$v2;
            echo "Operador escolhido foi: $op e a resposta é: " . $resposta;
        ?>
    </div>
    
</body>
</html>