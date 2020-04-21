<?php
/**
 * User: Jim Dücker
 * Date:
 * Time:
 * File: index.php
 */
?>
<head>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="hoofdstuk4/opdracht_4-1">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht_4-2">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht_4-3">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht_4-4">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="hoofdstuk5/opdracht_5-1">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht_5-2">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht_5-2">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht_5-4">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main>
    <h2 id="uitwerkingen">
        Uitwerkingen
    </h2>
    <?php
        //declareren en initialeren van de gewenste variabele
        $trafficLightColor = "Oranje";
        $ambulanceComing = false;

        //driveOn declareren
        $driveOn = true;

        // Checken of auto mag doorrijden of moet stoppen
        if($trafficLightColor == "Groen" && $ambulanceComing == false){
            $driveOn == true;
        }
        else if($trafficLightColor == "Oranje"){
            $driveOn == false;
        }
        else if($trafficLightColor == "Rood" || $ambulanceComing == true){
            $driveOn == false;
        }
        else{
            $driveOn == true;
            echo("<p>Oepsie woepsie het stoplicht is stukkie wukkie</p>");
        }

        //tonen van melding van de automobilist
        if ($driveOn == true){
            echo("<h1 style='color: green'>U mag doorijden</h1>");
        }
        else{
            echo("<h1 style='color: red'>U mag NIET doorijden</h1>");
        }
        //deel 2: Alcohol in verschillende landen
        $countryName = "Nederland";
        $currentAge = 16;

        //toon algemene gegevens
        echo("Je woont in " . $countryName . " en je bent " . $currentAge .  " jaar oud.");

        //toon de drankinformatie
        if ($countryName = "België" && $currentAge >= 16 && $currentAge < 18){
            echo("<p>Je mag hier zwakke alcohol drinken.</p>");
        }
        else if($countryName == "België" && $currentAge >= 18){
            echo("<p>Je mag hier sterke alcohol drinken.</p>");
        }
        else if($countryName == "Bulgarije" && $currentAge >= 18){
            echo("<p>Je mag hier sterke alcohol drinken.</p>");
        }
        else{
            echo("<p>Je mag hier geen alcohol drinken.</p>");
        }
    ?>
</main>
</body>