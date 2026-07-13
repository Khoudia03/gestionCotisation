<?php


function Connexion() {

    require_once(dirname(__DIR__)."/views/authentification/connexion.php");
}

function inscrire() {

    require_once(dirname(__DIR__)."/views/authentification/inscription.php");
}

function authentifier() {

$role = $_POST['role'] ?? '';

switch ($role) {

    case 'gerant':
        header("Location: index.php?controller=gerant&action=dashboard");
        break;

    case 'apprenant':
        header("Location: index.php?controller=apprenant&action=accueil");
        break;

    case 'coach':
        header("Location: index.php?controller=coach&action=dashboardCoach");
        break;

    default:
        header("Location: index.php?controller=auth&action=connexion");
        break;
}

exit;
}