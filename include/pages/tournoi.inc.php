<form name="tournoi" method="post">
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
            <td>Jeu</td>
            <td colspan="2">
                <select name="jeuChoisi" onchange="NbJoueurs(this.value)">
                    <option value="0">...</option>
                    <option value="Bataille Navale">Bataille Navale</option>
                    <option value="Président">Président</option>
                    <option value="Belote">Belote</option>
                    <option value="Monopoly">Monopoly</option>
                </select>
            </td>
        </tr>
        <script>
            function NbJoueurs(value) {
                var joueurs = 0;

                switch ($value) {
                    case "Bataille Navale":
                        $joueurs = 2;
                        break;

                    case "Président":
                        $joueurs = 4;
                        break;

                    case "Belote":
                        $joueurs = 4;
                        break;

                    case "Monopoly":

                        break;
                }
            }
        </script>
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
            <td colspan="3">
                <input type="submit" value="Enregistrer une partie">
            </td>
        </tr>
    </table>
</form>