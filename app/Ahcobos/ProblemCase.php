<?php

namespace App\Ahcobos;

class ProblemCase {

   private $cube_size;
   private $instructions_amount;
   private $instructions;

   function __construct(){
       $this->instructions = array();
   }

   function getCubeSize(){
      return $this->cube_size;
   }

   function setCubeSize($size){
      $this->cube_size = $size;
   }

   function setInstructionsAmount($amount){
      $this->instructions_amount = $amount;
   }

   function addInstruction($instruction){
      array_push($this->instructions,$instruction);
   }

   function getInstructions(){
      return $this->instructions;
   }
}
