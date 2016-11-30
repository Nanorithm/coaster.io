<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap stuffs -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.css" id="bootstrap-css">
    <link rel="stylesheet" href="static/css/style.css?version=56">
    <link rel="stylesheet" href="static/css/carousel.css?version=3">
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
    <script src="static/js/listgroup.min.js"></script>
    <title>coaster.io</title>
    <script>
    </script>
</head>

<body>
    <header>
        <div class="tint">
            <div class="container">
                <div class="intro-text" style="z-index: 2">
                    <img src="static/img/logo.png" width="300px">
                    <div class="intro-heading">coaster.io</div>
                    <div class="intro-lead-in">The last drink mixer you'll ever need</div> <a href="#main" class="page-scroll btn btn-xl">Tell Me More</a> <a href="#portfolio" class="scroll8 btn btn-xl">Our Drinks</a> </div>
            </div>
        </div>
        </div>
    </header>
    <!-- nav bar -->
    <div id="nav-container">
        <?php
$logged_id = 0;
if($SESSION['token'] = $logged_id){
       $logged_id = 0;
}
if($logged_id){
   include 'menu_authenticated.php';
}
else{
   include 'menu_authenticated.php';
}
?>
    </div>
    <!-- nav bar -->
    <div class="container-fluid" id="main">
        <div id="panes" class="row row-grid">
            <!-- 1 -->
            <!-- leftmost pane - searching items -->
            <div id="left" class="col-sm-4">
                <div class="inner" style="overflow-x:auto">
                    <div class="input-group" id="adv-search">
                        <input type="text" class="form-control" placeholder="Search...." id="search" />
                        <div class="input-group-btn">
                            <div class="btn-group" role="group" style="color: red">
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true" onclick="display();"></span></button>
                                <br>
                                <button type="button" class="btn btn-primary" id='move_right' onclick="getActive();"> <span class="glyphicon glyphicon-plus"></span></button>
                                <!-- <input type='button' value='>>' id='move_right' onclick = "addMixedDrinks();"/> -->
                            </div>
                        </div>
                    </div>
                    <!-- Tyrone -->
                    <br/>
                    <div id="results" style="color:#000000"></div>
                </div>
            </div>
            <!-- 2 -->
            <!-- center pane - display filtered drink cards -->
            <div id="center" class="col-sm-4">
                <div class="inner" id="cards">
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
                   
                </div>
            </div>
            <!-- 3 -->
            <!-- rightmost pane - holds selected items from left pane -->
            <div id="right" class="col-sm-4">
                <div class="inner">
                    <h3 style="color: white; text-align: center">Selected Items:</h3>
                    <button type="button" class="btn btn-primary pull-right" id='move_left' style="z-index: 2; position: relative; margin-top: 4px;margin-right: 5px;">Remove</button>
                    <div class="list-group list2" data-toggle="items" style="z-index: 1">
                        <!-- empty div for contents -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Drink selection section -->
    <section id="portfolio">
        <div class="container container-style">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color: white">Types of Drinks</h2>
                    <h3 class="section-subheading text-sub">Take a look and we'll show you what we have</h3> </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"> <img class="img-responsive" alt="" id="whiskeyImg" onclick="pullMixedDrinkImagesforModal(1, 'whiskey')"> </a>
                    <div class="portfolio-caption">
                        <h4>Whiskey</h4>
                        <p class="text-muted">Rugged and hard-working</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal"> <img class="img-responsive" alt="" id="vodkaImg" onclick="pullMixedDrinkImagesforModal(6, 'vodka')"> </a>
                    <div class="portfolio-caption">
                        <h4>Vodka</h4>
                        <p class="text-muted">Staying classy</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal"> <img class="img-responsive" alt="" id="ginImg" onclick="pullMixedDrinkImagesforModal(2, 'gin')"> </a>
                    <div class="portfolio-caption">
                        <h4>Gin</h4>
                        <p class="text-muted">It's definitely not water</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal"> <img class="img-responsive" alt="" id="brandyImg"> </a>
                    <div class="portfolio-caption">
                        <h4>Brandy</h4>
                        <p class="text-muted">For the old soul</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal"> <img class="img-responsive" alt="" id="rumImg" onclick="pullMixedDrinkImagesforModal(3, 'rum')"> </a>
                    <div class="portfolio-caption">
                        <h4>Rum</h4>
                        <p class="text-muted">When you're feeling like a captain</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal"> <img class="img-responsive" alt="" id="tequilaImg" onclick="pullMixedDrinkImagesforModal(4, 'tequila')"> </a>
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
                <div class="col-md-4"> <span class="copyright">Copyright &copy; GSU Final Project 2016</span> </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a> </li>
                        <li><a href="#">Terms of Use</a> </li>
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
                        <div class="rl"> </div>
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
                                    <li>
                                        <a href="#recipe1" data-toggle="collapse" data-target="#recipe1"><img id="whiskeyDrink1" class="img-responsive" alt="" onclick="getInstructions(1, 'recipe1')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe1"></p>
                                        <p>Old Fashioned</p>
                                    </li>
                                    <li>
                                        <a href="#recipe2" data-toggle="collapse" data-target="#recipe2"><img id="whiskeyDrink2" class="img-responsive" alt="" onclick="getInstructions(4, 'recipe2')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe2"></p>
                                        <p>Manhattan</p>
                                    </li>
                                    <li>
                                        <a href="#recipe3" data-toggle="collapse" data-target="#recipe3"><img id="whiskeyDrink3" class="img-responsive" alt="" onclick="getInstructions(8, 'recipe3')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe3"></p>
                                        <p>Irish Coffee</p>
                                    </li>
                                    <li>
                                        <a href="#recipe4" data-toggle="collapse" data-target="#recipe4"><img id="whiskeyDrink4" class="img-responsive" alt="" onclick="getInstructions(9, 'recipe4')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe4"></p>
                                        <p>Mint Julep</p>
                                    </li>
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
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Vodka Drinks</h2>
                                <p class="item-intro text-muted">Staying classy</p>
                                <ul class="list-inline">
                                    <li>
                                        <a href="#recipe5" data-toggle="collapse" data-target="#recipe5"><img id="vodkaDrink1" class="img-responsive" alt="" onclick="getInstructions(3, 'recipe5')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe5"></p>
                                        <p>Martini</p>
                                    </li>
                                    <li>
                                        <a href="#recipe6" data-toggle="collapse" data-target="#recipe6"><img id="vodkaDrink2" class="img-responsive" alt="" onclick="getInstructions(7, 'recipe6')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe6"></p>
                                        <p>Bloody Mary</p>
                                    </li>
                                    <li>
                                        <a href="#recipe7" data-toggle="collapse" data-target="#recipe7"><img id="vodkaDrink3" class="img-responsive" alt="" onclick="getInstructions(10, 'recipe7')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe7"></p>
                                        <p>Cosmopolitan</p>
                                    </li>
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
                        <div class="rl"> </div>
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
                                    <li>
                                        <a href="#recipe8" data-toggle="collapse" data-target="#recipe8"><img id="ginDrink1" class="img-responsive" alt="" onclick="getInstructions(2, 'recipe8')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe8"></p>
                                        <p>Martinez</p>
                                    </li>
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
                        <div class="rl"> </div>
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
                        <div class="rl"> </div>
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
                                    <li>
                                        <a href="#recipe9" data-toggle="collapse" data-target="#recipe9"><img id="rumDrink1" class="img-responsive" alt="" onclick="getInstructions(5, 'recipe9')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe9"></p>
                                        <p>Daiquiri</p>
                                    </li>
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
                        <div class="rl"> </div>
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
                                    <li>
                                        <a href="#recipe10" data-toggle="collapse" data-target="#recipe10"><img id="tequilaDrink1" class="img-responsive" alt="" onclick="getInstructions(6, 'recipe10')"></a>
                                        <!-- Put database ingredients and instructions here!!-->
                                        <p class="collapse" id="recipe10"></p>
                                        <p>Margarita</p>
                                    </li>
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
		var mixedDrinkArray=[];
        var images=[];
	
        $(document).ready(function () {
            //Handles menu drop down
            $('.dropdown-menu').find('form').click(function (e) {
                e.stopPropagation();
            });
        });

        $('#nav').affix({
            offset: {
                top: $('header').height()
            }
        });
        var shiftWindow = function () {
            scrollBy(0, -70)
        };
        if (location.hash) shiftWindow();
        window.addEventListener("hashchange", shiftWindow);
        $(".page-scroll").click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $("#main").offset().top
            }, 'slow');
            shiftWindow();
        });
        $(".scroll1").click(function () {
            $('html,body').animate({
                scrollTop: $("#left").offset().top
            }, 'slow');
            shiftWindow();
        });
        $(".scroll2").click(function () {
            $('html,body').animate({
                scrollTop: $("#center").offset().top
            }, 'slow');
            shiftWindow();
        });
        $(".scroll3").click(function () {
            $('html,body').animate({
                scrollTop: $("#right").offset().top
            }, 'slow');
            shiftWindow();
        });
        $(".scroll4").click(function () {
            $('html,body').animate({
                scrollTop: $("#").offset().top
            }, 'slow');
            shiftWindow();
        });
        
        $(".scroll8").click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $("#portfolio").offset().top
            }, 1200);
        });
        function display() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("results").innerHTML = this.responseText;
                }
            };
            var search = document.getElementById("search").value;
            xmlhttp.open("GET", "testing/Database Testing/testDBh.php?search=" + search, true);
            xmlhttp.send();
        }
		
		function getActive() {
			var a=$( "a.active").html();
			a=a.slice(2, -2);
			addMixedDrinks(a);
		}
        function addMixedDrinks(id) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    a = this.responseText;
					a=a.slice(0,-1);
					mixedDrinkArray = a.split(" ");
					var iterations=mixedDrinkArray.length;
					createCards(mixedDrinkArray, iterations);
                }
            };
            xmlhttp.open("GET", "testing/Database Testing/testDBi.php?id=" + id, true);
            xmlhttp.send();
        }
		
		function createCards(array, iterations) {
            var num=1;
			var div=$( "#cards" );
			div.empty();
			for (var i=0; i<iterations; i++) {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						var a=this.responseText;
						a=a.split("|");
						var strVar="";
                        var image="image"+num.toString();			
strVar += "<div class=\"container container-width\">";
strVar += "<div class=\"card hovercard\">";
	strVar += "   <img id="+image+" alt=\"\"\/>";
strVar += "   <div class=\"info\">";
strVar += "      <div class=\"title\">";
strVar += a[0];
strVar += "      <\/div>";
strVar += "<p>Ingredients:<\/p>";
strVar += "      <div class=\"desc\">"+a[1]+", "+a[2]+", "+a[3]+"<\/div>";
strVar += "<p>Directions:<\/p>";
strVar += "      <div class=\"desc\">"+a[4]+"<\/div>";
strVar += "   <\/div>";
strVar += "<\/div>";
strVar += "<\/div>";
                        num++;
						
						div.append(strVar);
                        showPicture(image, iterations, array);
						
					}
				};
				xmlhttp.open("GET", "mixeddrink_AllData.php?id=" + array[i], true);
				xmlhttp.send();
			}
		}
        
        function showPicture(image, iterations, array) {		
			images.push(image);		
			if (images.length==iterations) {		
				for (var j=0; j<iterations; j++) {		
					document.getElementById(images[j]).src="mixeddrink_Image.php?id=" + array[j];		
				}		
			}		
		}
        
        function pullMixedDrinkImagesforModal(id, modal) {
            var xmlhttp = new XMLHttpRequest();
            var a = "";
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    a = this.responseText;
                    fillModal(a, modal);
                }
            };
            xmlhttp.open("GET", "mixeddrink_ID.php?id=" + id, true);
            xmlhttp.send();
        }
		
		
        function fillModal(a, modal) {
            if (modal == "whiskey") {
                a = a.split(" ");
                var one = a[0];
                var two = a[1];
                var three = a[2];
                var four = a[3];
                document.getElementById("whiskeyDrink1").src = "mixeddrink_Image.php?id=" + one;
                document.getElementById("whiskeyDrink2").src = "mixeddrink_Image.php?id=" + two;
                document.getElementById("whiskeyDrink3").src = "mixeddrink_Image.php?id=" + three;
                document.getElementById("whiskeyDrink4").src = "mixeddrink_Image.php?id=" + four;
            }
            else if (modal == "vodka") {
                a = a.split(" ");
                var one = a[0];
                var two = a[1];
                var three = a[2];
                document.getElementById("vodkaDrink1").src = "mixeddrink_Image.php?id=" + one;
                document.getElementById("vodkaDrink2").src = "mixeddrink_Image.php?id=" + two;
                document.getElementById("vodkaDrink3").src = "mixeddrink_Image.php?id=" + three;
            }
            else if (modal == "gin") {
                a = a.split(" ");
                var one = a[0];
                document.getElementById("ginDrink1").src = "mixeddrink_Image.php?id=" + one;
            }
            else if (modal == "rum") {
                a = a.split(" ");
                var one = a[0];
                document.getElementById("rumDrink1").src = "mixeddrink_Image.php?id=" + one;
            }
            else if (modal == "tequila") {
                a = a.split(" ");
                var one = a[0];
                document.getElementById("tequilaDrink1").src = "mixeddrink_Image.php?id=" + one;
            }
            else {}
        }
        function getInstructions(id, tag) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(tag).innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "mixeddrink_Instructions.php?id=" + id, true);
            xmlhttp.send();
        }
        function initialize() {
            document.getElementById("whiskeyImg").src = "liquor_images.php?id=1";
            document.getElementById("ginImg").src = "liquor_images.php?id=2";
            document.getElementById("rumImg").src = "liquor_images.php?id=3";
            document.getElementById("tequilaImg").src = "liquor_images.php?id=4";
            document.getElementById("brandyImg").src = "liquor_images.php?id=5";
            document.getElementById("vodkaImg").src = "liquor_images.php?id=6";
        }
        window.addEventListener("load", initialize, false);
        //for moving lists
        $('body').on('click', 'a', function () {
            $(this).toggleClass('active');
        });
        $('#move_left').click(function () {
            $('.list1').append($('.list2 .active').removeClass('active'));
			var div=$( "#cards" );
			div.empty();
        });
        $('#move_right').click(function () {
            $('.list2').append($('.list1 .active').removeClass('active'));
        });
    </script>
    <script src="https://cdn.jsdelivr.net/bootstrap.listgroup/1.1.2/listgroup.min.js"></script>
</body>

</html>