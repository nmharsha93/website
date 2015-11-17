<html>

	<head> 
		<title>Blog</title>

		<style>
			* {
				font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
				color:#ffffff;				
			}

			body {
				background-color:#3b88c3;	
			}

			h1 {
				text-align:center;
				color: #ffffff;
			}

			#posts div {
				border: 2px solid white;
				padding: 4px;
				text-align: center;
				margin: 4px;
				margin-left: 70px;
				margin-right: 70px;
				color:#ffffff;
			}
		</style>
	</head>

	<body>
		<h1>Blog</h2>
		<?php
			$server_name = "localhost";
			$username = 'root';
			$password='';
			$db_name = 'blog';

			//creating connection
			$conn = new mysqli($server_name, $username, $password, $db_name);
			
			if ($conn->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
			}

			$sql = 'select * from posts order by created_at desc';
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				echo '<div id="posts">';
				while($row = $result->fetch_assoc()) {
					//echo '<div>'
					echo '<div><h3>'.$row['title'].'</h3><p>'.$row['content'].'</p></h3></div>';
				}
				echo '</div>';
			}  else {
				echo '0 results';
			}
		?>
		<a href="index.php" style="color:#ffffff;margin-left:1150px;font-size:20px">Back</a>
	</body>

</html>