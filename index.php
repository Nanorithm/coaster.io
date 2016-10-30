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
    -->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js">
    </script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>
    <script src="/static/js/project.js"></script>
    <script src="/static/js/project-list.js"></script>
    <!-- Search script -->
    <script src="/static/js/search.js"></script>
    <title>cocktail.io</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">
                    Cocktail.io
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="panes" class="row">
            <!-- 1 -->
            <!-- leftmost pane - searching items -->
            <div id="left" class="col-sm-4">
                <div class="inner" ng-view>
                    <div data-ng-view></div>
                </div>
            </div>
            <!-- 2 -->
            <!-- center pane - display filtered drink cards -->
            <div id="center" class="col-sm-4">
                <div class="inner">
                    test 2
                </div>
            </div>
            <!-- 3 -->
            <!-- rightmost pane - holds selected items from left pane -->
            <div id="right" class="col-sm-4">
                <div class="inner">
                    test3
                </div>
            </div>
        </div>
    </div>
</body>
</html>
