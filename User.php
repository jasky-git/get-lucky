<?php

class User {
    // property declaration
    public $userid;
    public $password;
    public $email;
    public $name;
    public $tele_username;
    
    public function __construct() {
        $get_arguments = func_get_args();
        $number_of_arguments = func_num_args();
        
        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }
    
    public function __construct3($userid='', $name='', $email='') {
        $this->userid = $userid;
        $this->name = $name;
        $this->email = $email;
    }
    
    public function __construct5($userid='', $name='', $email='', $tele_username='', $password='') {
        $this->userid = $userid;
        $this->name = $name;
        $this->email = $email;
        $this->tele_username = $tele_username;
        $this->password = $password;   
    }

    public function authenticate($enteredPwd) {
        // return password_verify ($enteredPwd, $this->password);
        return $enteredPwd === $this->password;
    }
}

?>