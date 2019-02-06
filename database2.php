<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'asd';
    $dbname = 'dbex3';
    $conn = new Mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die('Si è verificato un errore '. $conn->connect_error);
    }
    //$sql = 'SELECT ospiti.name, ospiti.lastname, ospiti.date_of_birth FROM `prenotazioni_has_ospiti` INNER JOIN ospiti ON prenotazioni_has_ospiti.ospite_id = ospiti.id';
    $sql = 'SELECT * FROM ospiti WHERE id = '. $id;
    $result = $conn->query($sql);
    $record = $result->fetch_assoc();
  



?>
