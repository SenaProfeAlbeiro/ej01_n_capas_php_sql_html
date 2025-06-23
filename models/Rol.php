<?php
  class Rol{
    private $rolCode;
    private $rolName;
    public function __construct(){
      try {
        $this->dbh = DataBase::connection();
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
          call_user_func_array(array($this, $f), $a);
        }
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function __construct0(){}    
    public function __construct2($rolCode, $rolName){
      $this->rolCode = $rolCode;
      $this->rolName = $rolName;
    }
    public function setRolCode($rolCode){
      $this->rolCode = $rolCode;
    }
    public function getRolCode(){
      return $this->rolCode;
    }
    public function setRolName($rolName){
      $this->rolName = $rolName;
    }
    public function getRolName(){
      return $this->rolName;
    }
    public function rolCreate(){
      try {
        $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('rolCode', $this->getRolCode());
        $stmt->bindValue('rolName', $this->getRolName());
        $stmt->execute();
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function rolRead(){
      try {
        $rolList = [];
        $sql = 'SELECT * FROM ROLES';
        $stmt = $this->dbh->query($sql);
        foreach ($stmt->fetchAll() as $rol) {
          $rolObj = new Rol(
            $rol['rol_codigo'],
            $rol['rol_nombre']
          );          
          array_push($rolList, $rolObj);
        }
        return $rolList;
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function getRolById($rolCode) {
      try {
        $sql = "SELECT * FROM ROLES WHERE rol_codigo=:rolCode";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('rolCode', $rolCode);
        $stmt->execute();
        $rolDb = $stmt->fetch();
        $rolObj = new Rol(
          $rolDb['rol_codigo'],
          $rolDb['rol_nombre']
        );
        return $rolObj;
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function rolUpdate(){
      try {
        $sql = 'UPDATE ROLES SET
                  rol_codigo = :rolCode,
                  rol_nombre = :rolName
                WHERE rol_codigo = :rolCode';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('rolCode', $this->getRolCode());
        $stmt->bindValue('rolName', $this->getRolName());
        $stmt->execute();
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function rolDelete($rolCode){
      try {
        $sql = 'DELETE FROM ROLES WHERE rol_codigo = :rolCode';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('rolCode', $rolCode);
        $stmt->execute();
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
  }
?>