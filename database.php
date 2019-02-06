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
    $sql = 'SELECT * FROM `prenotazioni_has_ospiti`';
    $result = $conn->query($sql);
    $ids = [];
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $ids[] = $row;
        }
    }
?>
