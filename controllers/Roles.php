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
        $rol->rolCreate();
        header("Location:?c=Roles&a=readRoles");
      }
    }    
    public function readRoles(){
      $roles = new Rol();
      $roles = $roles->rolRead();
      require_once "views/modules/roles/rol_read.view.php";
    }    
    public function updateRol(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $rol = new Rol();
        $rol = $rol->getRolById($_GET['idRol']);
        require_once "views/modules/roles/rol_update.view.php";
      }
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $rol = new Rol(          
          $_POST['rol_code'],
          $_POST['rol_name']
        );
        $rol->rolUpdate();
        header("Location:?c=Roles&a=readRoles");
      }      
    }
    public function deleteRol(){
      $rol = new Rol();
      $rol->rolDelete($_GET['idRol']);
      header("Location: ?c=Roles&a=readRoles");
    }
  }
?>