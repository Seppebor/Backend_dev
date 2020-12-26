<?php 
$cars = array (
	array("Mercedes","rood","m-klasse"),
	array("Mercedes","wit","r-klasse"),
	array("Mercedes","rood","r-klasse"),
	array("BMW","wit","X1"),
	array("BMW","wit","X3"),
  	array("BMW","geel","X1"),
	array("Audi","rood","A1"),
	array("Audi","zwart","A3"),
	array("Audi","zwart","A1"),
);
if($_GET['choice'] == 'Mercedes' || $_GET['choice'] == 'Audi' || 
$_GET['choice'] == 'BMW')
{
	$_GET['brand'] = $_GET['choice'];
}
else if($_GET['choice'] == 'rood' || $_GET['choice'] == 'wit' || 
$_GET['choice'] == 'zwart' || $_GET['choice'] == 'geel')
{
	$_GET['color'] = $_GET['choice'];
}
else if($_GET['choice'] == 'X1' || $_GET['choice'] == 'X3' || 
$_GET['choice'] == 'A1' || $_GET['choice'] == 'A3' || $_GET['choice'] == 
'r-klasse' || $_GET['choice'] == 'm-klasse')
{
	$_GET['model'] = $_GET['choice'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht 8</title>
</head>
<body>
	
<?php if($input = $_GET['brand']): ?>
	<?php for ($row = 0; $row < 9; $row++): ?> 	
		<?php if($input == $cars[$row][0]): ?>	
	<p>
			<?php for ($col = 0; $col < 3; $col++): ?> 
				<span><?php echo $cars[$row][$col]; 
?></span>
			<?php endfor; ?>
	</p>
		<?php endif; ?>
	<?php endfor; ?>

	
	
<?php elseif($input = $_GET['color']): ?>
	<?php for ($row = 0; $row < 9; $row++): ?>
		<?php if($input == $cars[$row][1]): ?>
	<p>
			<?php for ($col = 0; $col < 3; $col++): ?> 
				<span><?php echo $cars[$row][$col]; 
?></span>
			<?php endfor; ?>
	</p>
		<?php endif; ?>
	<?php endfor; ?>

	
	
<?php elseif($input = $_GET['model']): ?>
	<?php for ($row = 0; $row < 9; $row++): ?> 
		<?php if($input == $cars[$row][2]): ?>
	<p>
			<?php for ($col = 0; $col < 3; $col++): ?> 
				<span><?php echo $cars[$row][$col]; 
?></span>
			<?php endfor; ?>
	</p>
		<?php endif; ?>
	<?php endfor; ?>
<?php endif; ?>
</body>
</html>
