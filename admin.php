<?php
session_start();
require 'db.php';

if($_SESSION['login'] === 'admin'){
    echo "coucou";
    $select = "SELECT * FROM utilisateurs";
$sql = mysqli_query($conn,$select);
$row = mysqli_fetch_all($sql, MYSQLI_ASSOC);

var_dump($row);

foreach ($row as $v1) {
    foreach ($v1 as $v2) {
        echo "<div class = listuser>"."• "."$v2"."<br>"."</div>";
    }
}

    }
    else{
        header ("refresh:0.1;url=index.php");
    }