<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Bootstrap stuffs -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.css" id="bootstrap-css">

    <link rel="stylesheet" href="static/css/style.css?version=53">
    <link rel="stylesheet" href="static/css/carousel.css?version=50">

<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- JQuery -->
    <script src="static/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap -->
    <script src="static/js/bootstrap.min.js"></script>





    <title>coaster.io</title>

</head>
<body>

<header>


    <div class="container">
        <div id="color-overlay"> </div>
        <div class="intro-text" style="z-index: 3">
            <div class="intro-heading">coaster.io</div>
            <div class="intro-lead-in">The last drink mixer you'll ever need</div>
            <a href="#left" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>

<!-- Begin Navbar
<div id="nav">
    <div class="navbar navbar-inverse navbar-static" data-spy="affix" data-offset-top="800">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="#">coaster.io</a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" class="scroll4">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown hidden-lg">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sections <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#left" class="scroll1">Search</a></li>
                            <li><a href="#center" class="scroll2">Drinks</a></li>
                            <li><a href="#right" class="scroll3">List</a></li>
                        </ul>
                    </li>
                    <hr>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/coaster.io/register.php">Sign Up</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                        <ul class="dropdown-menu black-bg" style="padding: 15px;min-width: 250px;">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control logcolor" id="exampleInputEmail2" style="width: 100%" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control logcolor" id="exampleInputPassword2" style="width: 100%" placeholder="Password" required>
                                            </div>
                                            <div class="checkbox">
                                                <label id="wht">
                                                    <input type="checkbox"> Remember me
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
End Nav Bar -->

    <!-- Begin Logged In Navbar -->
<div id="nav">
    <div class="navbar navbar-inverse navbar-static" data-spy="affix" data-offset-top="800">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="navbar-brand" href="#">coaster.io</a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" class="scroll4">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown hidden-lg">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sections <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#left" class="scroll1">Search</a></li>
                            <li><a href="#center" class="scroll2">Drinks</a></li>
                            <li><a href="#right" class="scroll3">List</a></li>
                        </ul>
                    </li>
                    <hr>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong id="wht">{{ Username }}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu black-bg">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left" id="wht"><strong>{{ Username }}</strong></p>
                                        <p class="text-left small" id="wht">thisemail@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">User Favorites</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Log Out</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>

<!-- end logged in bar -->

