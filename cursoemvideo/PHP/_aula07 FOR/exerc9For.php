<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Repetição FOR</title>
</head>
<body>
    <div id="cabecalho">
        <p class="cab"> Curso de PHP - Rômulo Criston </p>
    </div>
    <div>
        <a class=voltar href="exerc9For.html" title="Iniciar">
            <img src="../_css/_imagens/back2.png" width="80px" alt="Voltar">
        </a>
        <br/><hr class="linha1"><br/>
        <form>
            <fieldset>
                <?php 
                    $v = isset($_POST["pTab"])?$_POST["pTab"]:1;
                    print "<h3> Tabuada de $v</h3>";
                    for ($c=1 ; $c<=10 ; $c++){
                        print "$v X $c = <span class='foco'>".($v*$c)."</span><br/>";
                    }
                    /*
                    for ($c=1;$c<=10;$c++){
                        echo "$c ";
                    }
                    echo "<br/>";
                    for ($c=10;$c>=1;$c--){
                        echo "$c ";
                    }
                    echo "<br/>";
                    for ($c=0;$c<=100;$c+=5){
                        print "$c ";
                    }
                    */
                ?>
            </fieldset>
        </form>
        </p>
            <a href="javascript:history.go(-1)" class="btnvoltar"> Voltar </a>
        </p>
    </div>
</body>
</html>