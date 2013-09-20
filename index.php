<?php

require 'Controleur/controleur.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'afficherBillet') {
            if (isset($_GET['id'])) {
                $idBillet = intval($_GET['id']);
                if ($idBillet != 0) {
                    afficherBillet($idBillet);
                }
                else
                    throw new Exception("Identifiant de billet non valide");
            }
            else
                throw new Exception("Identifiant de billet non défini");
        }
        else
            throw new Exception("Action non valide");
    }
    else {  // aucune action définie : affichage de l'accueil
        afficherAccueil();
    }
}
catch (Exception $e) {
    afficherErreur($e->getMessage());
}