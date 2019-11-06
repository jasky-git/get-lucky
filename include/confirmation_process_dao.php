<?php

require_once 'ConnectionManager.php';
include('history.php');

class confirmation_process_dao {
    public function getIternary(){
        $sql = "SELECT venue,address FROM history";

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();
        $stmt = $conn->prepare($sql);
        
        // $stmt->bindParam(':id', $id, PDO::PARAM_STR);

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        

        $result = array();
        
        //PDOStatement::fetch styles
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // while($row = $stmt->fetch()) {
            // $result[] = new history($row['venue'], $row['address']);
        // }

        // clean up resources
        //$connMgr->close($conn,$stmt);

        return $result;
    }
}

?>