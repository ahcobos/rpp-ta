<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Ahcobos\Cube;

class CubeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testInitialization()
    {
      $original_cube  = $this->getOriginal3DCube(3);
      $generated_cube = new App\Ahcobos\Cube(3);
      $this->assertTrue($original_cube == $generated_cube->getCube());
    }

    public function testUpdate()
    {
      $generated_cube = new App\Ahcobos\Cube(3);
      $to_set_value = 10;
      $generated_cube->update(1, 1, 1, $to_set_value);
      $matrix = $generated_cube->getCube();
      $this->assertTrue($matrix[1][1][1] == $to_set_value );
    }

    public function testQuery()
    {
      $generated_cube = new App\Ahcobos\Cube(4);
      $generated_cube->update(2, 2, 2, 4);
      $this->assertTrue($generated_cube->query(1,1,1,3,3,3) == 4);
    }

    public function getOriginal3DCube($size)
    {
      $cube = array();
      for($i = 0; $i< $size;$i++)
      {
        $cube[$i] = array();
        for($j = 0; $j< $size;$j++)
        {
          $cube[$i][$j] =  array();
          for($k = 0; $k< $size;$k++)
          {
            $cube[$i][$j][$k] = 0;
          }
        }
      }
      return $cube;
    }
}
