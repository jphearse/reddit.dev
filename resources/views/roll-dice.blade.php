@extends('layouts.masterDice')

@section('diceRoll')
	<h2>Rolls</h2>
    <h3>Guess: {{ $guess }}</h3>
	@for ($i = 0; $i <= 5; $i++)
		<?php $random = rand(1, 6)?>
		<p>Number Rolled: {{ $random }}
		@if ($random == $guess)
			Correct</p>
		@endif
		<hr>
	@endfor

    <h2>Make Another Guess</h2>
    <ul>
	    <li><a href="/rolldice/1">Guess 1</a></li>
	    <li><a href="/rolldice/2">Guess 2</a></li>
	    <li><a href="/rolldice/3">Guess 3</a></li>
	    <li><a href="/rolldice/4">Guess 4</a></li>
	    <li><a href="/rolldice/5">Guess 5</a></li>
	    <li><a href="/rolldice/6">Guess 6</a></li>
    </ul>
@stop