<?php
    $pdo = new PDO('mysql:host=localhost;port=8889;dbname=resume_registry',
        'application', 'Pa$$w0rD');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function pdo_query_s($query, $substitutions) {
        global $pdo;

        $stmt = $pdo->prepare($query);
        $stmt->execute($substitutions);

        return $stmt;
    }
?>
