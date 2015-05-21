<?php

namespace ModuleData\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Arduino {
    
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;
    
    /** 
    *  @ORM\Column(name="userId", type="integer")
    */
    protected $userId;
    
    /** 
    * @ORM\Column(type="string",nullable=false ,unique=true) 
    */
    protected $arduinoName;
    
    
    public function setUserId($userId){
        $this->userId=$userId;
    }
    
    public function getUserId(){
        return $this->userId;
    }
    
    
    
    public function setArduinoName($data){
        $this->arduinoName=$data;
    }
    
    public function getArduinoName(){
        return $this->arduinoData1;
    }
}
