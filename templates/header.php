<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="bootstrap/js/jquery-1.12.0.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
// Setup drop down menu
            $('.dropdown-toggle').dropdown();

// Fix input element click problem
            $('.dropdown input, .dropdown label').click(function(e) {
                e.stopPropagation();
            });
        });
    </script>
</head>

<body>
<script type="text/javascript">
    $(function() {
// Setup drop down menu
        $('.dropdown-toggle').dropdown();

// Fix input element click problem
        $('.dropdown input, .dropdown label').click(function(e) {
            e.stopPropagation();
        });
    });
</script>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <a href="?" class="brand">My Site</a>


            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <?php
                    if (IS_ADMIN):
                        echo "<li><a href='?act=logout'>Выйти</a></li>";
                     else:
                        echo "
                        <li><a href='?act=reg'>Зарегистрироваться</a></li>
                        <li class='divider-vertical'></li>
                        <li class='dropdown'>
                        <a class='dropdown-toggle' href='#' data-toggle='dropdown'>Войти <strong class='caret'></strong></a>
                        <div class='dropdown-menu' style='padding: 15px; padding-bottom: 0px;'>
                            <form action='?act=do-login' method='POST' class='well'>
                                <label>Login</label>
                                <input name='login' type='text' />
                                <label>Password</label>
                                <input name='password' type='password' />
                                <div style='padding-top: 10px;'>
                                    <button type='submit' class='btn'>
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </li>
                        ";
                    endif;
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">