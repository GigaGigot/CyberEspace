<form>
    <table>
        <tr>
            <td>Date</td>
            <td>
                <input type="text" value="" name="date2" id="champ_date2" size="12" maxlength="10">
            </td>
            <td>

                <div id="calendarMain2"></div>
                <script type="text/javascript">
                    //<![CDATA[
                    calInit("calendarMain2", "Calendrier", "champ_date2", "jsCalendar", "day", "selectedDay");
                    //]]>
                </script>
            </td>
        </tr>

        <tr>
            <td>Joueur 1</td>
            <td colspan="2">
                <input type="text" placeholder="Joueur 1" name="joueur1" id="joueur1">
            </td>
        </tr>

        <tr>
            <td>Joueur 2</td>
            <td colspan="2">
                <input type="text" placeholder="Joueur 2" name="joueur2" id="joueur2">
            </td>
        </tr>

        <tr>
            <td>Jeu</td>
            <td colspan="2">
                <select name="jeuChoisi">
                    <option value="1">Jeu 1</option>
                    <option value="2">Jeu 2</option>
                    <option value="3">Jeu 3</option>
                </select>
            </td>
        </tr>

    </table>
</form>