<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
	<h1>Roll Dice: <?= $random ?></h1>
	<h1>Your Guess: <?= $guess ?></h1>
	<?php if ($correct) { ?>
		<h1>Correct</h1>
	<?php } else {?>
		<h1>Wrong</h1>
	<?php } ?>
</body>
</html>