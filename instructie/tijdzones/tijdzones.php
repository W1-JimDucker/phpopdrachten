
<?php
    //vertellen dat ons script de tijdzones van Hong Kong moet aanhouden
    date_default_timezone_set("Asia/Hong_Kong");

    //Toon de tijd in in HH.MM formaat
    $currentTime = date("h:i:s");
    echo("Jij gaat morgen dood om " . $currentTime);

    //switches
    $currentHour = date("D");
    switch ($currentHour)
    {
        case "Mon";
            echo("Garfield haat maandagen");
            break;
        case "Tue";
            echo("Op dinsdag ben ik heteroseksueel");
            break;
        case "Wed";
            echo("Op woensdag ben ik homoseksueel");
            break;
        case "Thu";
            echo("Op Donderdag ben ik biseksueel maar dan wel 75% gay en maar 25% hetero");
            break;
        case "Fri";
            echo("Weekend!");
            break;
        case "Sat";
            echo("School is al weer in 2 dagen");
            break;
        case "Sun";
            echo("School is morgen");
            break;
    }
    ?>