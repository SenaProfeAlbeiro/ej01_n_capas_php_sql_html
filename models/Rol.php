<?php
  class Rol{
    /* ATRIBUTOS */
    private $rolCode;
    private $rolName;
    
    /* MÉTODOS */
    
    # Métodos: Sobrecarga de Constructores
    public function __construct(){
      try {        
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
          call_user_func_array(array($this, $f), $a);
        }
      } catch (Exception $e) {
        die($e->getMessage());
      }
    }

    // Constructor: 0 parámetros
    public function __construct0(){}

    // Constructor: 2 parámetros
    public function __construct2($rolCode, $rolName){
      $this->rolCode = $rolCode;
      $this->rolName = $rolName;
    }

    # Métodos: Setters y Getters
    
    // Rol Código
    public function setRolCode($rolCode){
      $this->rolCode = $rolCode;
    }
    public function getRolCode(){
      return $this->rolCode;
    }
    // Rol Nombre
    public function setRolName($rolName){
      $this->rolName = $rolName;
    }
    public function getRolName(){
      return $this->rolName;
    }

  }
?>