<div class="container-fluid" id="main">
    <div id="panes" class="row row-grid">
        <!-- 1 -->
        <!-- leftmost pane - searching items -->
        <div id="left" class="col-sm-4">
            <div class="inner">
            <div class="input-group" id="adv-search">
                <input type="text" class="form-control" placeholder="Search...." id = "search" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group" style="color: red">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="filter">Filter by</label>
                                        <select class="form-control">
                                            <option value="0" selected>------</option>
                                            <option value="1">Liquor</option>
                                            <option value="2">Mixer</option>
                                            <option value="3">Garnish</option>
                                        </select>
                                    </div>

                                    <!-- <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button> -->
                                </form>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true" onclick="display();"></span></button>
                    </div>
                </div>

            </div>
			<!-- Tyrone -->
				<br/>
				<div id = "results" style="color:#000000"></div>
            </div>
        </div>
        <!-- 2 -->
        <!-- center pane - display filtered drink cards -->
        <div id="center" class="col-sm-4">
            <div class="inner">

                <!-- Card example

                <div class="business-card" id="modal">
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object img-thumbnail profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Testing</h2>
                            <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                            <div class="mail"><a href="#">Open Modal</a> </div>
                        </div>
                    </div>
                </div> <!-- / example card -->
                <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                        <div class="list-group">
                            <a href="#" class="list-group-item active text-center item-width">
                                <h4 class="glyphicon glyphicon-glass"></h4><br/>Drink
                            </a>
                            <a href="#" class="list-group-item text-center item-width">
                                <h4 class="glyphicon glyphicon-list-alt"></h4><br/>Ingredients
                            </a>
                            <a href="#" class="list-group-item text-center item-width">
                                <h4 class="glyphicon glyphicon-pencil"></h4><br/>Directions
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active">
                            <center>
                                <h1 class="glyphicon glyphicon-glass glyph-size" style="color:#55518a"></h1>
                                <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                <h3 style="margin-top: 0;color:#55518a">Drink Name</h3>
                            </center>
                        </div>
                        <!-- train section -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <h1 class="glyphicon glyphicon-list-alt glyph-size" style="color:#55518a"></h1>
                                <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                <h3 style="margin-top: 0;color:#55518a">1. Ingredient 1</h3>
                            </center>
                        </div>

                        <!-- hotel search -->
                        <div class="bhoechie-tab-content">
                            <center>
                                <h1 class="glyphicon glyphicon-pencil glyph-size" style="color:#55518a"></h1>
                                <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                <h3 style="margin-top: 0;color:#55518a">1. Step 1</h3>
                            </center>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- 3 -->
        <!-- rightmost pane - holds selected items from left pane -->
        <div id="right" class="col-sm-4">
            <div class="inner">
                <h3 style="color: white">Selected Items:</h3>
                <ul class="list-group">
                    <li class="list-group-item" id="selected">This</li>
                    <li class="list-group-item" id="selected">is</li>
                    <li class="list-group-item" id="selected">filler</li>
                    <li class="list-group-item" id="selected">random</li>
                    <li class="list-group-item" id="selected">stuff</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Drink selection section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color: white">Types of Drinks</h2>
                    <h3 class="section-subheading text-muted">Take a look and we'll show you what we have</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">

                        <img  class="img-responsive" alt="" id="whiskeyImg" onclick="pullMixedDrinkImagesforModal(1, 'whiskey')">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Whiskey</h4>
                        <p class="text-muted">Rugged and hard-working</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">

                        <img class="img-responsive" alt="" id="vodkaImg" onclick="pullMixedDrinkImagesforModal(6, 'vodka')">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Vodka</h4>
                        <p class="text-muted">Staying classy</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">

                        <img  class="img-responsive" alt="" id="ginImg" onclick="pullMixedDrinkImagesforModal(2, 'gin')">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Gin</h4>
                        <p class="text-muted">It's definitely not water</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">

                        <img  class="img-responsive" alt="" id="brandyImg">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Brandy</h4>
                        <p class="text-muted">For the old soul</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">

                        <img  class="img-responsive" alt="" id="rumImg" onclick="pullMixedDrinkImagesforModal(3, 'rum')">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Rum</h4>
                        <p class="text-muted">When you're feeling like a captain</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">

                        <img class="img-responsive" alt="" id="tequilaImg" onclick="pullMixedDrinkImagesforModal(4, 'tequila')">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tequila</h4>
                        <p class="text-muted">For those looking for a good and bad night</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; GSU Final Project 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Drink Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Whiskey Drinks</h2>
                                <p class="item-intro text-muted">Rugged and hard-working</p>

                                <ul class="list-inline">
                                    <li><a href="#recipe1" data-toggle="collapse" data-target="#recipe1"><img id="whiskeyDrink1" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe1">Ingredients: <br><br> Directions:</p>
                                    <p>Old Fashioned</p></li>

                                    <li><a href="#recipe2" data-toggle="collapse" data-target="#recipe2"><img id="whiskeyDrink2" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe2">Ingredients: <br><br> Directions:</p>
                                    <p>Manhattan</p></li>

                                    <li><a href="#recipe3" data-toggle="collapse" data-target="#recipe3"><img id="whiskeyDrink3" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe3">Ingredients: <br><br> Directions:</p>
                                    <p>Irish Coffee</p></li>

                                    <li><a href="#recipe4" data-toggle="collapse" data-target="#recipe4"><img id="whiskeyDrink4" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe4">Ingredients: <br><br> Directions:</p>
                                    <p>Mint Julep</p></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Drink Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Vodka Drinks</h2>
                                <p class="item-intro text-muted">Staying classy</p>
                                <ul class="list-inline">
                                    <li><a href="#recipe5" data-toggle="collapse" data-target="#recipe5"><img id="vodkaDrink1" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe5">Ingredients: <br><br> Directions:</p>
                                    <p>Martini</p></li>

                                    <li><a href="#recipe6" data-toggle="collapse" data-target="#recipe6"><img id="vodkaDrink2" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe6">Ingredients: <br><br> Directions:</p>
                                    <p>Bloody Mary</p></li>

                                    <li><a href="#recipe7" data-toggle="collapse" data-target="#recipe7"><img id="vodkaDrink3" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe7">Ingredients: <br><br> Directions:</p>
                                    <p>Cosmopolitan</p></li>
                                </ul>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Drink Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Drink Details Go Here -->
                                <h2>Gin Drinks</h2>
                                <p class="item-intro text-muted">It's definitely not water</p>
                                <ul class="list-inline">
                                    <li><a href="#recipe8" data-toggle="collapse" data-target="#recipe8"><img id="ginDrink1" class="img-responsive" alt=""></a>

                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe8">Ingredients: <br><br> Directions:</p>
                                    <p>Martinez</p></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Drink Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Brandy</h2>
                                <p class="item-intro text-muted">For the old soul</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Drink Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Rum</h2>
                                 <p class="item-intro text-muted">When you're feeling like a captain</p>
                                <ul class="list-inline">
                                    <li><a href="#recipe9" data-toggle="collapse" data-target="#recipe9"><img id="rumDrink1" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe9">Ingredients: <br><br> Directions:</p>
                                    <p>Daiquiri</p></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Drink Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Tequila</h2>
                                <p class="item-intro text-muted">For those looking for a good and bad night</p>
                                <ul class="list-inline">
                                    <li><a href="#recipe10" data-toggle="collapse" data-target="#recipe10"><img id="tequilaDrink1" class="img-responsive" alt=""></a>
                                      <!-- Put database ingredients and instructions here!!-->
                                      <p class="collapse" id="recipe10">Ingredients: <br><br> Directions:</p>
                                    <p>Margarita</p></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modals -->
