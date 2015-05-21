<?php

namespace ModuleData\Entity;
use Doctrine\ORM\Mapping as ORM;
use \DateTime;

/**
 * @ORM\Entity
 */
class Data {
    
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;
    
    /**
     * 
     *  @ORM\Column(name="arduinoId", type="string")
     * 
     */
    protected $arduinoId;
    
    /**
     * 
     *  @ORM\Column(name="userId", type="string", length=255)
     * 
     */
    protected $userId;
    
    /** 
     * @ORM\Column(type="string",nullable=true) 
     */
    protected $arduinoData1;
    
    
    /** 
     * @ORM\Column(type="string",nullable=true) 
     */
    protected $arduinoData2;
    
    
    /** 
     * @ORM\Column(type="string",nullable=true) 
     */
    protected $arduinoData3;
    
    
    /**
    * @ORM\Column(type="datetime")
    */
    protected $date;
    
   public function setUserId($userId){
        $this->userId=$userId;
    }
    
    public function getUserId(){
        return $this->userId;
    }
    
    
    public function setArduinoId($arduinoId){
        $this->arduinoId=$arduinoId;
    }
    
    public function getArduinoId(){
        return $this->arduinoId;
    }
    
    
    
    public function setArduinoData1($data){
        $this->arduinoData1=$data;
    }
    
    public function getArduinoData1(){
        return $this->arduinoData1;
    }
    
    
    
    public function setArduinoData2($data){
        $this->arduinoData2=$data;
    }
    
    public function getArduinoData2(){
        return $this->arduinoData2;
    }
    
    
    
    public function setArduinoData3($data){
        $this->arduinoData3=$data;
    }
    public function getArduinoData3(){
        return $this->arduinoData3;
    }
    public function setDate()
    {
        $datetime = new DateTime();
        $datetime->format('Y-m-d H:i:s');
        $this->date= $datetime;
    }
}
