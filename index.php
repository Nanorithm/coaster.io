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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.0.4/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js"></script>

    <script src="/static/js/project.js"></script>
    <script src="/static/js/project-list.js"></script>
    <script src="/static/js/modal.js"></script>
    <!-- Search script -->
    <script src="/static/js/search.js"></script>
    <title>coaster.io</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">coaster.io</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Works</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
                </li>
            </ul>
            <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse2">
                <form class="navbar-form navbar-right form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="Email">Email</label>
                        <input type="email" class="form-control input-sm" id="Email" placeholder="Email" autofocus required />
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="Password">Password</label>
                        <input type="password" class="form-control input-sm" id="Password" placeholder="Password" required />
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Sign in</button>
                </form>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
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
                    <div class="business-card" id="modal">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Testing</h2>
                                <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                                <div class="mail"><a href="#">Open Modal</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="business-card" id="modal">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Testing</h2>
                                <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                                <div class="mail"><a href="#">Open Modal</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="business-card" id="modal">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Testing</h2>
                                <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                                <div class="mail"><a href="#">Open Modal</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="business-card" id="modal">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Testing</h2>
                                <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                                <div class="mail"><a href="#">Open Modal</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="business-card" id="modal">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Testing</h2>
                                <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                                <div class="mail"><a href="#">Open Modal</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="business-card" id="modal">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle profile-img" src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Testing</h2>
                                <div class="job">Insert Drink description here. Possibly some ingredients too.</div>
                                <div class="mail"><a href="#">Open Modal</a> </div>
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
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div id="modal1" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">x</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>
</body>
</html>
