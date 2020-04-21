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
<?php
echo "<table class='eenvoudig'>";
echo "<tr><td>Docent</td><td>".$_GET["teacherName"]."</td></tr>";
echo "<tr><td>Vak</td><td>".$_GET["course"]."</td></tr>";
echo "<tr><td>Is het
moeilijk</td><td>".$_GET["isDifficult"]."</td></tr>";
echo "<tr><td>Is het nuttig</td><td>".$_GET["isUseful"]."</td></tr>";
echo "</table>";
?>
