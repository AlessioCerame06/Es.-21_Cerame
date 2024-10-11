<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $studenti = [];
            $studente1 = array("nome" => "Alessio", "cognome" => "Cerame");
            $studente2 = array("nome" => "Giuseppe", "cognome" => "Rossi");
            $studente3 = array("nome" => "Andrea", "cognome" => "Verdi");
            $studenti[0] = $studente1;
            $studenti[1] = $studente2;
            $studenti[2] = $studente3;
            
            for ($i = 0; $i < count($studenti); $i++) {
                for ($y = 0; $y < 5; $y++) {
                    $voti [$i] = rand (2, 10);
                }
                $studenti[$i]["listaVoti"] = $voti;
            } 
            
            for ($k = 0; $k < count($studenti); $k++) {
                echo "<h2>" . $studenti[$k]["nome"] . " " . $studenti[$k]["cognome"] . "</h2>";
            }
            echo "<ul>";
            echo "</ul>";

            /*
            $mediaVoti = 0;
            echo "<ol>";
            foreach ($studenti["listaVoti"] as $voto) {
                echo "<li>$voto</li>";
                $mediaVoti += $voto;
            }
            $mediaVoti /= 5;
            $mediaVoti = number_format($mediaVoti,2);

            echo "</ol></ul><span>Media voti: $mediaVoti</span>";
            */
        ?>
        
    </body>
</html>