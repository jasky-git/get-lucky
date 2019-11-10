<?php
require_once 'ConnectionManager.php';
require_once 'User.php';

class UserDAO {
    
<<<<<<< HEAD
    public function getUser($name, $password) {
        $sql = 'select * from user where name=:name AND password=:password';
=======
    public function getUser($userid) {
        $sql = 'select * from user where userid=:userid';
>>>>>>> parent of e723bf2... Update on login function

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();
        
        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
<<<<<<< HEAD
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        
        $user = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return new user($row['userid'], $row['name'], $row['email'], $row['tele_username'], $row['password']);
=======
        $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch()) {
            return new User($row['userid'], $row['password'], $row['name'], $row['email'], $row['telegram_username']);
>>>>>>> parent of e723bf2... Update on login function
        }
    }

    public function addUser($name, $email, $tele_username, $password){
        $sql = "INSERT INTO user (name, email, tele_username, password) VALUES (:name, :email, :tele_username, :password)";

        $connMgr = new ConnectionManager();      
        $conn = $connMgr->getConnection();
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':tele_username', $tele_username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $isAddOK = False;
        if ($stmt->execute()) {
            $isAddOK = True;
        }

        return $isAddOK;
    }
}

?>