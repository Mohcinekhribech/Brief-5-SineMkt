<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="public/assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/da9e6ce9d6.js" crossorigin="anonymous"></script>

        <!--linear icon css-->
		<link rel="stylesheet" href="public/assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="public/assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="public/assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="public/assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="public/assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="public/assets/css/responsive.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">

        <meta name="keywords" content="Ariana Home Furnishings, Ariana Furniture, Tommy Bahama, Stickley, Hooker, Bernhardt,
        Brandington, Baker, Century, Sofas, sectionals, tables, recliners, dining chairs, office furniture">
        <meta name="description" content="Ariana Furniture offers luxury furniture and decor from all your favorite designer brands.
        Tommy Bahama, Lexington, Baker, Stickley, Theodore Alexander, Lane Venture, Hickory White, Hancock & Moore, Jessica Charles, 
        Jonathan Charles, Century Furniture, DesignMaster, Sherrill">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	<body>
    <header> 
            <!-- top-area Start -->
            <div class="top-area">
                <div class="header-area">
                    <!-- Start Navigation -->
                    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
    
                        <!-- Start Top Search -->
                        <div class="top-search">
                            <div class="container">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Search -->
    
                        <div class="container">            
                            <!-- Start Atribute Navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="search">
                                        <a href="#"><span class="lnr lnr-magnifier"></span></a>
                                    </li><!--/.search-->
                                    <!--/.search-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                            <span class="lnr lnr-cart"></span>
                                            <span class="badge badge-bg-1">2</span>
                                        </a>
                                        <ul class="dropdown-menu cart-list s-cate">
                                            <li class="single-cart-list">
                                                <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                                                <div class="cart-list-txt">
                                                    <h6><a href="#">arm <br> chair</a></h6>
                                                    <p>1 x - <span class="price">$180.00</span></p>
                                                </div><!--/.cart-list-txt-->
                                                <div class="cart-close">
                                                    <span class="lnr lnr-cross"></span>
                                                </div><!--/.cart-close-->
                                            </li><!--/.single-cart-list -->
                                            <li class="single-cart-list">
                                                <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
                                                <div class="cart-list-txt">
                                                    <h6><a href="#">single <br> armchair</a></h6>
                                                    <p>1 x - <span class="price">$180.00</span></p>
                                                </div><!--/.cart-list-txt-->
                                                <div class="cart-close">
                                                    <span class="lnr lnr-cross"></span>
                                                </div><!--/.cart-close-->
                                            </li><!--/.single-cart-list -->
                                            <li class="single-cart-list">
                                                <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
                                                <div class="cart-list-txt">
                                                    <h6><a href="#">wooden arn <br> chair</a></h6>
                                                    <p>1 x - <span class="price">$180.00</span></p>
                                                </div><!--/.cart-list-txt-->
                                                <div class="cart-close">
                                                    <span class="lnr lnr-cross"></span>
                                                </div><!--/.cart-close-->
                                            </li><!--/.single-cart-list -->
                                            <li class="total">
                                                <span>Total: $0.00</span>
                                                <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                            </li>
                                        </ul>
                                    </li><!--/.dropdown-->
                                    <?php  
                                     if(isset($_SESSION['user'])){
                                    ?>
                                    <li class="nav-setting">
                                        <a href="?p=h&a=Logout" ><i class="fa-solid fa-right-to-bracket " style="font-size=40px"></i></a>
                                    </li>
                                    <?php }else{ ?>
                                    <li class="nav-setting">
                                        <a href="?p=l" ><i class="fa-solid fa-user"></i></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div><!--/.attr-nav-->
                            <!-- End Atribute Navigation -->
    
                            <!-- Start Header Navigation -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="index.html"><div id="titlogo">sine</div><span id="lll">mkt</span>.</a>
    
                            </div><!--/.navbar-header-->
                            <!-- End Header Navigation -->
    
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                    <li><a href="?p=h">home</a></li>
                                    <li><a href="?p=ar">new arrival</a></li>
                                    <li><a href="?p=f" class="clr">features</a></li>
                                    <li><a href="?p=b">blog</a></li>
                                    <?php  
                                     if(isset($_SESSION['user'])){
                                    ?>
                                    <li><a href="?p=a">Dashboard</a></li>
                                    <?php } ?>
                                    <li><a href="?p=c">contact</a></li>
                                </ul><!--/.nav -->
                            </div><!-- /.navbar-collapse -->
                        </div><!--/.container-->
                    </nav><!--/nav-->
                    <!-- End Navigation -->
                </div><!--/.header-area-->
            </header>