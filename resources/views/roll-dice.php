<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
	<h1>Roll Dice: <?= $random ?></h1>
	<h1>Your Guess: <?= $guess ?></h1>
	<?php if ($random == $guess) { ?>
		<h1>Your guess is correct</h1>
	<?php } else {?>
		<h1>Your guess is wrong</h1>
	<?php } ?>
</body>
</html>