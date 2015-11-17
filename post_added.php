<html>

<head>
	<title>Blog</title>
</head>

<body>
	<?php
		if(isset($_POST['submit'])) {
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'blog';

			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn -> connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$content = preg_replace("/\n/","<br/>", $_POST['content']);
			$sql = 'insert into posts(title,content,created_at,updated_at) values ("'.$_POST['title'].'","'.$content.'",now(),now())';
			echo $sql;
			if($conn->query($sql) === TRUE) {
				echo "New post created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
	?>
</body>

</html>