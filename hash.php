<?php
try {
    echo "start\n";
    $bdd = new PDO('mysql:host=localhost;dbname=php;','root','root');
    $stmt = $bdd->query('SELECT * FROM users');
    $res = $stmt->fetchAll();

    foreach ($res as $row) {
        $mdp = password_hash($row['password'], PASSWORD_DEFAULT);
        $bdd->exec('UPDATE users SET password ="' . $mdp . '" WHERE email= "' . $row['email'] . '"');
        set_time_limit(10);
    }

    echo "end\n";
} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
   
// require_once __DIR__ . "/include/fonctions/debug.php";
// debug($res, true);