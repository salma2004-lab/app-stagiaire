<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matStagiaire = $_POST['matStagiaire'];
    $nomStagiaire = $_POST['nomStagiaire'];
    $prenomStagiaire = $_POST['prenomStagiaire'];
    $filiereStagiaire = $_POST['filiereStagiaire'];
    $anneeEtude = $_POST['anneeEtude'];
    $typeBac = $_POST['typeBac'];
    $anneeBac = $_POST['anneeBac'];

    $stmt = $pdo->prepare("INSERT INTO stagiaires (matStagiaire, nomStagiaire, prenomStagiaire, filiereStagiaire, anneeEtude, typeBac, anneeBac) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$matStagiaire, $nomStagiaire, $prenomStagiaire, $filiereStagiaire, $anneeEtude, $typeBac, $anneeBac]);

    echo json_encode(["message" => "Stagiaire ajouté avec succès."]);
}
