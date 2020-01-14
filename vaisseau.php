<?php
    $pdo = new PDO('mysql:dbname=star_flight;host:127.0.0.1', 'root', '');
    $query = $pdo->query('SELECT * FROM vaisseau' . $pdo->quote($_POST['email']));
    $user = $query->fetchAll(PDO::FETCH_OBJ);
?>
