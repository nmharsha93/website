<html>

	<head>
		<style>
			* {
				font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
				color:#ffffff;				
			}
			body {
				background-color: #3b88c3;
				color:#ffffff;	
			}
			h1 {
				text-align: center;	
			}
			input,textarea {
				width:500px;
				margin-left:370px;
				color:black;
				vertical-align: bottom;
			} 

			#post-content {
				height:200px;
			}

			#submit-button {
				width:100px;
				color: black;
			}

			p {
				margin: 0px;
				border: 0px;
				padding: 0px;
				line-height: 5px;
				margin-left: 600px;
				font-size: 20px;
			}

			#content {
				margin-left: 590px;
			}
		</style>
		<title>Blog admin</title>		
	</head>

	<body>
		<h1>Create new blog post</h1>
		<form action='post_added.php' method='post'>
		<br/><br/>
			<p>Title</p><br/><input type='text' name='title'><br/><br/><br/>
			<p id='content'>Content</p><br/>
			<textarea name='content' id='post-content'></textarea><br/><br/>
			<input type='submit' name='submit' id='submit-button'>
		</form>
	</body>

</html>
