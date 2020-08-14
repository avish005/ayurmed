<<<<<<< HEAD
<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$uid=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select product.name,product.image,product.price,product.mrp,product.id as pid,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'");
?>

 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Wishlist</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <?php
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <div class="row">
                   <div class="col-lg-3 col-md-2 col-sm-2 product_img">
                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" style="max-width: 200px;"/>
                   </div>
                   <div class="col-lg-5" id="product_details">
                        <p class="product_name"><?php echo $row['name']?></p>
                        <p class="old__prize"><?php echo $row['mrp']?> </p>
                        <p class="dp"><?php echo $row['price']?></p>
                        <p class="btn_links">
                            <a class="fr__btn product-remove" href="wishlist.php?wishlist_id=<?php echo $row['id']?>"> <i class="icon-trash icons"></i> Remove</a>
                            <a href="javascript:void(0)" onclick="manage_cart('<?php echo $row['pid']?>','add')" class="fr__btn product-remove">Add to Cart</a></td>
                        </p>
                   </div>
                </div><hr><?php } ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="buttons-cart--inner">
                            <div class="buttons-cart">
                                <a class="btn" href="<?php echo SITE_PATH?>">Continue Shopping</a>
                            </div>
                            <div class="buttons-cart checkout--btn float-right">
                                <a class="btn" href="<?php echo SITE_PATH?>checkout.php">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<input type="hidden" id="qty" value="1"/>						
=======
<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$uid=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select product.name,product.image,product.price,product.mrp,product.id as pid,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'");
?>

 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Wishlist</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <?php
                    while($row=mysqli_fetch_assoc($res)){
                ?>
                <div class="row">
                   <div class="col-lg-3 col-md-2 col-sm-2 product_img">
                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" style="max-width: 200px;"/>
                   </div>
                   <div class="col-lg-5" id="product_details">
                        <p class="product_name"><?php echo $row['name']?></p>
                        <p class="old__prize"><?php echo $row['mrp']?> </p>
                        <p class="dp"><?php echo $row['price']?></p>
                        <p class="btn_links">
                            <a class="fr__btn product-remove" href="wishlist.php?wishlist_id=<?php echo $row['id']?>"> <i class="icon-trash icons"></i> Remove</a>
                            <a href="javascript:void(0)" onclick="manage_cart('<?php echo $row['pid']?>','add')" class="fr__btn product-remove">Add to Cart</a></td>
                        </p>
                   </div>
                </div><hr><?php } ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="buttons-cart--inner">
                            <div class="buttons-cart">
                                <a class="btn" href="<?php echo SITE_PATH?>">Continue Shopping</a>
                            </div>
                            <div class="buttons-cart checkout--btn float-right">
                                <a class="btn" href="<?php echo SITE_PATH?>checkout.php">checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<input type="hidden" id="qty" value="1"/>						
>>>>>>> 06746b6be5800c79eee298f6566b9a42f5e1d0eb
<?php require('footer.php')?>        