<?php
require_once 'ConnectionManager.php';
require_once 'User.php';

class UserDAO {
    
    public function getUser($userid) {
        $sql = 'select * from user where userid=:userid';

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();
        
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch()) {
            return new User($row['userid'], $row['password'], $row['name'], $row['email'], $row['telegram_username']);
        }
    }
}

?>