<?php 

    $db = new Mypdo();
    $jm = new JeuManager($db);
    $pm = new PartieManager($db);

if(!isset($_POST['jeu'])){
    ?>
<form name="tournoi" method="post">
    <table id="formulaire">
        <tr>
            <td>Date</td>
            <td>
                <input type="text" value="" name="date" id="champ_date2" size="12" maxlength="10">
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
                <select name="jeu" onchange="NbJoueursMax(this.value)">
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
                for(var i = 0; i < value - 1; i++){
                    var numCorrige = i+1;
                    var tr = document.createElement("tr");
                    var label = document.createElement("td");
                    label.appendChild(document.createTextNode("Joueur " + numCorrige));
                    
                    var td2 = document.createElement("td");
                    
                    var input = document.createElement("input");
                    input.setAttribute("id", ("joueur"+numCorrige));
                    input.setAttribute("name", ("joueur"+numCorrige));
                    input.setAttribute("type", "text");
                    input.setAttribute("placeholder", ("Joueur "+ numCorrige));
                    
                    td2.appendChild(input);
                    
                    tr.appendChild(label);
                    tr.appendChild(td2);
                    
                    document.getElementById("formulaire").appendChild(tr);
                }
                
                // dernier joueur avec affichage du bouton
                var tr = document.createElement("tr");
                var label = document.createElement("td");
                label.appendChild(document.createTextNode("Joueur " + value));

                var td2 = document.createElement("td");

                var input = document.createElement("input");
                input.setAttribute("id", ("joueur"+value));
                input.setAttribute("name", ("joueur"+value));
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", ("Joueur "+ value));
                input.setAttribute("onchange", "creationBouton()");

                td2.appendChild(input);

                tr.appendChild(label);
                tr.appendChild(td2);

                document.getElementById("formulaire").appendChild(tr);
            }
            
            function creationBouton(){
                var bouton = document.createElement("input");
                bouton.setAttribute("type", "submit");
                bouton.setAttribute("value", "Enregistrer la partie");
                
                var container = document.createElement("td");
                container.setAttribute("colspan", 3);
                container.setAttribute("id", "validation");
                container.appendChild(bouton);
                
                var tr = document.createElement("tr");
                tr.appendChild(container);
                
                document.getElementById('formulaire').appendChild(tr);            
            }
        </script>
    </table>
</form>
            <?php
}else{
    
    $jeux = $jm->getJeuByID($_POST['jeu']);
    foreach($jeux as $jeu){
        $intitule = $jeu->getJeu_intitule();
    }
        
    $nvellePartie = new Partie($_POST);
    $nvellePartie->setPartie_date($_POST['date']);
    $nvellePartie->setPartie_jeu($intitule);
    $pm->add($nvellePartie);
    
        ?>
<h2>Enregistrement de partie de 
    <?php
        echo $intitule;
 ?></h2>
<a href="http://localhost/cyberespace/index.php?page=2">Retour à l'ajout de partie</a>
<?php
}
   ?>
<h1>Parties enregistrées</h1>
<table>
    <tr>
        <th>Jeu</th>
        <th>Date</th>
        <th>Joueur 1</th>
        <th>Joueur 2</th>
        <th>Joueur 3</th>
        <th>Joueur 4</th>
    </tr>
    <?php
    $listeParties = $pm->getAllParties();
    foreach($listeParties as $partie){
        echo (
            '<tr><td>'.$partie->getPartie_jeu().'</td>
            <td>'.$partie->getPartie_date().'</td>
            <td>'.$partie->getPartie_joueur1().'</td>
            <td>'.$partie->getPartie_joueur2().'</td>
            <td>'.$partie->getPartie_joueur3().'</td>
            <td>'.$partie->getPartie_joueur4().'</td></tr>');
    }
?>
</table>
