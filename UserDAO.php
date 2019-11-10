<?php
require_once 'ConnectionManager.php';
require_once 'User.php';

class UserDAO {

    public function getUser($name, $password) {
        $sql = 'select * from user where name=:name AND password=:password';

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        $user = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return new user($row['userid'], $row['name'], $row['email'], $row['tele_username'], $row['password']);
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