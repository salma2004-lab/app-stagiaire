<?php
include 'db.php';

if (isset($_GET['matStagiaire'])) {
    $matStagiaire = $_GET['matStagiaire'];
    $stmt = $pdo->prepare("SELECT * FROM stagiaires WHERE matStagiaire = ?");
    $stmt->execute([$matStagiaire]);
    $stagiaire = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($stagiaire);
}
