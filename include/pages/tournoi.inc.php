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
                <select name="jeuChoisi" onchange="NbJoueursMax(this.value)">
                    <option value="0" selected="selected">...</option>
                    <option value="1">Bataille Navale</option>
                    <option value="2">Président</option>
                    <option value="3">Belote</option>
                    <option value="4">Monopoly</option>
                </select>
            </td>
        </tr>
        <script>
            function NbJoueursMax(value) {
                var nombre = document.getElementById('nbJoueurs');
                while(nombre.hasChildNodes()){
                   nombre.removeChild(nombre.childNodes[0]);
                }
                        
                var joueurs = 0;

                switch (parseInt(value)) {
                    case 1:
                        joueurs = 2;
                        break;

                    case 2:
                        joueurs = 4;
                        break;

                    case 3:
                        joueurs = 4;
                        break;

                    case 4:
                        joueurs = 4;
                        break;
                        
                    default:
                        joueurs = 2;
                        break;
                }
                        
                var optionDepart = document.createElement("option");
                optionDepart.setAttribute("value", 0);
                optionDepart.setAttribute("selected", "selected");
                optionDepart.setAttribute("id", (joueurs+'joueurs'));
                optionDepart.appendChild(document.createTextNode("..."));
                document.getElementById('nbJoueurs').appendChild(optionDepart);
                        
                while (joueurs > 1){
                    var nouveauJoueur = document.createElement("option");
                    nouveauJoueur.setAttribute("value", joueurs);
                    nouveauJoueur.setAttribute("id", (joueurs+'joueurs'));
                    var text = document.createTextNode(joueurs + ' joueurs');
                    nouveauJoueur.appendChild(text);
                    document.getElementById('nbJoueurs').appendChild(nouveauJoueur);
                    joueurs = joueurs - 1;
                }
            }
        </script>
        
        <tr>
            <td>Nombre de joueurs</td>
            <td colspan="2">
                <select id="nbJoueurs" onchange="NbJoueursReels(this.value)">
                    
                </select>
            </td>
        </tr>
        
        <script>
            function NbJoueursReels(value){
                for(var i = 0; i < value; i++){
                    var tr = document.createElement("tr");
                    var label = document.createElement("td");
                    label.appendChild(document.createTextNode("Joueur " + i));
                    var td2 = document.createElement("td");
                    var input = document.createElement("input"); // TODO
                    input.setAttribute("id", ("joueur"+i));
                }
            }
        </script>
        
        </div id="joueurs">
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