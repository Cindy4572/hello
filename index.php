<?php

require "function.php";
$resultat = getAllAnnonces();

?>

<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.js">

<ul>
    <li><?php echo $resultat["annonce1"][0] ?></li>
    <li><?php echo $resultat["annonce1"][1] ?></li>
</ul>

<hr>

<ul>
    <li><?php echo $resultat["annonce2"][0] ?></li>
    <li><?php echo $resultat["annonce2"][1] ?></li>
</ul>

<?php
$first = getAllAnnonces();

print_r($first);

$newProduit = insertAnnonce("annnonce3", array("fruit", 2));

echo "<pre>";
print_r($newProduit);

?>