<!--
    <div id="modal1" class="modal">

        <!-- Modal content
        <div class="modal-content">
            <span class="close">x</span>
            <p>Some text in the Modal..</p>
        </div>

    </div> -->
<script>
    $(document).ready(function(){
        //Handles menu drop down
        $('.dropdown-menu').find('form').click(function (e) {
            e.stopPropagation();
        });
    });

    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });

    $('#nav').affix({
        offset: {
            top: $('header').height()
        }
    });

    var shiftWindow = function() { scrollBy(0, -70) };
    if (location.hash) shiftWindow();
    window.addEventListener("hashchange", shiftWindow);

    $(".page-scroll").click(function() {
        $('html,body').animate({scrollTop: $("#main").offset().top}, 'slow');
        shiftWindow();
    });
    $(".scroll1").click(function() {
        $('html,body').animate({scrollTop: $("#left").offset().top}, 'slow');
        shiftWindow();
    });
    $(".scroll2").click(function() {
        $('html,body').animate({scrollTop: $("#center").offset().top}, 'slow');
        shiftWindow();
    });
    $(".scroll3").click(function() {
        $('html,body').animate({scrollTop: $("#right").offset().top}, 'slow');
        shiftWindow();
    });
    $(".scroll4").click(function() {
        $('html,body').animate({scrollTop: $("#").offset().top}, 'slow');
        shiftWindow();
    });

	function display() {
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("results").innerHTML = this.responseText;
            }
        };
		var search=document.getElementById("search").value;
        xmlhttp.open("GET", "testing/Database Testing/testDBh.php?search=" + search, true);
        xmlhttp.send();
	}
	
	function pullMixedDrinkImagesforModal(id, modal) {
		var xmlhttp = new XMLHttpRequest();
		var a="";
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				a = this.responseText;
				fillModal(a, modal);
			}
		};
		xmlhttp.open("GET", "mixeddrink_ID.php?id="+id, true);
		xmlhttp.send();
		
		
	}
	
	function fillModal(a, modal) {
		if (modal=="whiskey") {
			a=a.split(" ");
			var one=a[0];
			var two=a[1];
			var three=a[2];
			var four=a[3];
			
			document.getElementById("whiskeyDrink1").src="mixeddrink_Image.php?id=" + one;
			document.getElementById("whiskeyDrink2").src="mixeddrink_Image.php?id=" + two;
			document.getElementById("whiskeyDrink3").src="mixeddrink_Image.php?id=" + three;
			document.getElementById("whiskeyDrink4").src="mixeddrink_Image.php?id=" + four;
		}
		
		else if (modal=="vodka") {
			a=a.split(" ");
			var one=a[0];
			var two=a[1];
			var three=a[2];
			
			document.getElementById("vodkaDrink1").src="mixeddrink_Image.php?id=" + one;
			document.getElementById("vodkaDrink2").src="mixeddrink_Image.php?id=" + two;
			document.getElementById("vodkaDrink3").src="mixeddrink_Image.php?id=" + three;
		}
		
		else if (modal=="gin") {
			a=a.split(" ");
			var one=a[0];
			
			document.getElementById("ginDrink1").src="mixeddrink_Image.php?id=" + one;
		}
		
		else if (modal=="rum") {
			a=a.split(" ");
			var one=a[0];
			
			document.getElementById("rumDrink1").src="mixeddrink_Image.php?id=" + one;
		}
		
		else if (modal=="tequila") {
			a=a.split(" ");
			var one=a[0];
			
			document.getElementById("tequilaDrink1").src="mixeddrink_Image.php?id=" + one;
		}
		
		else {	
		}
	}

	function initialize () {
		document.getElementById("whiskeyImg").src="liquor_images.php?id=1";
		document.getElementById("ginImg").src="liquor_images.php?id=2";
		document.getElementById("rumImg").src="liquor_images.php?id=3";
		document.getElementById("tequilaImg").src="liquor_images.php?id=4";
		document.getElementById("brandyImg").src="liquor_images.php?id=5";
		document.getElementById("vodkaImg").src="liquor_images.php?id=6";
		
		
	}

	window.addEventListener( "load", initialize, false );

</script>
</body>
</html>
