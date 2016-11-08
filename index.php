<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Bootstrap stuffs -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.min.css" id="bootstrap-css">

    <link rel="stylesheet" href="static/css/style.css?version=51">
    <link rel="stylesheet" href="static/css/carousel.css?version=50">

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

<!-- Begin Navbar -->
<div id="nav">
    <div class="navbar navbar-default navbar-static" data-spy="affix" data-offset-top="800">
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
                    <li><a href="/coaster.io/register.php">Sign Up</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" style="width: 100%" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" style="width: 100%" placeholder="Password" required>
                                            </div>
                                            <div class="checkbox">
                                                <label>
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
    </div><!-- /.navbar -->
</div>


<!-- End Nav Bar -->
    <div class="container-fluid" id="main">
        <div id="panes" class="row row-grid">
            <!-- 1 -->
            <!-- leftmost pane - searching items -->
            <div id="left" class="col-sm-4">
                <div class="inner">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search...." />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
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
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>
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
                    <h3>Selected Items:</h3>
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

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
</script>
</body>
</html>
