<html>
<head>
</head>
<body>
<h2>Uitschrijfformulier KW1C</h2>
<hr>
<form action="uitschrijving.php" method="get">
    <label>Voor en achternaam </label>
    <input name="firstLastName" type="text">
    <br>
    <br>
    <label>Studentnummer </label>
    <input name="studentNumber" type="text">
    <br>
    <br>
    <label>Datum van uitschrijving </label>
    <input name="signOffDate" type="text">
    <br>
    <br>
    <label>Reden van uitschrijving </label>
    <select name="signOffReason">
        <option value="Verkeerde keuze">Verkeerde keuze</option>
        <option value="Te moeilijk">Te moeilijk</option>
        <option value="Slechte lesmethode">Slechte methode</option>
        <option value="Andere reden">Andere reden</option>
    </select>
    <br>
    <br>
    <label>Leerjaar</label>
    <br>
    <input name="year" value="1e leerjaar" type="radio">1e leerjaar
    <br>
    <input name="year" value="2e leerjaar" type="radio">2e leerjaar
    <br>
    <input name="year" value="3e leerjaar" type="radio">3e leerjaar
    <br>
    <br>
    <input name="successClass" type="checkbox" value="JA"> Ik wil me aanmelden bij de succesklas
    <br>
    <input name="deleteData" type="checkbox" value="JA"> Verwijder mijn gegevens uit het systeem
    <br>
    <br>
    <label>Geef hieronder de reden van je uitschrijving op</label>
    <br>
    <textarea name="reasonText"></textarea>
    <br>
    <br>
    <input name="versturen" value="Versturen" type="submit">
</form>
</body>
</html>