<?php define('SCRIPT_ROOT', 'http://localhost:8080/shop_cart'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shop cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href=<?php echo SCRIPT_ROOT . "/public/assets/css/bootstrap.css" ?> rel="stylesheet" />
    <!-- Customize styles -->
    <link href=<?php echo SCRIPT_ROOT . "/public/style.css" ?> rel="stylesheet" />
    <!-- font awesome styles -->
    <link href=<?php echo SCRIPT_ROOT . "/public/assets/font-awesome/css/font-awesome.css" ?> rel="stylesheet">
    <!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

    <!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <!-- Favicons -->
    <link rel="shortcut icon" href=<?php echo SCRIPT_ROOT . "/public/assets/ico/favicon.ico" ?>>
</head>

<body>

    <!--
Lower Header Section 
-->
    <div class="container">
        <div id="gototop"> </div>
        <header id="header">
            <div class="row">
                <div class="span4">
                    <h1>
                        <a class="logo" href="index.html"><span>Twitter Bootstrap ecommerce template</span>
                            <img src=<?php echo SCRIPT_ROOT . "/public/assets/img/logo-bootstrap-shoping-cart.png" ?> alt="bootstrap sexy shop">
                        </a>
                    </h1>
                </div>
                <!-- <div class="span4">
                    <div class="offerNoteWrapper">
                        <h1 class="dotmark">
                            <i class="icon-cut"></i>
                            Twitter Bootstrap shopping cart HTML template is available @ $14
                        </h1>
                    </div>
                </div> -->
                <div style="margin-top: 20px; margin-left: 338px;" class="span4 alignR">
                    <a class="cart" style="color: white; border: 2px solid black;border-radius: 25px;padding: 15px;" href="cart.html"><span><img class="cart-icon" src="https://salt.tikicdn.com/ts/upload/40/44/6c/b80ad73e5e84aeb71c08e5d8d438eaa1.png"><span class="jJyMq">0</span></span><span style="position: relative; top: 8px; left: 7px; margin-right: 14px;">Giỏ hàng</span><span class="badge badge-warning"> $448.42</span></a>
                    <!-- <a class="cart" style="color: black; border: 2px solid black;border-radius: 25px;padding: 10px;" href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a> -->
                    <!-- <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
                    <span class="btn btn-warning btn-mini">$</span>
                    <span class="btn btn-mini">&pound;</span>
                    <span class="btn btn-mini">&euro;</span> -->
                </div>
            </div>
        </header>

        <!--
Navigation Bar Section 
-->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <!-- <li class=""><a href="index.html">Home	</a></li>
			  <li class=""><a href="list-view.html">List View</a></li> -->
                            <li class="active"><a href="grid-view.html">Home</a></li>
                            <li class=""><a href="three-col.html">My Account</a></li>
                            <li class=""><a href="four-col.html">Contact us</a></li>
                        </ul>
                        <form action="#" class="navbar-search pull-left">
                            <input type="text" placeholder="Search" class="search-query span2">
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
                                <div class="dropdown-menu">
                                    <form class="form-horizontal loginFrm">
                                        <div class="control-group">
                                            <input type="text" class="span2" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="control-group">
                                            <input type="password" class="span2" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="control-group">
                                            <label class="checkbox">
                                                <input type="checkbox"> Remember me
                                            </label>
                                            <button type="submit" class="shopBtn btn-block">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
Body Section 
-->
        <?php require_once $data['view'] . ".php" ?>
        <!-- 
Clients 
-->
        <section class="our_client">
            <hr class="soften" />
            <h4 class="title cntr"><span class="text">Manufactures</span></h4>
            <hr class="soften" />
            <div class="row">
                <div class="span2">
                    <a href="#"><img alt="" src=<?php echo SCRIPT_ROOT . "/public/assets/img/1.png" ?>></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src=<?php echo SCRIPT_ROOT . "/public/assets/img/2.png" ?>></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src=<?php echo SCRIPT_ROOT . "/public/assets/img/3.png" ?>></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src=<?php echo SCRIPT_ROOT . "/public/assets/img/4.png" ?>></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src=<?php echo SCRIPT_ROOT . "/public/assets/img/5.png" ?>></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src=<?php echo SCRIPT_ROOT . "/public/assets/img/6.png" ?>></a>
                </div>
            </div>
        </section>

        <!--
Footer
-->
        <footer class="footer">
            <div class="row-fluid">
                <div class="span2">
                    <h5>Your Account</h5>
                    <a href="#">YOUR ACCOUNT</a><br>
                    <a href="#">PERSONAL INFORMATION</a><br>
                    <a href="#">ADDRESSES</a><br>
                    <a href="#">DISCOUNT</a><br>
                    <a href="#">ORDER HISTORY</a><br>
                </div>
                <div class="span2">
                    <h5>Iinformation</h5>
                    <a href="contact.html">CONTACT</a><br>
                    <a href="#">SITEMAP</a><br>
                    <a href="#">LEGAL NOTICE</a><br>
                    <a href="#">TERMS AND CONDITIONS</a><br>
                    <a href="#">ABOUT US</a><br>
                </div>
                <div class="span2">
                    <h5>Our Offer</h5>
                    <a href="#">NEW PRODUCTS</a> <br>
                    <a href="#">TOP SELLERS</a><br>
                    <a href="#">SPECIALS</a><br>
                    <a href="#">MANUFACTURERS</a><br>
                    <a href="#">SUPPLIERS</a> <br />
                </div>
                <div class="span6">
                    <h5>The standard chunk of Lorem</h5>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                    those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                    Malorum" by Cicero are also reproduced in their exact original form,
                    accompanied by English versions from the 1914 translation by H. Rackham.
                </div>
            </div>
        </footer>
    </div><!-- /container -->

    <div class="copyright">
        <div class="container">
            <p class="pull-right">
                <a href="#"><img src=<?php echo SCRIPT_ROOT . "/public/assets/img/maestro.png" ?> alt="payment"></a>
                <a href="#"><img src=<?php echo SCRIPT_ROOT . "/public/assets/img/mc.png" ?> alt="payment"></a>
                <a href="#"><img src=<?php echo SCRIPT_ROOT . "/public/assets/img/pp.png" ?> alt="payment"></a>
                <a href="#"><img src=<?php echo SCRIPT_ROOT . "/public/assets/img/visa.png" ?> alt="payment"></a>
                <a href="#"><img src=<?php echo SCRIPT_ROOT . "/public/assets/img/disc.png" ?> alt="payment"></a>
            </p>
            <span>Copyright &copy; 2013</span>
        </div>
    </div>
    <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=<?php echo SCRIPT_ROOT . "/public/assets/js/jquery.js" ?>></script>
    <script src=<?php echo SCRIPT_ROOT . "/public/assets/js/bootstrap.min.js" ?>></script>
    <script src=<?php echo SCRIPT_ROOT . "/public/assets/js/jquery.easing-1.3.min.js" ?>></script>
    <script src=<?php echo SCRIPT_ROOT . "/public/assets/js/jquery.scrollTo-1.4.3.1-min.js" ?>></script>
    <script src=<?php echo SCRIPT_ROOT . "/public/assets/js/shop.js" ?>></script>
</body>

</html>