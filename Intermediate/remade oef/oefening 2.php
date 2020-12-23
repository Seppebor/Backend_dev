<?php
	$text = "Fuck it, ik ga NxT media studeren."; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>opdracht 2</title>
</head>
<body>
	<p><?php echo str_replace("Fuck","****","$text"); ?></p>
	
	<?php if(strpos($text, 'NxT')== true): ?> 
		<p>It's very good!</p>
	<?php else: ?>
		<p>It's very bad!</p>
	<?php endif; ?>
	
	<p><?php echo str_word_count($text); ?></p>
</body>
</html>