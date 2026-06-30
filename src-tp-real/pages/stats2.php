<?php
    include('../inc/functions.php');
    $stats = aug($_GET['x']);
   
?>
<html>
    <head>
        <title>Statistiques par emploi</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../design/theme-dark/style.css">
    </head>
    <body>
    
    <div class="container">
    <nav class="navbar"><p><a class="btn btn-secondary" href="index.php">&larr; Retour aux départements</a></p></nav>
    <h1>Statistiques par emploi</h1>
    <table class="table" border="1">
        <tr>
            <th class="alert-success" >Employees</th>
            <th class="alert-success" >Salaire + X%</th>
        </tr>
        <?php foreach ($stats as $row) {

            ?>
            
            <tr>
                <td><?= $row['nemp'] ?></td>
                <td><?= number_format($row['salaire'], 0, ',', ' ') ?> €</td>
            </tr>
        <?php } ?>
    </table>
    <a class="btn btn-secondary" href="http:augmenter.php">Augmenter les salaires</a>
    </div>
    </body>
</html>
