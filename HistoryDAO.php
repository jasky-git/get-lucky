<?php

require_once 'ConnectionManager.php';
require_once 'History.php';

class HistoryDAO {
    public function addIternary($venueId,$venue,$address,$lat,$lng,$title,$date,$userId){
        $sql = "INSERT INTO history (venueId, venue, address, lat, lng, title, date, userId) VALUES (:venueId, :venue, :address, :lat, :lng, :title, :date, :userId)";

        $connMgr = new ConnectionManager();      
        $conn = $connMgr->getConnection();
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':venueId', $venueId, PDO::PARAM_STR);
        $stmt->bindParam(':venue', $venue, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':lat', $lat, PDO::PARAM_STR);
        $stmt->bindParam(':lng', $lng, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_STR);

        $isAddOK = False;
        if ($stmt->execute()) {
            $isAddOK = True;
        }

        return $isAddOK;
    }
}

?>