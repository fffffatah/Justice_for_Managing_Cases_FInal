<?php
    require_once '../models/db_conn.php';

    function getClients($id){
        $query="SELECT * FROM clients WHERE lawyer_id=".$id;
        return doQuery($query);
    }
?>