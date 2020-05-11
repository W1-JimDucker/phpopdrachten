<?php
session_start();
if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username']. "&nbsp;<a
href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
}
else {
    $bezoeker = "onbekende bezoeker". "&nbsp;<a
href='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
}
?>
//print vervolgens ook de $bezoeker zodat je de volgende visuele
weergave in de pagina ziet