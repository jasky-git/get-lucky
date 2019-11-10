<?php
require_once 'ConnectionManager.php';
require_once 'User.php';

class UserDAO {
    
    public function getUser($name) {
        $sql = 'select * from user where name=:name';

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();
        
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch()) {
            return new User($row['userid'], $row['password'], $row['name'], $row['telegram_username']);
        }
    }

    public function addUser($user){
        $sql = "INSERT IGNORE INTO user (userid, password, name, email, telegram_username) VALUES (:userid, :password, :name, :email, :telegram_username)";

        $connMgr = new ConnectionManager();      
        $conn = $connMgr->getConnection();
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':userid', $user->userid, PDO::PARAM_STR);
        $stmt->bindParam(':password', $user->password, PDO::PARAM_STR);
        $stmt->bindParam(':name', $user->name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $user->email, PDO::PARAM_STR);
        $stmt->bindParam(':telegram_username', $user->telegram_username, PDO::PARAM_STR);

        $isAddOK = False;
        if ($stmt->execute()) {
            $isAddOK = True;
        }

        return $isAddOK;
    }
}

?>