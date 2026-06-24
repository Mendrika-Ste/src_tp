<?php
    include('../inc/functions.php');
    $depart = get_tri2();

?>		

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/theme-dark/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar"><p><a href="index.php">&larr; Retour aux départements</a></p></nav>
   <h1>Liste des départements</h1>
 <table class="table" border="1">
    <tr>
        <th>Department Number</th>
        <th>Department Name</th>
        <th>Manager actuel</th>
        <th>Nombre d'employés</th>
        <th>Action</th>
    </tr>
    <?php foreach ($depart as $line) {?>
        <tr>
            <td><a href="employees.php?dept_no=<?= urlencode($line['dept_no']) ?>"><?= $line['dept_no']?></a></td>
            <td><?=$line['dept_name']?></td>
            <td><?= $line['manager_name'] ?? '—' ?></td>
            <td><?= $line['nb_employees'] ?></td>
            <td><a href="dept_form.php?dept_no=<?= urlencode($line['dept_no']) ?>">Éditer</a></td>
        </tr>
    <?php } ?>
    </table>
    </div>
 
    
</body>
</html>