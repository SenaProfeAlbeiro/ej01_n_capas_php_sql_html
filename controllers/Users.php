<?php
  require_once "models/User.php";
  class Users {
    public function main(){}
    public function createUser(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/modules/users/user_create.view.php";
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = new User(
          $_POST['rol_code'],
          null,
          $_POST['user_name'],
          $_POST['user_lastname'],
          $_POST['user_id'],
          $_POST['user_email'],
          $_POST['user_pass'],
          $_POST['user_state']
        );
        print_r($user);
      }
    }    
    public function readUsers(){
      require_once "views/modules/users/user_read.view.php";
    }    
    public function updateUser(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {       
        require_once "views/modules/users/user_update.view.php";
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = new User(
          $_POST['rol_code'],
          null,
          $_POST['user_name'],
          $_POST['user_lastname'],
          $_POST['user_id'],
          $_POST['user_email'],
          $_POST['user_pass'],
          $_POST['user_state']
        );
        print_r($user);
      }      
    }
    public function deleteUser(){
      header("Location: ?c=Users&a=readUsers");
    }
  }
?>