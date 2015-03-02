header('Content-Type: text/x-json; charset: UTF-8');
///////////////////////////////////////////////////////////////////////////////////
//
//                    On prépare le début du retour au format JSON
///////////////////////////////////////////////////////////////////////////////////
$retour_json='';
///////////////////////////////////////////////////////////////////////////////////
//On détermine d'abord les liens "suivant" "precedent" et le "mois en cours" du calendrier
///////////////////////////////////////////////////////////////////////////////////
$mois=$_GET['mois'];
$annee=$_GET['annee'];
$retour_json.='{';
//mois en cours
$mois_fr=getMois($mois);
$titre=htmlentities($mois_fr." ".$annee,ENT_QUOTES);
$retour_json.='"mois_en_cours" : "'.$titre.'" , ';
//lien suivant
$date_suivant=getSuivant($mois,$annee,1);
$lien_suivant="tableau('".$date_suivant[mois]."','".$date_suivant[annee]."')";
$retour_json.='"lien_suivant" : "'.$lien_suivant.'" , ';
//lien précédent
$date_precedent=getSuivant($mois,$annee,-1);
$lien_precedent="tableau('".$date_precedent[mois]."','".$date_precedent[annee]."')";
$retour_json.='"lien_precedent" : "'.$lien_precedent.'" , ';