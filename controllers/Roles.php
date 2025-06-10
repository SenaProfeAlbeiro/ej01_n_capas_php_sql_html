<?php
  require_once "models/Rol.php";
  class Roles {
    public function main(){}
    public function createRol(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/modules/roles/rol_create.view.php";
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $rol = new Rol(
          null,
          $_POST['rol_name']
        );
        print_r($rol);
      }
    }    
    public function readRoles(){
      require_once "views/modules/roles/rol_read.view.php";
    }    
    public function updateRol(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/modules/roles/rol_update.view.php";
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $rol = new Rol(
          null,
          $_POST['rol_name']
        );
        print_r($rol);
      }      
    }
    public function deleteRol(){
      header("Location: ?c=Roles&a=readRoles");
    }
  }
?>