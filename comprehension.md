
# Compréhension

## Theme choisi : 
theme-dark


## Les codes ou la logique qu' on a pas encore compris :
<!-- 1. Dans inc/functions.php -->
-  CONCAT(e.first_name, ' ', e.last_name) AS manager_name
- INSERT INTO dept_emp (emp_no, dept_no, from_date, to_date) VALUES ('%s', '%s', '%s', '9999-01-01')
    ON DUPLICATE KEY UPDATE from_date = '%s', to_date = '9999-01-01'
- SELECT e.emp_no,e.first_name,e.last_name,e.gender,e.hire_date
FROM employees e INNER JOIN dept_emp de ON de.emp_no = e.emp_no WHERE de.dept_no = '%s'
AND de.to_date = '9999-01-01' ORDER BY e.last_name, e.first_name LIMIT %d OFFSET %d
-    return (int)$line['total'];
- LEFT JOIN
- TIMESTAMPDIFF(YEAR, e.birth_date, CURDATE())
- empty($conditions) ? '1=1' : implode(' AND ', $conditions);
- logique dans search_employees
<!-- 2. Dans pages/index.php -->
- <?= urlencode($line['dept_no']) ?>
<!-- 3. Dans pages/employees -->
- (int)($_GET['page'] ?? 1) : le (int)
-  utilisations de &larr; et &rarr;
<!-- 4. Dans pages/dept_form -->
- $editing = $dept_no_url !== '' && get_one_department($dept_no_url);
- <?= htmlspecialchars($error) ?>
<!-- 5. Dans pages/emp_form -->
- $editing    = (bool)$existing;
<!-- 6. Dans pages/stats.php -->
- <?= number_format($row['salaire_moyen'], 0, ',', ' ') ?>
<!-- 7. design -->
- * { box-sizing: border-box; }
- (--space),(--color-muted),(--radius)
- collapse
- display: flex; flex-wrap: wrap; gap: var(--space); align-items: flex-end

## Les codes ou la logique qu' on a compris maintenant :
- utilisation de === et !==
- SUM(e.gender = 'M')
- la logique de la fonction make_manager


































