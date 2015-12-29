<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Binteraktif</title>
    <meta name="description" content="Web tasarım ve yazılım odaklı interaktif çözümler, kaliteli hizmet, süresiz destek ve profesyonel web sitesi tasarımı için binteraktif sizinle." />
    <meta name="keywords" content="web tasarım,yazılım,site tasarımı,site yapma,binteraktif,web sitesi,bahçelievler,bakırköy,istanbul,web tasarımcısı,web yazılımcısı,otomatik siteler,bot yapımı,web otomatları" />
    <meta name="copyright" content="Copyright (c) Binteraktif" />
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />

     <script type="text/javascript"  src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript"  src="js/bootstrap.js"></script>
    <script type="text/javascript"  src="js/bootstrap.min.js"></script>
    <script type="text/javascript"  src="js/npm.js">
    </script>
</head>
<body>
	<header>
		<h1>Deneme</h1>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active">
		        	<a href="#">
		        		Web Tasarım 
		        		<span class="sr-only">
		        			(current)
		        		</span>
		        	</a>
		        </li>
		        <li>
		        	<a href="#">
		        		Link
		        	</a>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-right" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(this).scrollTop() > 50){  
	 	  		$('header').addClass("sticky");
	 	  		$("#araba").css({"margin-left": "1000px"});
		 	}
			else{
		    	$('header').removeClass("sticky");
		    	$("#araba").css({"margin-left": "0px"});
		 	}

		});

	</script>
