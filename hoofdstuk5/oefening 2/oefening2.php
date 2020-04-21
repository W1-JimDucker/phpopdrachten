<form action="form_data1.php" method="get">
    <label>Docent: </label>
    <select name="teacherName">
        <option value="BIJ00">Dhr. van Bijnen</option>
        <option value="SAE00">Dhr. Saebu</option>
    </select>

    <fieldset>
        <label>Vak:</label>
        <input name="course" type="radio" value="PHP">PHP
        <input name="course" type="radio" value="Modelleren">Modelleren
    </fieldset>
    <fieldset>
        <label>Wat vind je van het vak?:</label>
        <input name="isDifficult" type="checkbox" value="ja">Moeilijk?
        <input name="isUseful" type="checkbox" value="ja">Nuttig?
    </fieldset>
    <input type="submit" name="verzend" value="verzend">
</form>