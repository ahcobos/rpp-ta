<?php

namespace App\Ahcobos;

class CubeSolver{

  public function solve($input)
  {
    $parser = new Parser();
    $cases = $parser->parse($input);
    $response = array();
    foreach($cases as $case)
    {
      $response = array_merge($response,$this->solveCase($case));
    }
    return $response;
  }

  public function solveCase($case)
  {
    $output = array();
    $cube = new Cube($case->getCubeSize());
    $instructions = $case->getInstructions();
    foreach($instructions as $instruction)
    {
      $values = $instruction->getValues();
      if(strtoupper($instruction->getName()) == "UPDATE")
      {
        $cube->update($values[0]-1, $values[1]-1, $values[2]-1, $values[3]);
      }
      elseif (strtoupper($instruction->getName()) == "QUERY") {
        // die(var_dump($values));
        $output[] = $cube->query($values[0]-1,
                      $values[1]-1,
                      $values[2]-1,
                      $values[3]-1,
                      $values[4]-1,
                      $values[5]-1);
      }
    }

    return $output;
  }
}
