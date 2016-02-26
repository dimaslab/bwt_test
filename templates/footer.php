</div> <!-- /container -->

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
        <div class="container"><!-- Collapsable nav bar -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Your site name for the upper left corner of the site -->
            <a href="?" class="brand">My Site</a>

            <!-- Start of the nav bar content -->
            <div class="nav-collapse"><!-- Other nav bar content -->
                ...
                ...

                <!-- The drop down menu -->
                <ul class="nav pull-right">
                    <li><a href="?act=reg">Зарегистрироваться</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Войти <strong class="caret"></strong></a>
                        <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                            <form action="?act=do-login" method="POST" class="well">
                                <label>Login</label>
                                <input name="login" type="text" />
                                <label>Password</label>
                                <input name="password" type="password" />
                                <div style="padding-top: 10px;">
                                    <button type="submit" class="btn">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>