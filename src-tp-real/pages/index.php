<?php
    include('../inc/functions.php');
    $departments = get_all_departments();

?>		
<html>
    <head>
        <title>Les news</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../design/theme-dark/style.css">
    </head>
    <body>
    <div class="container">
    <nav class="navbar">
    <ul>
    <li><a class="btn btn-secondary" href="search.php">🔍 Rechercher un employé</a></li>
    <li><a class="btn btn-secondary" href="stats.php">📊 Statistiques par emploi</a></li>
    <li><a class="btn btn-secondary" href="dept_form.php">➕ Ajouter un département</a></li>
    <li><a class="btn btn-secondary" href="emp_form.php">➕ Ajouter un employé</a></li>
    <li></li>
    </ul>
    </nav>
    <h1>Liste des départements</h1>
 <table class="table" border="1">
    <tr>
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
    <a href="tri_dept.php"><input class="btn btn-secondary" type="submit" value="Triage par ordre croissant"></a>
    </div>
    </body>
</html>
