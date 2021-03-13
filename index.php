
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML-Boilerplate Beispiel</title>
</head>
<body>
   /* die Html Code in einer Html Datei*/
   <article>
      <h1>Überschrift</h1>
      <p>Das ist ein Absatz</p>
   </article>

   /*Html Code mit kleinen PHP-Ergänzungen*/
   <p>Seite abgerufen am Uhr</p>
      <?php
         echo( date('d.m.Y \u\m  H:i:s') );
      ?>

    <h2>Aufgabe 25</h2>
    <?php
    echo "<ul>";
    foreach ($books as $key => $value) {
        echo "<li><b>" . $key . "</b> " . $value . "</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>

<?php

$frameworks = array("CakePhp", "Symfony", "ZendFramework", "CodeIgniter", "Laravel");

$books = [“Hippie” => “Paulo Coelho”, “CleanCode” => “RobertCecilMartin”];
foreach ($books as $key => $value) { 
 echo "Key=" . $key . ", Value=" . $value; echo "<br>";
}

?>