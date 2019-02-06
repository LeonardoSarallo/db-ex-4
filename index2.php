<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <body>

        <div class="container">

            <h1>Ospite</h1>

                      <?php

                        if (empty($_GET['id'])) {
                          echo 'errore';
                        }

                        else {
                          $id = $_GET['id'];
                          include 'database2.php';
                        }
                      ?>

                        <span>Nome: <?php echo $record['name'];?></span> <br>
                        <span>Cognome: <?php echo $record['lastname'];?></span><br>
                        <span>Data di nascita: <?php echo $record['date_of_birth'];?></span><br>

                    



        </div>

        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
