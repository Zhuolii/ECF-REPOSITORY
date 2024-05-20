<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrf_token = $_POST['csrf_token'];
    if (!isset($_SESSION['csrf_token']) || $csrf_token !== $_SESSION['csrf_token']) {
        // Erreur, jeton CSRF invalide
        exit('Erreur de sécurité');
    }

    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Traiter le formulaire (envoyer l'email, par exemple)
    // ...

    // Supprimer le jeton CSRF de la session
    unset($_SESSION['csrf_token']);

    // Rediriger l'utilisateur ou afficher un message de succès
    header('Location: thank_you.php');
    exit;
}