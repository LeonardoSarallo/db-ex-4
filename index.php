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

            <h1>Prenotazioni</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prenotazione ID</th>
                        <th>Ospite ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'database.php'; ?>

                    <?php foreach ($ids as $id) { ?>
                        <tr>
                            <td> <?php echo $id['id']; ?></td>
                            <td><?php echo $id['prenotazione_id']; ?></td>
                            <td> <a href="http://localhost/db-ex-4/index2.php?id=<?php echo $id['ospite_id']; ?>"><?php echo $id['ospite_id']; ?></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

        <script src="main.js" charset="utf-8"></script>
    </body>
</html>
