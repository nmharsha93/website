<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<title>Harsha Nadimpalli</title>

		<script>	
			$(document).ready(function() {

				$("#navbar").find("li").each(function(){
   					var product = $(this);
   					console.log($('a',product).attr('id').slice(0,-3));
   					var field_name = $('a',product).attr('id');
   					console.log(field_name);

   					$("#"+field_name).click(function() {
   						var link = field_name.slice(0,-3);
   						listItems = $("#navbar").find("li").each(function(){
   							var item = $(this);
   							console.log($('a',item).attr('id').slice(0,-3));
   							var link_name = $('a',item).attr('id').slice(0,-3);
   							console.log($('#'+link_name).is(':visible'));
   							if($('#'+link_name).is(':visible')==true && link_name!=link) {	
   								$('#'+link_name).toggle();
   							}
   						});
						console.log('hi there '+link);
						$("#"+link).fadeToggle(1000);
   					});
				});
			});
		</script>
		<style>

			* {
				font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
				color:#ffffff;
			}

			body {
				background-color:#3b88c3;
			}

			#navbar {
				list-style-type: none;
				margin:0 auto;
				padding:0;
				overflow: hidden;
				text-align: center;
			}

			.nav-class li {
				float:left;
			}

			div {
				background-color: #55acee;
				display:none;
				padding:4px;
				color: #FFFFFF;
			}

			#navibar {
				display:block;
			}

			a:link, a:visited {
    			display: block;
    			width: 200px;
    			font-weight: bold;
    			color: #FFFFFF;
    			background-color: #55acee;
    			text-align: center;
    			padding: 4px;
    			font-size:18px;
    			text-decoration: none;
    			text-transform: uppercase;
			}	

			a:hover, a:active {
    			background-color: #3b88c3;
			}

			#left-most {
				margin-left: 100px;
			}

			.project {
				height:150px;
			}

			.projects-list li {
				list-style-type:none;
			}
		</style>
	</head>
<body>

<h1 align='center'>Harsha Nadimpalli</h1>

<div id='navibar'>
	<ul id='navbar' class='nav-class'>
		<li id='left-most'><a id='intro-li' href="#introduction">Introduction</a></li>
		<li><a id='education-li' href="#education">Education</a></li>
		<li><a id='projects-li' href="#projects">Projects</a></li>
		<li><a id='blog-li' href="blog.php">Blog</a></li>
		<li><a id='contact-me-li' href="#contact-me">Contact me</a></li>
	</ul>
</div>



<div id="intro">
	<h2 align='center'>Introduction</h2>
	<p align='center'>Hi my name is Harsha. I am 22 years old and currently work in Flipkart as SDE-I</p>
</div>

<div id="education">
	<h2 align='center'>Education</h2>
	<p align='center'>I completed my B.Tech in Computer Science and Engineering at IIT Guwahati and passed out in 2015</p>
</div>

<div id='projects' class='project'>
	<h2 align='center'>Projects</h2>
	<p align='center'>I have worked on the following set of projects:</p>
	<ul align='center' class='projects-list'>
		<li>Breadboard Simulator</li>
		<li>Multiprocessor task scheduling</li>
	</ul>
</div>

</body>
</html>

