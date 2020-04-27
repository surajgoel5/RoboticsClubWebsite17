<link href="style.css" rel="stylesheet">
<head>
  <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->
  <!-- Basic Page Needs
    ================================================== -->
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Robotics Club IITD</title>
      <!-- Mobile Specific Metas
    ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png" />

        <!-- CSS
    ================================================== -->

	
        <!-- Bootstrap css file-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
          <!-- Font awesome css file-->
          <link href="css/font-awesome.min.css" rel="stylesheet">
            <!-- Superslide css file-->
            <link rel="stylesheet" href="css/superslides.css">
              <!-- Slick slider css file -->
              <link href="css/slick.css" rel="stylesheet">
                <!-- Circle counter cdn css file -->
                <link rel='stylesheet prefetch' href='css/jquery.circliful.css'>
                  <!-- smooth animate css file -->
                  <link rel="stylesheet" href="css/animate.css">
                    <!-- preloader -->
                    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
                    <!-- gallery slider css -->
                    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
                    <!-- Default Theme css file -->
                    <link id="switcher" href="css/themes/red-theme.css" rel="stylesheet">
                      <!-- Main structure css file -->
                      <link href="style.css" rel="stylesheet">

                        <!-- Google fonts -->
                        <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
                          <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

                            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                            <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
                          </head>

<div class="menu_area">
        <nav class=" navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <!--<a class="navbar-brand" href="index.html">Robotics Club <span>IITD</span></a> -->             
              <!-- IMG BASED LOGO  -->
                <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="logo"></a>            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <?php if($_SERVER['REQUEST_URI'] == "/index.php") { echo '<li class="active">'; } else { echo '<li>'; } ?>
			<a href="index.php">Home</a></li>
                 <?php if($_SERVER['REQUEST_URI'] == "/about.php") { echo '<li class="active">'; }else { echo '<li>'; } ?>
			<a href="about.php">About Us</a></li>
                <?php if($_SERVER['REQUEST_URI'] == "/robocon.php") { echo '<li class="active">'; }else { echo '<li>'; } ?>
			<a href="robocon.php">Robocon</a></li>   
                <?php if($_SERVER['REQUEST_URI'] == "/team.php") { echo '<li class="active">'; }else { echo '<li>'; } ?>
			<a href="team.php">Team</a></li>
				<?php if($_SERVER['REQUEST_URI'] == "/projects.php" or  $_SERVER['REQUEST_URI'] == "/RoboticsWebsite2017/robotech.php" ) { echo '<li class="active" class="dropdown">'; }else { echo '<li class="dropdown">'; } ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Robots<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				     <li><a href="projects.php">Projects</a></li>
                    <li><a href="robotech.php">Robotech</a></li>
                 
                          
                  </ul>
                </li> 
                
               <?php if($_SERVER['REQUEST_URI'] == "/contact.php") { echo '<li class="active">'; }else { echo '<li>'; } ?>
			   <a href="contact.php">Contact Us</a></li>
                <!--
				<li><a href="Resources.php">Resources</a></li>                
                     <li><a href="blog-archive.html">Blog</a></li>
                    <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="#">Link Two</a></li>
                    <li><a href="#">Link Three</a></li>               
                  </ul>
                </li>  -->             
                
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
   


