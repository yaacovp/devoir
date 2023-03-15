<?php

/**
 *
 *  _____ ____     ___        _
 * |_   _|  _ \   / _ \ _   _(_)________
 *   | | | |_) | | | | | | | | |_  /_  /
 *   | | |  __/  | |_| | |_| | |/ / / /
 *   |_| |_|      \__\_\\__,_|_/___/___|
 *
 *  Consigne : Compléter chaque classe afin de reproduire le jeu d’essai ci-dessous.
 *
 */

// Import Classe
include "Organisation.php";
include "Users.php";
include "Questionnaire.php";

// Importation du jeux d'essai
$listOrganisation[] = new Organisation("TF1", "Issy les moulineaux", 3);
$listOrganisation[] = new Organisation("France 2", "Paris", 2);
$listOrganisation[] = new Organisation("CanalPlus", "Boulogne", 1);
$listOrganisation[] = new Organisation("Netflix", "Los Gatos", 3);

$henri = new Users("Lecompte", "Henri", "h.L@laposte.net");
$paul = new Users("Bocusse", "Paulo", "paulo@bocusse.jambon");
$nathan = new Users("Zag", "Nathan", "nathan@zag.fr");
$beni = new Users("La Tour", "Beni", "latour@free.fr");
$yael = new Users("Rousse", "Yael", "rousse@free.fr");
$celine = new Users("Labelle", "Celine", "celine@senane.net");
$albane = new Users("Camille", "Albane", "camille@albane.com");

$listOrganisation[0]->setUser($celine);
$listOrganisation[0]->setUser($albane);
$listOrganisation[0]->setUser($paul);
$listOrganisation[1]->setUser($beni);
$listOrganisation[1]->setUser($albane);
$listOrganisation[2]->setUser($yael);
$listOrganisation[3]->setUser($henri);
$listOrganisation[3]->setUser($nathan);
$listOrganisation[3]->setUser($celine);

$questionnaire["RH"] = new Questionnaire($listOrganisation[3]);
$questionnaire["CUISINE"] = new Questionnaire($listOrganisation[2]);
$questionnaire["VOITURE"] = new Questionnaire($listOrganisation[1]);
$questionnaire["ENTREPRISE"] = new Questionnaire($listOrganisation[0]);

// Affichage du jeux d'essai
foreach ($questionnaire as $key => $questionnaire) {
    echo "Le questionnaire <b>" . $key . "</b> est destiné à l'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b><br>";
    echo "L'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b> est située à " . $questionnaire->getOrganisation()->getAdresse() . " et compte <b>" . $questionnaire->getOrganisation()->getNbUser() . "</b> utilisateur" . (($questionnaire->getOrganisation()->getNbUser() > 1 ) ? "s" : " ") . "<br>";
    echo "Liste des utilisateurs du questionnaire : <br>";
    foreach ($questionnaire->getOrganisation()->getUsers() as $user) {
        echo "- " . $user->getPrenom() . " " . $user->getNom() . " (" . $user->getEmail() . ")<br>";
    }
    echo "<br>";
}
