<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>MODELO</title>
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
        
        <?php /* #printf (formatação de strings)
            $prod = "Leite";
            $preco = 1003.8;
            echo "O $prod custa R$ ". number_format($preco, 2, ',', '.');
            echo "<br/>";
            printf ("O %s custa R$ %.2f", $prod, $preco); # %s string minusculo e %f número float. %.2f (duas casas decimais no nro float)
            */
        ?>

        <?php /* #print_r (cria vetores)
            $vetor[0] = 2;
            $vetor[1] = 5;
            $vetor[2] = 10;
            echo "<br/>";
            print_r ($vetor);
            echo "<br/>";
            $v2 = array(2,5,10,15,20,30,50);
            print_r ($v2);
            */
        ?>

        <?php /* #var_dump var_export (cria vetores)
            $vetor[0] = 2;
            $vetor[1] = 5;
            $vetor[2] = 10;
            echo "<br/>";
            var_dump($vetor);
            echo "<br/>";
            var_export($vetor); */
        ?>
        
        <?php /* #wordwrap (quebra do paragrafo em qtde de caracteres)
            $texto = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ";
            $res = wordwrap($texto, 30, "<br/>\n", true);
            echo "$res";*/
        ?>

        <?php /* #strlen mb_strlen (tamanho do texto)
            $texto ="cursÓ de PHP7!";
            $tamanho =strlen($texto);
            echo "$tamanho";
            echo "<br/>";
            /* cuidado com as funções de manipulação de strings quando forem tratadas palavras da língua portuguesa com ACENTUAÇÃO.
            Exemplo: 
            echo "strlen('mãe') - retorna 4 <br/>";
            echo "mb_strlen('mãe','UTF-8') - retorna 3 (que é o esperado)<br/>";
            echo "mãe: ".strlen("mãe")."<br/>";
            echo "mãe: ".(mb_strlen("mãe","UTF-8"));
            */
        ?>

        <?php /* #trim (remove espaços em branco à direita e à esquerda do texto)
            $nome = "   Jose da Silva   ";
            echo (strlen($nome))."<br/>";
            $nomeLimpo = trim($nome);
            echo $nomeLimpo."<br/>";
            echo (strlen($nomeLimpo));
            */
        ?>

        <?php /* #str_word_count (conta qde de palavras numa frase ou texto)
            $frase = "Eu vou estudar PHP";
            $cont = str_word_count($frase, 0);
            echo $cont;
            echo "<br/>";
            $cont = str_word_count($frase, 1);
            print_r ($cont);
            echo "<br/>";
            $cont = str_word_count($frase, 2);
            print_r ($cont); 
            
            # caracteres acentuados e "ç" são considerados como NÃO SENDO LETRAS.
            echo "<h3>mãe coração abrangência bênçãos</h3>";
        
            print_r (str_word_count("mãe coração abrangência bênçãos",0));
            echo "<br/>";
            print_r (str_word_count("mãe coração abrangência bênçãos",1));

            echo "<br/>";
            # Para corrigir isso é necessário acrescentar a lista de letras acentuadas a serem considerada como SENDO LETRAS:

            echo "<br/>";
            print_r (str_word_count("mãe coração abrangência bênçãos",1,"çãê")); #devolve um ARRAY com 4 elementos: "mãe" "coração" "abrangência" "bênçãos"
            
            # Para que a função str_word_count sempre funcione sugiro que seja criada uma constante a ser utilizada em todos os projetos/sites com todas as acentuações que utilizamos:
            # "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº"
            $corretorGrafico = "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº";
            print_r (str_word_count("mãe coração abrangência bênçãos",1,$corretorGrafico));
            
            #Alguns dos acentos acima não estão no português mas são encontrados no francês. Inclui "ª" e "º" pois frequentemente encontro abreviações em cadastro como "Stª" para "Santa" e "Stº" para "Santo" ou "Profª" para "Professora. */
            
        ?>

        <?php /* #explode (Separando String usando um <espaço> ou <ponto final>)
            $site = "Curso de PHP!!";
            $vetor = (explode(" ",$site));
            print_r ($vetor);
            
            echo "<br/>";
            #Separando String usando o <ponto>
            $paragafo = "Curso de PHP. Céu é azul. String é um texto.";
            print_r (explode(".",$paragafo));
            */
        ?>

        <?php /* #implode (Junta palavras por um <espaço> ou <ponto final>)
            $vetor[0] = "Curso";
            $vetor[1] = "de";
            $vetor[2] = "PHP";
            $frase = implode("#",$vetor);
            echo $frase;
            
            echo "<br/><br/>";
            $frase = join(" ",$vetor);
            echo $frase;
            */
        ?>

        <?php /* #chr (descobre um caracter pelo código)
            $letra = chr(67);
            echo $letra; 
            
            for ($c=33; $c<=126; $c++){
                echo "código $c - letra: ".chr($c)."<br/>";
            }  */
        ?>

        <?php /* #ord (descobre um código pelo caracter)
            $letra = "C";
            $cod = ord($letra);
            echo $cod; */
        ?>

        <?php /* #strtolower strtoupper
            $nome = "Rômulo Críston";
            echo "Meu nome é: ".strtolower($nome);  
                print("<br/>");
            print("Meu nome é: ".strtolower($nome));
                print "<br/>";

            print("Menu nome é: ".strtoupper($nome)); */
        ?>

        <?php /* #ucfirst (U- upper C- Case F-first) 1ª letra em maiúscula
            $nome = "rômulo críston";

            echo "Meu nome é: ".ucfirst($nome);   
                print("<br/>");
            
            $texto = "rôMulo CrístOn DferttOPllms Up";
            
            echo "Meu nome é: ".ucfirst(strtolower($texto));   
                print("<br/>"); */
        ?>

        <?php /*# ucwords (Cada palavra com 1ª letra em maiúscula)
            $texto = "romulo crisTon goMes nASCIMENTO";
            echo "Meu nome é: ".ucwords(strtolower($texto)); */
        ?>

        <?php /*# strrev (escreve de trás para frente)
            $texto = "romulo criston";
            echo "Meu nome é: ".strrev($texto); */
        ?>

        <?php /* #strpos (localiza a posição de uma palavra num texto/paragrafo)
            $corretorOrtog = "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº";
            echo mb_strlen($corretorOrtog)."<br/>";
            $frase1 = "Estou aprendendó PHP";
            $frase2 = "Estou aprendendo PHP";
            print("$frase1 <br/>".strpos($frase1, "PHP"));
            echo "<br/>";
            print("$frase2 <br/>".strpos($frase2, "PHP"));
            */
        ?>

        <?php /* #stripos (localiza a posição de uma palavra num texto/paragrafo IGNORANDO case sensitive)
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            $posi = stripos($frase, "php");
            
            echo $pos;
            echo "<br/>";
            echo $posi;
            */
        ?>

        <?php /* #substr (retira caracteres a partir de uma posição)
            $texto = "Curso de PHP";
            echo substr($texto, 0, 5)."<br/>";
            echo substr($texto, 6, 2)."<br/>";
            echo substr($texto, 9, 3)."<br/>";
            echo substr($texto, 6)."<br/>";
            echo substr($texto, -3)."<br/>";
            echo substr($texto, -3,2)."<br/>"; */
        ?>

        <?php /* #str_pad STR_PAD_RIGHT STR_PAD_BOTH STR_PAD_LEFT (completa uma string com determinada qtde de caracteres)
            $nome = "Romulo";

            $novo1 = str_pad($nome, 10,"%", STR_PAD_RIGHT);
            $novo2 = str_pad($nome, 10,"&", STR_PAD_LEFT);
            $novo3 = str_pad($nome, 10,"&", STR_PAD_BOTH);

            print("<p> $novo1 </p>");
            print("<p> $novo2 </p>");
            print("<p> $novo3 </p>");
            */
            
            $input = "Alien";
            print str_pad($input, 10)."Criston<br/>";               // produz "Alien "
            print str_pad($input, 10, "-=", STR_PAD_LEFT)."<br/>";  // produz "-=-=-Alien"
            print str_pad($input, 10, "&", STR_PAD_BOTH)."<br/>";   // produz "__Alien___"
            print str_pad($input, 6 , "___")."<br/>";               // produces "Alien_"
            
        ?>

        <?php /* #str_repeat (repete uma string por x vezes)
            $palavra = "PHP";
            print(str_repeat($palavra, 5));
            echo "<br/>";
            print(str_repeat("-", 30)); */
        ?>

        <?php /* #str_replace (substitui um texto por outro - é case sensitive)
            $frase = "Eu gosto de JAVA.";
            $novafrase = str_replace("JAVA","PHP", $frase);
            echo $novafrase;
            echo "<br/>";

            $frase .= " JaVa é fera demais! :)";
            #str_ireplace (IGNORA case sensitive)
            $novafrase = str_ireplace("java","PHP", $frase);
            echo $novafrase; */
        ?>

        <?php /* #substr_count (conta a qtde de palavras num texto - é case sensitive)
            $frase = "Eu gosto de JAVA.";
            $frase .= " JAVA é fera demais! :)";
            $cont = substr_count($frase, "JAVA");
            print $frase;
            echo "<br/>";
            print ("Repetiu: ".$cont." vez(es)");
            */
        ?>
    </div>
</body>
</html>