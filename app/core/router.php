<?php



$controllerName = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'connexion';


$routes=[
    'auth' => [
        'connexion' => 'connexion',
        'inscrire' => 'inscrire',
        'authentifier' => 'authentifier'
    ],
    'apprenant' => [
        'accueil' => 'accueilApprenant',
        'historique' => 'historiqueApprenant',
        'notif' => 'notificationApprenant',
        'profil' => 'profilApprenant'
    ],
    'gerant' => [
        'dashboard' => 'dashboardGerant',
        'paiement' => 'paiementGerant',
        'campagne' => 'campagneGerant',
        'profile' => 'profileGerant',
        'apprenant' => 'apprenantGerant'
    ],
    'coach' => [
        'dashboardCoach' => 'dashboardCoach',
        'audit' => 'auditCoach',
        'stats' => 'statCoach'
    ]
    // ],
    // 'mami' => [
    //     'auth'=> 'mami'
    // ]
];
$fonction=$routes[$controllerName][$action] ?? null;
if($fonction){
    require_once(dirname(__DIR__).'/controllers/'.$controllerName.'Controller.php');
    $fonction();
}else{
    http_response_code(404);
    echo "page not found";
}

