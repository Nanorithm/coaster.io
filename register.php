<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Bootstrap stuffs -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/register.css">

    <!-- JQuery -->
    <script src="static/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap -->
    <script src="static/js/bootstrap.min.js"></script>

    <script src="static/js/modal.js"></script>

    <title>coaster.io | Registration</title>
</head>
<body>
<!-- Nav Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/coaster.io/index.php">coaster.io</a>
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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                    <li>
                        <div class="row">
                            <div class="col-md-12" id="login-modal">
                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <input type="email" class="form-control logcolor" id="exampleInputEmail2" style="width: 100%" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                        <input type="password" class="form-control logcolor" id="exampleInputPassword2" style="width: 100%" placeholder="Password" required>
                                    </div>
                                    <div class="checkbox wht">
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

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                <h2>LOGIN</h2>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="required" style="width: 100%">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="required">
                                </div>
                                <div class="col-xs-6 form-group pull-left checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div>
                                <div class="col-xs-6 form-group pull-right">
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                            </form>
                            <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                <h2>REGISTER</h2>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required="required" value="" style="width: 100%">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="required">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 tabs">
                            <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
                        </div>
                        <div class="col-xs-6 tabs">
                            <a href="#" id="register-form-link"><div class="register">REGISTER</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });
</script>
</body>
</html>
