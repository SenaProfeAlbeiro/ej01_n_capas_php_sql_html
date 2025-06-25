<?php
  class User{
    private $rolCode;
    private $userCode;
    private $userName;
    private $userLastname;
    private $userId;
    private $userEmail;
    private $userPass;
    private $userState;
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
    public function __construct2($userEmail, $userPass){
      $this->userEmail = $userEmail;
      $this->userPass = $userPass;
    }
    public function __construct8($rolCode, $userCode, $userName, $userLastname, $userId, $userEmail, $userPass, $userState){
      $this->rolCode = $rolCode;
      $this->userCode = $userCode;
      $this->userName = $userName;
      $this->userLastname = $userLastname;
      $this->userId = $userId;
      $this->userEmail = $userEmail;
      $this->userPass = $userPass;
      $this->userState = $userState;
    }    
    public function setRolCode($rolCode){
      $this->rolCode = $rolCode;
    }
    public function getRolCode(){
      return $this->rolCode;
    }    
    public function setUserCode($userCode){
      $this->userCode = $userCode;
    }
    public function getUserCode(){
      return $this->userCode;
    }
    public function setUserName($userName){
      $this->userName = $userName;
    }
    public function getUserName(){
      return $this->userName;
    }
    public function setUserLastname($userLastname){
      $this->userLastname = $userLastname;
    }
    public function getUserLastname(){
      return $this->userLastname;
    }
    public function setUserId($userId){
      $this->userId = $userId;
    }
    public function getUserId(){
      return $this->userId;
    }
    public function setUserEmail($userEmail){
      $this->userEmail = $userEmail;
    }
    public function getUserEmail(){
      return $this->userEmail;
    }
    public function setUserPass($userPass){
      $this->userPass = $userPass;
    }
    public function getUserPass(){
      return $this->userPass;
    }
    public function setUserState($userState){
      $this->userState = $userState;
    }
    public function getUserState(){
      return $this->userState;
    }
    public function userCreate(){
      try {
        $sql = 'INSERT INTO USUARIOS VALUES (
                  :rolCode,
                  :userCode,
                  :userName,
                  :userLastname,
                  :userId,
                  :userEmail,
                  :userPass,
                  :userState
                )';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('rolCode', $this->getRolCode());
        $stmt->bindValue('userCode', $this->getUserCode());
        $stmt->bindValue('userName', $this->getUserName());
        $stmt->bindValue('userLastname', $this->getUserLastname());
        $stmt->bindValue('userId', $this->getUserId());
        $stmt->bindValue('userEmail', $this->getUserEmail());
        $stmt->bindValue('userPass', $this->getUserPass());
        $stmt->bindValue('userState', $this->getUserState());
        $stmt->execute();
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function userRead(){
      try {
        $userList = [];
        $sql = 'SELECT * FROM userES';
        $stmt = $this->dbh->query($sql);
        foreach ($stmt->fetchAll() as $user) {
          $userObj = new user(
            $user['user_codigo'],
            $user['user_nombre']
          );          
          array_push($userList, $userObj);
        }
        return $userList;
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function getuserById($userCode) {
      try {
        $sql = "SELECT * FROM userES WHERE user_codigo=:userCode";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('userCode', $userCode);
        $stmt->execute();
        $userDb = $stmt->fetch();
        $userObj = new user(
          $userDb['user_codigo'],
          $userDb['user_nombre']
        );
        return $userObj;
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function userUpdate(){
      try {
        $sql = 'UPDATE userES SET
                  user_codigo = :userCode,
                  user_nombre = :userName
                WHERE user_codigo = :userCode';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('userCode', $this->getuserCode());
        $stmt->bindValue('userName', $this->getuserName());
        $stmt->execute();
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
    public function userDelete($userCode){
      try {
        $sql = 'DELETE FROM userES WHERE user_codigo = :userCode';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('userCode', $userCode);
        $stmt->execute();
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }
  }
?>