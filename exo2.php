<?php

function equation_second_degre($a, $b, $c)
{
$discriminant = $b * $b - 4 * $a * $c;
if ($discriminant > 0) {
$x1 = (-$b + sqrt($discriminant)) / (2 * $a);
$x2 = (-$b - sqrt($discriminant)) / (2 * $a);
echo "<p>Les solutions de l'équation $a x² + $b x + $c = 0 sont : x1 = $x1 et x2 = $x2.</p>";
} elseif ($discriminant == 0) {
$x = -$b / (2 * $a);
echo "<p>L'unique solution de l'équation $a x² + $b x + $c = 0 est : x = $x.</p>";
} else {
echo "<p>L'équation $a x² + $b x + $c = 0 n'a pas de solution réelle.</p>";
}
}

?>