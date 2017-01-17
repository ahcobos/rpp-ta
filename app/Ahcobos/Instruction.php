<?php
namespace App\Ahcobos;

class Instruction {

  private $name;
  private $values;

  function __construct($name){
    $this->name = $name;
    $this->values = array();
  }

  function getName(){
    return $this->name;
  }

  function addValues($values){
    $this->values = $values;
  }

  function getValues(){
    return $this->values;
  }
}
