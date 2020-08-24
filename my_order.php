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
                                  <span class="breadcrumb-item active">My Order</span>
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
                    <h2>My Order<small>(s)</small></h2><br><hr>
                    <?php
                        $uid=$_SESSION['USER_ID'];
                        $res=mysqli_query($con,"select `order`.*,order_status.name as order_status_str from `order`,order_status where `order`.user_id='$uid' and order_status.id=`order`.order_status order by `order`.added_on desc");
                        while($row=mysqli_fetch_assoc($res)){
                            
                            $payment_status = $row['payment_status'];
                            $order_status = $row['order_status_str'];
                            $color = '';
                            if($payment_status == 'pending' || $payment_status == 'Pending'){
                                $color = '#FFFF00   ';
                            }
                            if($payment_status == 'success' || $payment_status == 'Success'){
                                $color = 'green';
                            }
                            if($payment_status == 'failure' || $payment_status == 'Failure' || $order_status == 'canceled' || $order_status == 'Canceled'){
                                $color = 'orangered';
                            }
                    ?>
                   
                    <div class="col-lg-3 col-md-3 col-sm-2 product_img"  style="padding:20px; margin-bottom:20px;">
                        <p>ORDER ID<a href="my_order_details.php?id=<?php echo $row['id']?>" class="btn btn--blue btn-block"> <?php echo $row['id']?></a></p><br>
                        <h3><a href="order_pdf.php?id=<?php echo $row['id']?>" id="pdf_invoice" style=""> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>Invoice</span></a></h3><br>
                        <h3>Purchased on - <span><?php echo $row['added_on']?></span></h3><br>
                        <h3>Order Status - <span style="color:<?php echo $color?>; text-transform: capitalize;"><?php echo $row['order_status_str']?></span></h3><br>
                        <h3>Payment Mode- <span><?php echo $row['payment_type']?></span></h3><br>
                        <h3>Payment Status - <span style="color:<?php echo $color?>; text-transform: capitalize;"><?php echo $row['payment_status']?></span></h3>
                    </div>    
                    <div class="col-lg-1"></div>
                    <?php } ?>
                </div>      
            </div>
        </div>
        
        <input type="hidden" id="qty" value="1"/>	
        
<?php require('footer.php')?>        