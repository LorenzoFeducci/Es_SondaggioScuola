<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    td, th{
        border: solid black 2px;
        border-collapse: collapse;
    }

    table{
        border-collapse: collapse;
    }
</style>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $data = $_GET["data"];
        $orario = $_GET["tempo"];
        $scuola = $_GET["scuola"];
        $corsoInglese = $_GET["corsoInglese"];
        $corsoTeatro = $_GET["corsoTeatro"];
        $attivitaSportiva = $_GET["attivitaSport"];

        echo "<table>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Cognome</th>";
                echo "<th>Data</th>";
                echo "<th>Orario</th>";
                echo "<th>Scuola</th>";
                echo "<th>Corso</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$cognome</td>";
                echo "<td>$data</td>";
                echo "<td>$orario</td>";
                echo "<td>$scuola</td>";
                
                if($corsoInglese == "inglese"){
                    echo "<td>$corsoInglese</td>";
                }else if($corsoTeatro == "teatro"){
                    echo "<td>$corsoTeatro</td>";
                }else if($attivitaSportiva == "sport"){
                    echo "<td>$attivitaSportiva</td>";
                }else if($corsoInglese == "inglese" && $corsoTeatro == "teatro"){
                    echo "<td>$corsoInglese" . " , " . "$corsoTeatro</td>";
                }else if($corsoInglese == "inglese" && $attivitaSportiva == "sport"){
                    echo "<td>$corsoInglese" . " , " . "$attivitaSportiva</td>";
                }else if($corsoTeatro == "teatro" && $attivitaSportiva == "sport"){
                    echo "<td>$corsoTeatro" . " , " . "$attivitaSportiva</td>";
                }else{
                    echo "<td>$corsoInglese" . " , " . "$corsoTeatro" . " , " . "$attivitaSportiva</td>";
                }
                    
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>