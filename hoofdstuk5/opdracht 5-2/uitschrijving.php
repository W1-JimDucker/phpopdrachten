<html>
<head>
    <style>
        td {
            width: 200px;
        }
    </style>
</head>
<body>
<h2>Uitschrijfformulier KW1C</h2>
<hr>
    <?php
    echo("<table>");

    echo("<tr>");
    echo("<td>Voor en achternaam</td>");
    echo("<td>" . $_GET["firstLastName"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Studentennummer</td>");
    echo("<td>" . $_GET["studentNumber"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Datum van uitschrijving</td>");
    echo("<td>" . $_GET["signOffDate"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Reden van uitschrijving</td>");
    echo("<td>" . $_GET["signOffReason"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Leerjaar</td>");
    echo("<td>" . $_GET["year"] . "</td>");
    echo("</tr>");

    echo("<tr>");
    echo("<td>Aanmelden bij de succesklas:</td>");

    if (isset($_GET["successClass"])) {
        echo("<td>NEE</td>");
    } else {
        echo("<td>JA</td>");
    }

    echo("</tr>");

    echo("<tr>");
    echo("<td>Verwijderen gegevens:</td>");

    if (isset($_GET["deleteData"])) {
        echo("<td>NEE</td>");
    } else {
        echo("<td>JA</td>");
    }

    echo("</tr>");

    echo("</table>");

    echo("<p>Reden van uitschrijven:</p>");
    echo($_GET["reasonText"]);

    if (isset($_GET["successClass"])) {
        echo("<p>Er is niet aangemeld voor de succesklas</p>");
    }

    if (isset($_GET["deleteData"])) {
        echo("<p>Gegevens hoeven niet te worden verwijderd</p>");
    }
    ?>

<p style="color: red"
</table>
</body>
</html>