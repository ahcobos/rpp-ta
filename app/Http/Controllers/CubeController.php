<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ahcobos\CubeSolver;
class CubeController extends Controller
{
  /**
   * Displays the default view
   *
   * @return Response
   */
  public function index()
  {
      return view('cube.index');
  }

  public function resolve(Request $request)
  {
    $input = $request->input('problem');
    $solver = new CubeSolver();
    $solution = $solver->solve($input);
    // die($input);
    return response()->json(['response' => $solution]);
  }
}
