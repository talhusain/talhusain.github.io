<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>

	<head>
		<Title>
		My Portfolio
		</Title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" href="styles/main.css">
	
	</head>

	<body>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		
		<header class="navbar-inverse">
			<div class= "container">
			<nav role="navigation">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/SampleLoginPage/MyWebsite.php">My Portfolio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://github.com/talhusain">GitHub <span class="sr-only">(current)</span></a></li>
        <li><a href="Resume.docx">Resume</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="JavaScript.html">JavaScript Examples</a></li>
            <li><a href="http://localhost/SampleLoginPage/index.php">Java/SQL Database</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT TYPE=hidden name=hl value="en">
<INPUT type=submit name=btnG VALUE="Google Search">
</td></tr></TABLE>
</FORM>
        </div>
        
      </form>
      
        
      </ul>
    </div><!-- /.navbar-collapse -->
  
</nav>

</div>

</header>
		
		
			<div class="text">
  			<div class="text2">
  			<h1>Thamer Al-Husain </h1>
			<h2>Talhusain@gmail.com</h2>
			<h3>(281)-475-7882</h3>
			</div>
  			<br>
			<strong>Dear Reader, 
			<br>
			<br>
			&emsp;Thank you very much for taking the time to find your way here. This website will have examples of my projects as a Software Engineer and a graduate of Sam Houston State University Computer Science degree program. The aim of this website is to show my capabilities as a developer, and what can be achieved.
			<br>
			<br>
			<br>
			&emsp;I recently graduated with a bachelor’s degree in Computer Science from Sam Houston State University. While I have a comprehensive design background, my emphasis is on Software Development.
			<br>
			<br>
			<br>
			&emsp;I hope to work for a firm that specializes in Software Development. With the right opportunities and experience to cutting edge projects and designs, I believe I can achieve this goal. 
			</strong>
			</div>		
		
	<footer style="color:white">
	
	<br>©2017 My Site
	</footer>

<script src= "scripts/main.js"></script>
<script type="text/javascript">
    var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
     alert("Hello there! I'm glad you made it. This website isn't finished yet, their are many things I'd still like to do with it. For now, please enjoy" + "what is here. This page is simply an introduction and cover letter. Have a great day!");
     localStorage.setItem('alerted','yes');
    }
</script>
	</body>

</html>