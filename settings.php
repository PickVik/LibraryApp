<?php

class Settings {
    
    
     protected function __construct(){
         
         self::Make();
     }
     
     public function Make(){
         
         $this->site_email = 'viki@v.com';
         $this->site_name = 'Viki';
         $this->user_id = '23';
         
     }
     
     
     
}