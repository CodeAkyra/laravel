@extends('layout')

@section('content')
<h1>Calculator</h1>
<?php
$num = 10;

?>
<div class="border border-primary border-3 rounded p-3" id="inputNum">
    <?php
    echo $num
    ?>
</div>
<form action="" method="POST" class="numberBtns">
    @csrf
    <div class="row-1">
        <button type="sumbit" name="number" value="1">1</button>
        <button type="submit" name="number" value="2">2</button>
        <button>3</button>
    </div>
    <div class="row-2">
        <button>4</button>
        <button>5</button>
        <button>6</button>
    </div>
    <div class="row-3">
        <button>7</button>
        <button>8</button>
        <button>9</button>
        <button>0</button>
    </div>
</form>

@stop