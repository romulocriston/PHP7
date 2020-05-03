<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>VETOR COM FOR</title>
    <style>
        div {
        font-size: 21px; 
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .4); 
        }
    </style>
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
        <pre>
            <?php 
                $list = array(  0=> "sakuke",
                                1=> "naruto",
                                2=> "itachi"
                );
                print_r($list);
                echo "<br/>";

                for ($i=0; $i<count($list); $i++){
                    echo "$i $list[$i] - ";
                }
                echo "<br/><br/>";

                for ($i=0; $i<count($list); $i++){
                    echo "[$i] => $list[$i] ";
                }
                echo "<br/><br/>";

                for ($c=0; $c<count($list); $c++){
                    echo "[$c] => $list[$c] <br/>";
                }
                echo "<br/>";

                for ($i=0; $i<count($list); $i++){
                    echo "$list[$i] - ";
                }
                echo "<br/>";

                foreach($list as $v){
                    echo "$v - ";
                }
            ?>
        </pre>
    </div>
</body>
</html>