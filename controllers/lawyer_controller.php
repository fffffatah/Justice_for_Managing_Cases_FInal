<?php
    require_once '../models/db_conn.php';
    $results=doQuery("SELECT * FROM sample");
    foreach($results as $result){
        echo "<b>".$result["name"]."</b>";
    }
?>