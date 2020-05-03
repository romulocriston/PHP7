<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Condição SWITCH</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc6switch.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>

        <?php 
            $valor = isset($_GET["pNum"]) ? $_GET["pNum"] : 0;
            $operador = isset($_GET["pOp"]) ? $_GET["pOp"] : "dobro";
            switch ($operador){
                case "dobro":
                    $resp = (float)$valor * 2;
                    break;
                case "cubo":
                    $resp =  $valor ** 3;
                    break;
                case "raiz":
                    $resp = sqrt((float)$valor);
            }
           
            $oper = isset($_GET["pOperador"])?$_GET["pOperador"]:"dobro";
            switch ($oper){
                case "dobro":
                    $respradio = (float)$valor * 2;
                    break;
                case "cubo":
                    $respradio = pow($valor, 3);
                    break;
                case "raiz":
                    $respradio = sqrt((float)$valor);
            }
            /* Opção do dia de segunda caso não passe nenhum valor.
            $diasem = isset($_GET["pDia"]) ? $_GET["pDia"] : "Segunda";
            switch ($diasem){
                case "Sábado":
                case "Domingo":
                    $msg = "Não precisa ir a escola";
                break;
                default:
                    $msg = "Precisa estudar";
            } */
            /* Usando a estrutura com a opção Default */
            $diasem = isset($_GET["pDia"]) ? $_GET["pDia"] : "Faltou escolher o dia";
            switch ($diasem){
                case "Sábado":
                case "Domingo":
                    $msg = "Não precisa ir a escola";
                    break;
                case "Segunda":
                case "Terça":
                case "Quarta":
                case "Quinta":
                case "Sexta":
                    $msg = "Precisa estudar :)";
                    break;
                default:
                    $msg = "Dia da semana inválido";
            } 
            $reg = isset($_GET["pEst"]) ? $_GET["pEst"] : 0;
            switch ($reg){
                case "DF":
                case "GO":
                case "MT":
                case "MS":
                    $regiao = "Centro-Oeste";
                break;
                case "PR":
                case "SC":
                case "RS":
                    $regiao = "Sul";
                break;
                case "MG":
                case "ES":
                case "RJ":
                case "SP":
                    $regiao = "Sudeste";
                break;
                case "AC":
                case "AM":
                case "AP":
                case "PA":
                case "RO":
                case "RR":
                case "TO":
                    $regiao = "Norte";
                break;
                case "AC":
                case "MA":
                case "BA":
                case "AL":
                case "RN":
                case "PB":
                case "CE":
                case "PE":
                case "SE":
                case "PI":
                        $regiao = "Nordeste";
                    break;
                default:
                    $regiao = "Selecionar um estado";        
            }
            echo "Número: <span class='foco'>$valor</span>";
            echo "<br/><br/> Opção Select: <span class='foco'>$operador</span>";
            echo "<br/> Resultado: <span class='foco'>$resp</span>";
            echo "<br/><br/> Opção Radio: <span class='foco'>$oper</span>";
            echo "<br/> Resultado: <span class='foco'>$respradio</span>";
            echo "<br/><br/> Dia da semana: <span class='foco'>$diasem</span>";
            echo "<br/> Mensagem: <span class='foco'>$msg</span>";
            echo "<br/><br/> Região: <span class='foco'>$regiao</span>";
            
        ?>
        
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>