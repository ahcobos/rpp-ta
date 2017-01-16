<?php

namespace App\Ahcobos;

class Cube{

  private $cube;

  public function __construct($size)
  {
    $this->cube = array();
    for($i = 0; $i< $size;$i++)
    {
      $this->cube[$i] = array();
      for($j = 0; $j< $size;$j++)
      {
        $this->cube[$i][$j] =  array();
        for($k = 0; $k< $size;$k++)
        {
          $this->cube[$i][$j][$k] = 0;
        }
      }
    }
  }

  public function query($x1, $y1, $z1, $x2, $y2, $z2)
  {
      $sum = 0;
      for ($i = $x1; $i <= $x2; $i++) {
          for ($j = $y1; $j <= $y2; $j++) {
              for ($k = $z1; $k <= $z2; $k++) {
                  $sum += $this->cube[$i][$j][$k];
              }
          }
      }
      return $sum;
  }

  public function updateValue($x, $y, $z, $value)
  {
    $this->cube[$x][$y][$z] = $value;
  }
}
