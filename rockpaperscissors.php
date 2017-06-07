<html lang="nl">
<head>
<title>Let's Play!</title>
</head>
<body>
<h3>Rock, Paper, Scissors! en Kevin!</h3>
<?php
session_start();
if(!isset($_SESSION["played"]))
	{
		$_SESSION["played"] = 0;
		$_SESSION["draw"] = 0;
		$_SESSION["win"] = 0;
		$_SESSION["lose"] = 0;
	}
echo"
	<p>
		Score:<br>
		Times played: " . $_SESSION['played'] . "<br>
		Times won: " . $_SESSION['win'] . "<br>
		Times lost: " . $_SESSION['lose'] . "<br>
		Times draw: " . $_SESSION['draw'] . "<br>
	</p>
	<form action = 'code.php' method = 'post'>
	<p>
		Choose your weapon:
	</p>
	<input type = 'checkbox' name = 'reset' value = 'Reset'>Reset score<br>
	<button type = 'submit' name = 'weapon' value = 'Rock'><img src = 'rock.png'>Rock<br>
	<button type = 'submit' name = 'weapon' value = 'Paper'><img src = 'paper.png'>Paper<br>
	<button type = 'submit' name = 'weapon' value = 'Scissors'><img src = 'scissors.png'>Scissors<br>
	</form>"
?>
</body>
</html>
