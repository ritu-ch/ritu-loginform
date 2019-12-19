<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('location:http://localhost/loginform');
    //echo 'redirecting';
}
?>
<?php
require __DIR__. './config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
.main-content{
	width:100%;
	height:auto;
	float:left;
	padding:10px;
}
.dashboard{
	right: 50;
	width:100%;
	height:auto;
	float:left;
	padding:10px;
}
.item{
	text-align: center;
	width:20%;
	height:150px;
	float:left;
	margin:10px;
	border-radius: 25px;
}
.item a{
	color:#ffffff;
	text-decoration: none;
	font-size:25px;
	font-weight :bold;
	margin-left: 35%;
	text-align: center;
}
.pink{
	background-color:#ff66ff;
}
.sky{
	background-color:#66ccff;
}
.blue{
	background-color:#0000ff;
}
.green{
	background-color:#66ff66;
}
.left-menu ul li a{
	text-align: center;
	color:#ffffff;
	text-decoration: none;
	font-size:30px;
}
.right-menu ul li a{
	text-align: center;
	color:#ffffff;
	text-decoration: none;
	font-size:30px;
}
.left-menu ul li{
	text-align: center;
	background-color:#0000ff;
	width:10%;
	margin:2px;
	border: 2px solid #1090eb;
	border-radius: 30px;
}
.right-menu ul li{
	position: absolute;
	top: 0; 
	right: 0;
	text-align: center;
	background-color:#ff66ff;
	width:10%;
	margin:2px;
	border: 2px solid #1090eb;
	border-radius: 30px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

</style>
</head>
	<body>
		<div class="main-content">
			<div class="left-menu">
				<ul>
					<li><a href="">link1</a></li>
					<li><a href="">link1</a></li>
					<li><a href="">link1</a></li>
					<li><a href="">link1</a></li>
				</ul>
			</div>
			<div class="right-menu">
				<!-- to make an unorderd list -->
				<ul>
				<!-- to represent an item in a list -->
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>
			<div class="dashboard">
			<div class="item sky">
				<a href="" >Item 1</a>
			</div>
			<div class="item green">
				<a href="" >Item 2</a>
			</div>
			<div class="item blue">
					<a href="" >Item 3</a>
				</div>
			<div class="item pink">
				<a href="http://localhost/loginform/blog/blog.php">BLOG</a>
			</div>
			</div>
		</div>
	</body>
</html>