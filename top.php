<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$wishlist_count=0;
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();

if(isset($_SESSION['USER_LOGIN'])){
	$uid=$_SESSION['USER_ID'];
	
	if(isset($_GET['wishlist_id'])){
		$wid=get_safe_value($con,$_GET['wishlist_id']);
		mysqli_query($con,"delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count=mysqli_num_rows(mysqli_query($con,"select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$meta_title="My Ecom Website";
$meta_desc="My Ecom Website";
$meta_keyword="My Ecom Website";
if($mypage=='product.php'){
	$product_id=get_safe_value($con,$_GET['id']);
	$product_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from product where id='$product_id'"));
	$meta_title=$product_meta['meta_title'];
	$meta_desc=$product_meta['meta_desc'];
	$meta_keyword=$product_meta['meta_keyword'];
}
if($mypage=='categories.php'){
    $cat_id=get_safe_value($con,$_GET['id']);
    $cat_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from categories where id='$cat_id'"));
    $meta_title=$cat_meta['categories'];
	
} if($mypage=='contact.php'){
 	$meta_title='Contact Us';
} if($mypage=='login.php'){
 	$meta_title='Login / Register';
} 

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $meta_title?></title>
    <meta name="description" content="<?php echo $meta_desc?>">
	<meta name="keywords" content="<?php echo $meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<style>
	.htc__wishlist,.htc__qua {
		background: #03a9f4 ;
        border-radius: 100%;
        color: #fff;
        font-size: 9px;
        height: 17px;
        line-height: 19px;
        position: absolute;
        right: 30px;
        text-align: center;
        width: 17px;
    }
    .htc_qua_no_login{
        margin-top: 25px;
        left: 10px;
    }
    </style>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

	<!-- Body main wrapper start -->
	
		
    <div class="wrapper">
        <header id="htc__header" class="htc__header__area header--one">
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.php"><img src="images/logo/4.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                        <?php
										foreach($cat_arr as $list){
											?>
											<li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
											<?php
										}
										?>
                                        <li><a href="contact.php">contact</a></li>
                                        <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_ID']){
											?>
                                            <li class="drop"><a href="#">Hi, <?php echo $_SESSION['USER_NAME'];?></a>
                                                <ul class="dropdown">
                                                    <li><a href="wishlist.php" class="mr15"><i class="fa fa-heart"></i> Wishlist <span class="htc__wishlist"><?php echo $wishlist_count?></span></a></li>
                                                    <li><a href="cart.php"><i class="fa fa-opencart"></i> Cart <span class="htc__qua"><?php echo $totalProduct?></span></a></li>
                                                    <li><a href="my_order.php"><i class="fa fa-list"></i> Order</a></li>
                                                    <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                                </ul>
                                            </li>
                                        <?php
										}else{
											echo '<li><a href="login.php" class="mr15">Login/Register</a></li>';
										}
                                        ?>
                                        <li><a href="cart.php"><i class="fa fa-opencart"></i><span class="htc__qua htc_qua_no_login"><?php echo $totalProduct?></span></a></li>
                                      
                                    </ul>

                                    
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <?php
											foreach($cat_arr as $list){
												?>
												<li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
												<?php
											}
											?>
                                            <li><a href="contact.php">contact</a></li>
                                            <?php if(isset($_SESSION['USER_LOGIN'])){
                                            ?>
                                                <li><a class="dropdown-item" href="wishlist.php">Wishlist</a></li>
                                                <li><a class="dropdown-item" href="my_order.php">Order</a></li>
                                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                                
                                            <?php }else{
											echo '<li><a href="login.php" class="mr15">Login/Register</a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>

                            <!---------------------------------------------- SEARCH ICON -------------------------------------------------------->
                           <div class="col-lg-2 col-md-1 col-sm-1">
                                <div class="header__right pull-right search_icon">
                                    <?php 
                                    $class="mr15";
                                    if(isset($_SESSION['USER_LOGIN'])){
                                        $class="";
                                    }
                                    ?>
                                    <div class="search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
        </header>

        <!--------------------------------------------------------------- SEARCH OVERLAY ------------------------------------------------------->
		<div class="body__overlay"></div>
		<div class="offset__wrapper">
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">
                                <form action="search.php" method="get">
                                    <input placeholder="Search here... " type="text" name="str" id="search">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>