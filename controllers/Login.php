<?php
  class Login {
    public function main(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/company/login.view.php";
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {        
        header("Location: ?c=Dashboard");
      }
    }        
  }
?>