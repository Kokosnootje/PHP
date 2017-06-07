<?php
	session_start();
	if(isset($_POST["reset"]))
	{
		$_SESSION["played"] = 0;
		$_SESSION["draw"] = 0;
		$_SESSION["win"] = 0;
		$_SESSION["lose"] = 0;
	}
	$_SESSION["played"] += 1;
	$weapon = $_POST['weapon'];
	$pick = array('Rock', 'Paper', 'Scissors');
	$choice = rand(0,2);
	$cpu = $pick[$choice];
	if($weapon == $cpu)
	{
		echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means it's a draw!<br>";
		$_SESSION["draw"]++;
	}
	if($weapon == "Rock")
	{
		if($cpu == "Scissors")
		{
			echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means you win!<br>";
			$_SESSION["win"]++;
		}
		if($cpu == "Paper")
		{
			echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means you lose!<br>";
			$_SESSION["lose"]++;
		}
	}
	if($weapon == "Paper")
	{
		if($cpu == "Rock")
		{
			echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means you win!<br>";
			$_SESSION["win"]++;
		}
		if($cpu == "Scissors")
		{
			echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means you lose!<br>";
			$_SESSION["lose"]++;
		}
	}
	if($weapon == "Scissors")
	{
		if($cpu == "Paper")
		{
			echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means you win!<br>";
			$_SESSION["win"]++;
		}
		if($cpu == "Rock")
		{
			echo "You chose " . $weapon . " and the CPU chose " . $cpu . " which means you lose!<br>";
			$_SESSION["lose"]++;
		}
	}
	echo"
		Want to try again?<br>
		<form action = 'rockpaperscissors.php' method = 'post'>
			<input type = 'submit' name = 'submit' value = 'Retry'>
		</form>
		"
?>