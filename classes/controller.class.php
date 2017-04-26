<?php

  abstract class controller {

    protected $html;

    public function get() {}
    public function post() {}
    public function put() {}
    public function delete() {}
    public function __construct() {
      $header = '
      <html ng-app="IS219Gallery">
      <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CodeHub </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
    
    <!---angular stufff---->
    
    
    	
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>


	<!-- DO NOT CHANGE ANYTHING ABOVE THIS LINE-->

	<!-- Angular (ADD HERE) -->

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>


</head>

<body ng-controller="HomeController">
  

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CodeHub</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="index.php?controller=userController&action=profile">Profile</a></a>
                    </li>
                    <li>
                        <a href="index.php?controller=userController&action=myvideo">My Videos</a>
                    </li>
                    <li>
                        <a href="index.php?controller=userController">Login</a>
                    </li>
                    <li>
                        <a href="index.php?controller=userController&action=logout">Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>     
    
      
      
      
      ';
      $this->html .= $header;
    }

    public function getHTML() {
        return $this->html;
    }

  }
