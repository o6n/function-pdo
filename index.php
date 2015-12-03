<?php

    require_once('inc/config.php');

    $pdo = __connetti();

    $query = "SELECT * FROM table WHERE column = :keyword";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':keyword', $request);

    $result = $stmt->execute() ? $stmt->fetch(PDO::FETCH_ASSOC) : false;

    __disconnetti($pdo);

?>
