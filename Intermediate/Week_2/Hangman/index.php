<?php 
session_start();

$words = array("waterman", "stier", "plantage", "granaat", "doodskist"); 
$pick_word = $words[rand(0,count($words)-1)];
$_SESSION["points"] = 0;
$counter = 0;

if($_SESSION["word"] == [])
{
	$_SESSION["word"] = str_split($pick_word);
}

$count = 0;
foreach($_SESSION["word"] as $letters)
{
	if($_GET["letters"] == $letters)
	{
		$_SESSION["guessed"][$count] = $_GET["letters"];
	}
	$count++;
}

if(!in_array($_GET["letters"], $_SESSION["word"]))
{
	$_SESSION["wrong"]++;
	$counter = $_SESSION["wrong"];
}

if($_SESSION["index"] == count($_SESSION["word"])-1)
{
	$_SESSION["points"]++;
	$_SESSION["word"] = [];
	$_SESSION["guessed"] = [];
	$_SESSION["wrong"] = 0;
}

if(array_key_exists('reset', $_GET))
{
    $_SESSION["word"] = [];
    $_SESSION["guessed"] = [];
    $_SESSION["wrong"] = 0;	
}


function showImage($counter)
{
	if($counter == 0)
	{
		$hang= "images/img1.png";
	}
	else if($counter == 1)
	{
		$hang= "images/img2.png";
	}
	else if($counter == 2)
	{
		$hang= "images/img3.png";
	}
	else if($counter == 3)
	{
		$hang= "images/img4.png";
	}
	else if($counter == 4)
	{
		$hang= "images/img5.png";
	}
	else if($counter == 5)
	{
		$hang= "images/img6.png";
	}
	else if($counter == 6)
	{
		$hang= "images/img7.png";
	}
	else if($counter == 7)
	{
		$hang= "images/img8.png";
	}
	return $hang;
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="GET">
		<label for="letters">Maak een keuze: </label>
		<select id="letters" name="letters">
			<option value=""></option>
			<option value="a">a</option>
			<option value="b">b</option>
			<option value="c">c</option>
			<option value="d">d</option>
			<option value="e">e</option>
			<option value="f">f</option>
			<option value="g">g</option>
			<option value="h">h</option>
			<option value="i">i</option>
			<option value="j">j</option>
			<option value="k">k</option>
			<option value="l">l</option>
			<option value="m">m</option>
			<option value="n">n</option>
			<option value="o">o</option>
			<option value="p">p</option>
			<option value="q">q</option>
			<option value="r">r</option>
			<option value="s">s</option>
			<option value="t">t</option>
			<option value="u">u</option>
			<option value="v">v</option>
			<option value="w">w</option>
			<option value="x">x</option>
			<option value="y">y</option>
			<option value="z">z</option>
		</select><br><br>
		<input type="submit" value="submit"></input>
		<input type="submit" value="reset" name="reset" id="reset">
	</form>
	<img src="<?php showImage($counter) ?>" alt="hangman"><br>
	
    <?php $_SESSION["index"] = 0; ?>
    <?php foreach ($_SESSION["word"] as $letter) : ?>
        <?php if (in_array($letter, $_SESSION["guessed"])) : ?>
            <?php echo $letter; ?>
            <?php $_SESSION["index"]++; ?>
        <?php else : ?>
            _
        <?php endif; ?>
    <?php endforeach; ?>
    <br>
    <?php echo "wrong: " . $_SESSION["wrong"]; ?>
    <br>
    <?php echo "points: " . $_SESSION["points"]; ?>
    <?php if ($_SESSION["wrong"] >= 8) : ?>
        <h1>GAME OVER</h1>
        <h2>press reset to play again </h2>
    <?php endif; ?>
</body>
</html>