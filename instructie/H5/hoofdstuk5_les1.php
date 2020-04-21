<html>
<head>

</head>
<body>
    <form action="hoofdstuk5_les1.php" method="get">
        <p>Voornaam</p>
        <input type="text" name="firstName">

        <p>Achternaam</p>
        <input type="text" name="lastName">

        <p>Geboortedatum</p>
        <input type="date" name="birthDate">

        <p>Eventuele klachten</p>
        <textarea name="diseaseComplaints"></textarea>

        <input type="submit" value="Verzenden a.u.b">
    </form>

    <?php
        // PHP uitwerking code hieronder

        // Bepalen of er een formulier verzonden is!
        if(empty($_GET) == false)
        {
            //Er is een formulier verzonden. Doe iets met de invoer van de gebruiker
            $userFirstname = $_GET["firstName"];
            echo("<h1>Opgegeven naam: " . $userFirstname . "</h1>");

            $userLastname = $_GET["lastName"];
            echo("<h1>Opgegeven achternaam: " . $userLastname . "</h1>");
        }

    ?>
</body>



</html>