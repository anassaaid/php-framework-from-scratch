<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Welcome <?php echo htmlspecialchars($name); ?></h1>
    <ul>
    	<?php foreach ($colors as $key => $value): ?>
    		<li><?php echo htmlspecialchars($value); ?></li>
    	<?php endforeach; ?>	
    </ul>
</body>
</html>
