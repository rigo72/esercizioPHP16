<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaTabella($righe, $colonne){
            echo "<table>";
            for($i=0;$i<$colonne;$i++){
                echo "<tr>";
                for($j=0;$j<$righe;$j++){
                    echo "<td>({$i},{$j})</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        stampaTabella(3,5);







    ?>
</body>
</html>