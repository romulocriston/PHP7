<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>VETOR COM FOREACH</title>
    <style>
        div {
        font-size: 21px; 
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .4); 
        }
        table{
            border-collapse: collapse;
            margin-left: 10%;
            width: 60%;
            text-align: center;
        }
        th {
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even){
            background-color: white;
            }
        td, th{
            border: 1px solid rgb(0, 0, 0);
            padding: 8px;
        }
        td:hover {
            background-color: rgb(187, 187, 187);
        }
        
    </style>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="javascript:history.go(-1)" title="Voltar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <pre>
            <?php 
                /*
                $vetor = array(2,5,10);
                    $vetor[] = 12;
                    print_r($vetor);

                $vtrrange = range(5,20,5); # range de 5 até 20 passo 5em5
                    print_r($vtrrange);
                */
            ?>
        </pre>
        <!--<table>
            <tr> 
                <th colspan="100">Valores</th> 
            </tr>
            <tr>
                <?php /*
                    $c = range(1,15,1);
                    #print_r($c);
                    foreach($c as $valor){
                        echo "<td>$valor</td>";
                    }
                    */
                ?> 
            </tr>
            <tr>
                <?php /*
                    #vetor com índice personalizado
                    $vetor = array(0=>"A", 3=>"B", 5=>"C", 8=>"D");
                    #print_r($vetor);
                    foreach($vetor as $campo){
                        echo "<td>$campo</td>";
                    }
                    */
                ?>
            </tr>
            <tr>
                <?php /*
                    #vetor com índice personalizado
                    $vetor = array(1=>"E", 2=>"F", 4=>"G", 7=>"H");
                    $vetor[] = "R";
                    #print_r($vetor);
                    foreach($vetor as $campo){
                        echo "<td>$campo</td>";
                    }
                    #unset($vetor[7]); #remove um vetor de acordo com sua posição
                    foreach($vetor as $campo){
                        echo "$campo";
                    } 
                    */
                ?>
            </tr>
        </table> -->
        
            <?php
            #chaves associativas (campos com tipos diferentes)
            $cad = array("nome"=>"Romulo", "idade"=>42, "peso"=>85);
            $cad["atleta"] = true;
            $cad["nome"] = "Allana";
            #print_r ($cad);
            foreach ($cad as $indice => $conteudo){
                echo "O campo <span class='foco'>$indice</span> possui o conteúdo <span class='foco'>$conteudo</span> <br/>";
            }
            echo "<br/><br/>";

            $vetor = array(1=>"E", 2=>"F", 4=>"G", 7=>"H");
            #print_r($vetor);
            foreach ($vetor as $ind => $cont){
                echo "Índice: $ind - Conteúdo: $cont. <br/>";
            }
            
            ?>
    </div>
</body>
</html>