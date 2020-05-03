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
        <form method="GET" action="formulario2.php">
            <fieldset><legend> Usuário </legend>               
                <?php 
                    echo "<label for='nome'> Nome: </label>
                    <input type='text' name='pNome' id='nome' size='43' autofocus required placeholder=' Digite seu nome'><br/><br/>";

                    for ($c=1; $c<=5; $c++) {
                        echo "<label for='tNum$c'> Valor $c: </label>
                        <input type='number' name='pNum$c' id='tNum$c' min='0' max='100'><br/>"; 
                    }
                    
                    echo "<br/>";
                    $c=1;
                    while ($c<=2){
                        echo "<label for='mail$c'> E-mail$c: </label>
                        <input type='text' name='pMail$c' id='mail$c' size='43' required placeholder=' Email$c'><br/>";
                        $c++;
                    }

                    echo "<br/>";
                    for ($c=1; $c<=2; $c++){
                        print "<label for='cor$c'> Cor$c: </label>
                        <input type='color' name='pCor$c' id='cor$c' value='#000000'><br/>";
                    }echo "<br/>";

                   
                    print "<label for='qtde'> Selecione a quantidade: </label>
                        <select name='pQtde' id='qtde'>";
                        $c=1;
                        while ($c <= 50){
                            if ($c == 1){
                                print "<option value='$c' selected> $c </option>";
                            } else{
                                print "<option value='$c'> $c </option>";
                            }
                            $c++;
                        }
                ?>
               <input type="submit" value="Enviar" class="btn2voltar"><br/><br/>
            </fieldset>
            
        </form>
        
    </div>
</body>
</html>