<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Home</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="css/styles.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="assets/js/app.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"> Documents Manager </a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
							System Users <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="views/createUserForm.php">Create A User</a></li>
								<li><a href="views/showUsers.php">Show All Users</a></li>
							</ul>
						</li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
							My Documents <span class="caret"></span></a>
						</li>
						<li><a href="views/contact.php">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="views/loginForm.php">Login</a></li>
						<li><a> | </a></li>
						<li><a href="views/createUserForm.php">Sign in</a></li>
					</ul>
				</div>
			</div>
			
			<div class="container-fluid">
				<form action="controllers/searchEngine.php" method="post">
					<input type="text" id="searchbox" name="searchq" placeholder="Search for Documents..">
				</form>
			</div>
		</nav>
	</body>
</html>