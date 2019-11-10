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


  //parameter: date and userid
  public function deleteTimeline($title){
    $sql = 'delete from history where title=:title';

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    // $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);

    $stmt->execute();
    $count = $stmt->rowCount();

    return $count;
  }

  //parameter: date and userid
  public function getTimeLine(){
    $sql = "SELECT venueId, venue, address, lat, lng FROM history WHERE userId = :userid AND title = :title";
    // $sql = "SELECT venueId, venue, address,lat,lng FROM history";

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();
    $stmt = $conn->prepare($sql);

    $userid = '1';
    $title = 'hello';
    $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $result = array();

    //PDOStatement::fetch styles
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // $result[] = new history($row['date'], $row['venue']);
        $result[] = new history($row['venueId'], $row['venue'], $row['address'], $row['lat'], $row['lng']);
    }

    // clean up resources
    //$connMgr->close($conn,$stmt);

    return $result;
  }

  //to include this in getAllByUserID($userid)
  public function getAllByUserId($userid){
    //WHERE USER = :USER
    // $sql = "SELECT DISTINCT date, venue FROM history";
    // $sql = "SELECT DISTINCT title, venue, date FROM history";
    $sql = "SELECT DISTINCT date, venue, title FROM history WHERE userId = :userid";

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();
    $stmt = $conn->prepare($sql);

    // $userid = '1';
    $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $result = array();

    //PDOStatement::fetch styles
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // $result[] = new history($row['date'], $row['venue']);
        $result[] = new history($row['date'], $row['venue'], $row['title']);
    }

    // clean up resources
    //$connMgr->close($conn,$stmt);

    return $result;
  }
}

?>