<?php

    function __connetti(){
        $conn =	null;
        try {
            $conn = new PDO(DB_ENGINE.':host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //__debug('Connected');
        }
        catch (PDOException $e) {
            echo '<p>ERRORE: '.$e->getMessage().'</p>'."\n";
            echo '<p>LINEA: '.$e->getLine().'</p>'."\n";
            echo '<p>FILE: '.$e->getFile().'</p>'."\n";
            exit;
        }
        return $conn;
    }

    function __disconnetti($pdo){
        $pdo = null;
        //__debug('Disonnected');
    }

?>
