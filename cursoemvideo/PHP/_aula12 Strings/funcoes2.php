<!DOCTYPE html>
<html lang="pt-br">
 <head>
   <title>Aula de PHP - Funções</title>
   <meta charset="UTF-8"/>
   <style type="text/css">
    div {
      background-color: rgb(216, 216, 216); padding: 5px 25px; margin-bottom: 10px; font-size: 21px; 
      width: 70%; margin-left: 15%; text-shadow: 1px 1px 1px rgba(0, 0, 0, .4); 
      box-shadow: rgba(0, 0, 0, .4) 5px 5px 6px;
    }
    .usuario{
      font-weight: 600; color: rgb(82, 44, 0); text-shadow: 1px 1px 1px rgba(0, 0, 0, .3);
    }
   </style>
 </head>
 <body>
    <div>
      <h3> Criação de variáveis </h3>
        <?php
          $corretorOrtografico = "ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº";
          $nome = "RÔMuLo CristOn GoMes";
          $nome2 = "romulo criston gomes";
          $nome3 = "ROMulo";
          $frase = "Estou aprendendo PHP";
          $frase2 = "Estou estudando PHP no Curso em Video de PHP";
          $lowname = strtolower($nome);
          $upname = strtoupper($nome);
          $ucf = ucfirst($nome2);
          $ucw = ucwords($nome2);
          $reverse = strrev(strtoupper($nome2));
          $pos = strpos($frase, "PHP");
          $pos = stripos($frase, "php");
          $cont = substr_count($frase2, "PHP");
          $site = "Curso em Vídeo";
          $sub = substr($site, 0,5);
          $novo = str_pad($nome3, 20," -", STR_PAD_RIGHT);
          $txt = str_repeat("Php",5);
          $txt1 = "Gosto de estudar Matemática, matemática é legal.";
          $newtxt1 = str_replace("Matemática", "PHP", $txt1);
          $newtxt1 = str_ireplace("Matemática", "PHP", $txt1);
        ?>
    </div>
    <div>
      <?php
        
        echo "<p>Olá, $lowname - <span class='usuario'>strtolower()</span></p>";
        echo "<p>Olá, $upname - <span class='usuario'>strtouper()</span></p>";
        echo "<p>Olá, $ucf - <span class='usuario'>ucfirst()</span></p>";
        echo "<p>Olá, $ucw - <span class='usuario'>ucwords()</span></p>";
        echo "<p>Olá, $reverse - <span class='usuario'>strrev()</span></p>";
        echo "<p>A palavra PHP foi encontrada na posição $pos - <span class='usuario'>strpos()</span></p>";
        echo "<p>A palavra php foi encontrada na posição $pos - <span class='usuario'>stripos()</span></p>";
        echo "<p>A palavra PHP foi encontrada $cont vezes na frase |$frase2| - <span class='usuario'>substr_count()</span></p>";
        echo "<p> |$sub| é uma substring da frase |$site| - <span class='usuario'>substr()</span></p>";
        print("<p> |$novo Criston| - <span class='usuario'>str_pad()</span></p>");
        print("<p> |$txt| - <span class='usuario'>str_repeat()</span></p>");
        print("<p> |$txt1| Texto com alteração |$newtxt1| - <span class='usuario'>str_replace()</span></p>");
        print("<p> |$txt1| Texto com alteração |$newtxt1| - <span class='usuario'>str_ireplace()</span></p>");
      ?>
    </div>
  </body>
</html>