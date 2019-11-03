<?php

require_once 'ConnectionManager.php';
require_once 'History.php';

class HistoryDAO {
    public function addIternary($id,$venue,$address,$lat,$lng){
        $sql = "INSERT INTO history (id, venue, address, lat, lng) VALUES (:id, :venue, :address, :lat, :lng)";

        $connMgr = new ConnectionManager();      
        $conn = $connMgr->getConnection();
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':venue', $venue, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':lat', $lat, PDO::PARAM_STR);
        $stmt->bindParam(':lng', $lng, PDO::PARAM_STR);

        $isAddOK = False;
        if ($stmt->execute()) {
            $isAddOK = True;
        }

        return $isAddOK;
    }
}

?>