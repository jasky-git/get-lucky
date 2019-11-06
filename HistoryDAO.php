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

  public function getTimeLine(){
    $sql = "SELECT venue,address,lat,lng FROM history";

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

  public function getAll(){
    //WHERE USER = :USER
    // $sql = "SELECT DISTINCT date, venue FROM history";
    $sql = "SELECT DISTINCT date, venue FROM history";

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();
    $stmt = $conn->prepare($sql);

    // $stmt->bindParam(':id', $id, PDO::PARAM_STR);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $result = array();

    //PDOStatement::fetch styles
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // $result[] = new history($row['date'], $row['venue']);
        $result[] = new history($row['date'], $row['venue']);
    }

    // clean up resources
    //$connMgr->close($conn,$stmt);

    return $result;
  }
}

?>