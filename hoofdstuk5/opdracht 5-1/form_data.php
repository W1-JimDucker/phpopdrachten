<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 200px;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
<?php
    echo("<tr>");
    echo("<td>Bedrijfsnaam:</td>");
    echo("<td>" . $_GET["companyName"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Voornaam:</td>");
    echo("<td>" . $_GET["firstName"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Achternaam:</td>");
    echo("<td>" . $_GET["lastName"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Telefoon:</td>");
    echo("<td>" . $_GET["phoneNumber"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>E-mail:</td>");
    echo("<td>" . $_GET["emailAdress"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Bericht:</td>");
    echo("<td>" . $_GET["messageText"] . "</td>");
    echo("</tr>");
?>
</table>
</body>
</html>