<?php
    include('../inc/functions.php');
    $departments = get_all_departments();

?>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les news</title>
        <link rel="stylesheet" href="../design/theme-dark/style.css">
    </head>
<body>
<nav class="navbar">
    <h1>Liste des départements</h1>
    <ul><a href="search.php">🔍 Rechercher un employé</a></ul>
    <ul><a href="stats.php">📊 Statistiques par emploi</a></ul>
    <ul><a href="dept_form.php">➕ Ajouter un département</a></ul>
    <ul><a href="emp_form.php">➕ Ajouter un employé</a></ul>
</nav>
<div class="container">

 <table class="table" border="1">
    <tr class="table tr">
        <th>Department Number</th>
        <th>Department Name</th>
        <th>Manager actuel</th>
        <th>Nombre d'employés</th>
        <th>Action</th>
    </tr>
    <?php foreach ($departments as $line) {?>
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
