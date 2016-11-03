<!DOCTYPE html>
<html lang="en" ng-app="project">
<head>
    <meta charset="utf-8">

    <!-- Bootstrap stuffs -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">

   <link rel="stylesheet" href="static/css/style.css">

    <!-- JQuery -->
    <script src="/static/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap -->
    <script src="/static/js/bootstrap.min.js"></script>

    <!-- angluarJS
    <script src="/static/js/angular.min.js"></script>
    <script src="/static/js/angular-resource.min.js"></script>
    <script src="/static/js/angular-route.min.js"></script>
    <script src="/static/js/firebase.js"></script>
    <script src="/static/js/angularfire.min.js"></script>
    <script src="/static/js/search.js"></script>
    <script src="/static/js/project-list.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>

    <script src="/static/js/project.js"></script>
    <script src="/static/js/project-list.js"></script>
     <!-- Search script
    <script src="/static/js/search.js"></script> -->
    <script src="/static/js/modal.js"></script>

    <title>coaster.io</title>
</head>
<body>

<!-- Nav Bar -->
<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="100" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">coaster.io</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li class="dropdown hidden-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sections <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#left">Search</a></li>
                    <li><a href="#center">Drinks</a></li>
                    <li><a href="#right">List</a></li>
                </ul>
            </li>
            <hr>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sign Up</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" style="width: 100%" placeholder="Email address" required>
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
    <!-- /.navbar-collapse -->
</nav>

<!-- End Nav Bar -->

    <div class="container-fluid">
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
                                                <option value="0" selected>Liquor</option>
                                                <option value="1">Mixer</option>
                                                <option value="2">Garnish</option>
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
                    <ul class="list-group">
                        <li class="list-group-item" id="selected">This</li>
                        <li class="list-group-item" id="selected">is</li>
                        <li class="list-group-item" id="selected">filler</li>
                        <li class="list-group-item" id="selected">random</li>
                        <li class="list-group-item" id="selected">stuff</li>
                    </ul>

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

    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').removeClass('shrink');
        }
    });
</script>
</body>
</html>
