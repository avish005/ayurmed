<?php 
require('top.php');
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
                                  <span class="breadcrumb-item active">shopping cart</span>
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
                <div class="row">
                    <div class="col-md-12 col-sm-10 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive shopping_cart">
                                <?php
                                    if(!empty($_SESSION['cart'])){
                                ?>
                                <?php
                                if(isset($_SESSION['cart'])){
                                    foreach($_SESSION['cart'] as $key=>$val){
                                    $productArr=get_product($con,'','',$key);
                                    $pname=$productArr[0]['name'];
                                    $mrp=$productArr[0]['mrp'];
                                    $price=$productArr[0]['price'];
                                    $image=$productArr[0]['image'];
                                    $qty=$val['qty'];
                                    ?>
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1"></div>
                                            <div class="col-lg-4 col-md-2 col-sm-2  product_img">
                                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" style="max-width: 250px;"/>
                                            </div>
                                            <div class="col-lg-5" id="product_details">
                                                    <p class="product_name"><?php echo $pname?></p>
                                                    <p>MRP : <span class="old__prize"><?php echo $mrp?> </span> </p>
                                                    <p>Offer Price : <span class="dp"><?php echo $price?></span></p>
                                                    <p class="mobile-view">Qty : <input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>" />
                                                        <a class="btn" id="update" href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a></p>
                                                    <p class="desktop-view">Qty : <input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>" onclick="manage_cart('<?php echo $key?>','update')" style="width: 50px;" />
                                                    <span class="not_enough_stock"></span></p>
                                                    <p>Product Total : <span class="product-subtotal"><?php echo $qty*$price?></span></p>
												
                                                    <p class="btn_links">
                                                        <a class="fr__btn product-remove" href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"> <i class="icon-trash icons"></i> Remove</a>
                                                    </p>
                                            </div>
                                            <div class="col-lg-2"></div>

                                        </div><hr>
                                    <?php } } ?>
                            </div>
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
                        </form> 
                            <?php }else{ ?>
                            <div class="container empty_cart">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 sm-4 xs-4">
                                        <img src="images/cart/emptycart.JPG" alt="Empty_shoppting_cart" style="width: 80%;">
                                    </div>
                                    <div class="col-lg-4">
                                        <h2>Your Basket is Empty</h2><br>
                                        <div class="buttons-cart">
                                            <a class="btn" href="<?php echo SITE_PATH?>">Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                           <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
										
<?php require('footer.php')?>        