<?php


class User {
    
    public $name;
    public $email;
 //   public $type;
    
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
 //       $this->type = $type;
        
    }
    public function getType(){
        return $this->type;
    }
    
    public function getName() {
        return $this->name;
    }
   
    
}