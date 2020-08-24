<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$order_id=get_safe_value($con,$_GET['id']);

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
                                  <span class="breadcrumb-item active">Order Detail</span>
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
                    $uid=$_SESSION['USER_ID'];
                    $res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image, `order`.* from order_detail,product ,`order` where  `order`.id = '$order_id' and order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");
                    $total_price=0;
                    while($row=mysqli_fetch_assoc($res)){
                    $total_price=$total_price+($row['qty']*$row['price']);
                ?>
                    <div class="row">
                   <div class="col-lg-3 col-md-2 col-sm-2 product_img">
                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" style="max-width: 200px;"/>
                   </div>
                   <div class="col-lg-5" id="product_details">
                        <p class="product_name"><?php echo $row['name']?></p>
                        <p class="qty">Qty : <?php echo $row['qty']?></p>
                        <p>Price : <span class="dp"><?php echo $row['price']?></span></p>
                        <p>Total Price : <span class="dp"><?php echo $total_price?></span></p>

                        <br>

                        <p class="product_name"><strong>Address :</strong><br> <?php echo $row['address']?></p>
                        <p class="qty">City:  <?php echo $row['city']?></p>
                        <p>Pincode : <?php echo $row['pincode']?></span></p>
                        
                   </div>
                    <?php } ?>
                </div>      
            </div>
        </div>
        
        <input type="hidden" id="qty" value="1"/>	
        
<?php require('footer.php')?>        