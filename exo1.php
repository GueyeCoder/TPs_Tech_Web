
<?php
function table_multi($n)
{
    echo "<h3>Table de multiplication de 1 à $n :</h3>";
    echo "<table border='1' style='border-collapse: collapse;'>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $n; $j++) {
            echo "<td style='padding: 10px; text-align: center;'>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>