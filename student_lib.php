<?php
 class student{
  private $name , $matric , $gender, $dob, $marital, $religion, $activ, $currentYear, $idno, $email;
  
  //----------------------------------------- setter
  public function setName($name){ 
    $this->name = $name;   
  }

  public function setMatric($matric){
    $this->matric=$matric;
  }

  public function setGender($gender){
    $this->gender=$gender;
  } 

  public function setDob($dob){
    $this->dob=$dob;  
  }

  public function setCitizen($citizen){
    $this->citizen=$citizen;  
  }

  public function setMarital($marital){
    $this->marital=$marital;  
  }

  public function setReligion($religion){
    $this->religion=$religion;
  }

  public function setActiv($activ){
    $this->activ=$activ;
  }

  public function setCurrent($currentYear){
    $this->currentYear=$currentYear;
  }

  public function setIdno($idno){
    $this->idno=$idno;
  }

  public function setEmail($email){
    $this->email=$email;
  }

  //-------------------------------------------- getter  
  public function getName(){ 
    return $this->name;
  }
  
  public function getMatric(){
    return $this->matric;
  }

  public function getGender(){
    return $this->gender;
  }

  public function getDob(){
    return $this->dob;
  }

  public function getCitizen(){
    return $this->citizen;
  }

  public function getMarital(){
    return $this->marital;
  }

  public function getReligion(){
    return $this->religion;
  }

  public function getActiv(){
    return $this->activ;
  }

  public function getCurrent(){
    return $this->currentYear;
  }

  public function getIdno(){
    return $this->idno;
  }

  public function getEmail(){
    return $this->email;
  }

 }


?>