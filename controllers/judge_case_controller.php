<?php  
require_once '../models/db_conn.php';

function getCasesForjudge($id){
    $query="SELECT * FROM cases WHERE judge_id=".$id;
    return doQuery($query);
}

?>
