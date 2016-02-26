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
    <style type="text/css">
        .date{
            font-size: 10pt;
            color: #fff;
            margin: -20px 0px 0px 15px;
            position: absolute;
        }

        h1 {
            margin-bottom: 10px;
        }
        .pages {
            margin-bottom: 20px;
        }
        .panel-primary {
            border-color: #337ab7;
        }
        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid #53A753;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .panel-heading {
            background-image: linear-gradient( #62c462, #51a351);
            padding: 10px;
            border-radius: 3px 3px 0px 0px;
        }
        .panel-title {
            margin: 0px 0px 0px 15px;
            font-size: 21px;
            color: #ffffff;
        }
        .panel-body {
            margin: 15px;
        }
    </style>
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

            <a href="?" class="brand">TEST SITE</a>

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
                        <a class='dropdown-toggle' href='#' data-toggle='dropdown'>Вход <strong class='caret'></strong></a>
                        <div class='dropdown-menu' style='padding: 15px; padding-bottom: 0px;'>
                            <form action='?act=do-login' method='POST' class='well'>
                                <div class='form-group has-success'>
                                <label>Логин</label>
                                <input name='login' type='text'/></div>
                                <label>Пароль</label>
                                <input name='password' type='password' />
                                <div style='padding-top: 10px;'>
                                    <button type='submit' class='btn btn-sm btn-success'>
                                        Войти
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