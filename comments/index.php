<!DOCTYPE html>
<html>
<head>
	<title>Comment Section</title>

<style>
p{
	font-size: 50px;
	color:red;
}
</style>
</head>
<body>
	<h1>Comment Section</h1>
	<form method="post" action="">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br>
		<label for="comment">Comment:</label>
		<textarea name="comment" id="comment" required></textarea><br>
		<input type="submit" name="submit" value="Post Comment">
	</form>

	<?php
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$date = date('Y-m-d H:i:s');
		$data = $name . '|' . $comment . '|' . $ip . '|' . $date . "\n";
		$file = fopen('comments.txt', 'a');
		fwrite($file, $data);
		fclose($file);
	}

	// Read comments from file and display them
	if(file_exists('comments.txt')) {
		$file = fopen('comments.txt', 'r');
		while($line = fgets($file)) {
			$parts = explode('|', $line);
			$name = $parts[0];
			$comment = $parts[1];
			$ip = $parts[2];
			$date = $parts[3];
			echo '<div>';
			echo '<p><strong>' . $name . '</strong> wrote on ' . $date . ':</p>';
			echo '<p>' . $comment . '</p>';
			echo '<p>IP address: ' . $ip . '</p>';
			echo '</div>';
		}
		fclose($file);
	}
	?>
</body>
</html>