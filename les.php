
<html>
    <head>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <link href="CSS/stylesheet.css" rel="stylesheet" style="text/css">

        <title>

        </title>
    </head>
    <body>

    <?php
        //variabelen:
        // - strings
        // - Integer / number
        // - boolean
        // "Ron" = string
        // 1987 = integen / number
        //  false = boolean
        // 19.5 = double / float / decimal
        // 'R' = char
        // 0/1 = bit

        $firstName = "Jim";
        $lastName = "Ducker";

        $fullName = $firstName . " " . $lastName;

        //integer / numbers
        $yearOfBirth = 2003;
        $currentYear = date("Y");
        $age = $currentYear - $yearOfBirth;

        //boolean
        $fromMaaskantje = false;
        $virgin = true;

        if($fromMaaskantje == true){
            if($virgin == false){
               echo("Garfield Kart");
            }
            else{
                echo("Garfield Kart Furious Racing");
            }
        }

        // echo commando
        echo("<p>Hallo</p>");

        // echo commando als terminal manier
        echo "<p>Dit is een echo commando</p>";
    ?>

    <div>
        <?php
             echo("<h1>Hello " . $fullName . ".</h1>");
             echo("<h2>Je leeftijd is " . $age . ".</h2>")
        ?>
    </div>
    <h2>test</h2>
    </body>
</html>