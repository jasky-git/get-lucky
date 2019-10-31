<?php

class User {
    // property declaration
    public $userid;
    public $password;
    public $email;
    public $name;
    public $telegram_username;
    
    public function __construct($userid='', $password='', $name='', $email='', $telegram_username='') {
        $this->userid = $userid;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
        $this->telegram_username = $telegram_username;
    }

    public function authenticate($enteredPwd) {
        // return password_verify ($enteredPwd, $this->password);
        return $enteredPwd === $this->password;
    }
}

?>