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
        $corsi = [];

        if(isset($_GET["corsoInglese"])){
            $corsoInglese = $_GET["corsoInglese"];
            array_push($corsi , $corsoInglese);
        }
        if(isset($_GET["corsoTeatro"])){
            $corsoTeatro = $_GET["corsoTeatro"];
            array_push($corsi , $corsoTeatro);
        }
        if(isset($_GET["attivitaSport"])){
            $attivitaSportiva = $_GET["attivitaSport"];
            array_push($corsi , $attivitaSportiva);
        }
        
        if(empty($corsi)){
            $strCorsi = "nessuna attività";
        }else{
            $strCorsi = implode("," , $corsi);
        }

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
                echo  "<td>$strCorsi</td>";
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>