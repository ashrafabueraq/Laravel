@extends('layout.master')


@section('calculate')

<div style="display: flex;     justify-content: center;
align-items: center; height:500px;">
<div style="height: 250px; width:350px;  border:2px solid black">
    
<form action="calcu" method="post" style="margin-left: 10px;">
    @csrf
   

    <label for="">NUMBER 1</label><br>
    <input type="number" name="number1" required> <br> <br>

    <label for="">NUMBER 2</label><br>
    <input type="number" name="number2" required> <br> <br>



  <button type="submit" value="adding" name="btn">ADD</button>
  <button type="submit" value="Substract" name="btn">Substract</button>
  <button type="submit" value="Multiply" name="btn">Multiply</button>
  <button type="submit"  value="Divide" name="btn">Divide</button>
  


</form>
@if (session('message')){

    {{session('message')}}
}
    
@endif


</div>
</div>




    
@endsection