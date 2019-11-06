<?php

require_once '../connection/ConnectionManager.php';
require_once 'History.php';

class Confirmation_Process_Dao {
    public function getIternary($id,$venue,$address,$lat,$lng){
        $sql = "SELECT venu,address FROM history";

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
            // $result[] = new History($row['venue'], $row['address']);
        // }

        // clean up resources
        //$connMgr->close($conn,$stmt);

        return $result;
    }
}

?>