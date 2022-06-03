@extends('layout.master')


@section('calculate')

<div style="display: flex;     justify-content: center;
align-items: center; height:500px;">
<div style="height: 250px; width:350px;  border:2px solid black">
<form action="calculate" method="GET" style="margin-left: 10px;">

    <label for="">NUMBER 1</label><br>
    <input type="number" name="number1" required> <br> <br>

    <label for="">NUMBER 2</label><br>
    <input type="number" name="number2" required> <br> <br>



  <button type="submit" name="adding">ADD</button>
  <button type="submit" name="Substract">Substract</button>
  <button type="submit" name="Multiply">Multiply</button>
  <button type="submit" name="Divide">Divide</button>
  


</form>


@php



if(isset($_GET['adding']) == "Submit"){

$sum = $_GET['number1'] + $_GET['number2'];

echo  '<h5 style = text-align:center;>'.$sum.'</h5>';
}
elseif (isset($_GET['Substract']) == "submit") {
    $sub = $_GET['number1'] - $_GET['number2'];
    echo '<h5  style=text-align:center;>'.$sub.'</h5>';
}
elseif (isset($_GET['Multiply']) == "submit") {
    $mul = $_GET['number1'] * $_GET['number2'];
    echo '<h5  style=text-align:center;>'.$mul.'</h5>';
}
elseif (isset($_GET['Divide']) == "submit") {
    $divi = $_GET['number1'] / $_GET['number2'];
    echo '<h5  style=text-align:center;>'.$divi.'</h5>';
}



@endphp

</div>
</div>


    
@endsection