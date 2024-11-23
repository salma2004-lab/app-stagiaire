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

    $stmt = $pdo->prepare("UPDATE stagiaires SET nomStagiaire=?, prenomStagiaire=?, filiereStagiaire=?, anneeEtude=?, typeBac=?, anneeBac=? WHERE matStagiaire=?");
    $stmt->execute([$nomStagiaire, $prenomStagiaire, $filiereStagiaire, $anneeEtude, $typeBac, $anneeBac, $matStagiaire]);

    echo json_encode(["message" => "Stagiaire modifié avec succès."]);
}
