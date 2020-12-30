<?php
    require_once '../models/db_conn.php';
    
    function getCases(){
        function getUser($email,$pass){
            $query="SELECT * FROM cases";
            return doQuery($query);
        }
    }
?>