<?php
namespace App\Ahcobos;

class Parser {

  private $input;
  private $number_cases = 0;

  function parse($text){

    $pieces = explode("\n",$text);
    $problem = false;
    $cases = array();
    $current_case = -1;

    foreach ($pieces as $index => $piece) {
      if($index != $this->number_cases){
        $contents = explode(" ",$piece);
          // Si esta en el inicio de un problema setee el problema
          if(sizeof($contents) == 2){
            $current_case += 1;
            $case = new ProblemCase();
            $case->setCubeSize(intval($contents[0]));
            $case->setInstructionsAmount(intval($contents[1]));
            array_push($cases,$case);
          }else if(sizeof($contents) > 2){
            $instruction = new Instruction($contents[0]);
            $values = array_slice($contents,1);
            $instruction->addValues($values);
            $cases[$current_case]->addInstruction($instruction);
          }
      }
    }
    return $cases;
  }
}




// $parser = new Parser();
// $cases = $parser->parse($text);
