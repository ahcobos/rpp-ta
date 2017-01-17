@extends('layouts.master')

@section('content')
  <div class="container">
    {!! Form::open(['method' => 'POST','id'=>'problem_solver','route' => ['cube.resolve']]) !!}
    <div class="form-group">
     <label for="comment">Standart Input:</label>
     <textarea class="form-control" rows="5" id="problem" name="problem"></textarea>
     <br>
    {!! Form::submit('Resolve!', ['class' => 'btn']) !!}
    <br>
    {!! Form::close() !!}
    <br>
    <div class="well well-lg" id="answer">output:</div>
  </div>
@stop
