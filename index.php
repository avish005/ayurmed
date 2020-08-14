<<<<<<< HEAD
<?php require('top.php')?>


<div class="body__overlay"></div>


        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2018</h2>
                                        <h1>NICE CHAIR</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/1.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2018</h2>
                                        <h1>NICE CHAIR</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>

        <!-- SERVICES  -->

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-11 category">
                        <div class="card">
                            <i class="fa fa-truck service-icon category"></i>
                            <div class="card-body">
                                <h3 class="card-title">48 HOURS DELIVERY</h3><br>
                                <p class="card-text">We provide 48 hours fast delivery throughout Jamshedpur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-11 category">
                        <div class="card">
                            <i class="fa fa-ban service-icon category"></i>
                            <div class="card-body">
                                <h3 class="card-title">REFUND OR CANCELLATION</h3><br>
                                <p class="card-text">Cancel or get Refund product at just one call. Click here to see<br><a href="return_refund.php" target="_blank " style="text-decoration: underline ;">Return/Refund Policy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-11 category">
                        <div class="card">
                            <i class="fa fa-truck service-icon category"></i>
                            <div class="card-body">
                                <h3 class="card-title">48 HOURS DELIVERY</h3><br>
                                <p class="card-text">We provide 48 hours fast delivery <br>throughout Jamshedpur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,8);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                            
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li class="dp"><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Category Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Seller</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,8,'','','','','yes');
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->
		<input type="hidden" id="qty" value="1"/>
=======
<?php require('top.php')?>


<div class="body__overlay"></div>


        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2018</h2>
                                        <h1>NICE CHAIR</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/1.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2018</h2>
                                        <h1>NICE CHAIR</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>

        <!-- SERVICES  -->

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-11 category">
                        <div class="card">
                            <i class="fa fa-truck service-icon category"></i>
                            <div class="card-body">
                                <h3 class="card-title">48 HOURS DELIVERY</h3><br>
                                <p class="card-text">We provide 48 hours fast delivery throughout Jamshedpur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-11 category">
                        <div class="card">
                            <i class="fa fa-ban service-icon category"></i>
                            <div class="card-body">
                                <h3 class="card-title">REFUND OR CANCELLATION</h3><br>
                                <p class="card-text">Cancel or get Refund product at just one call. Click here to see<br><a href="return_refund.php" target="_blank " style="text-decoration: underline ;">Return/Refund Policy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-11 category">
                        <div class="card">
                            <i class="fa fa-truck service-icon category"></i>
                            <div class="card-body">
                                <h3 class="card-title">48 HOURS DELIVERY</h3><br>
                                <p class="card-text">We provide 48 hours fast delivery <br>throughout Jamshedpur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,8);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                            
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li class="dp"><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Category Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Seller</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,8,'','','','','yes');
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
										<ul class="product__action">
											<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')"><i class="icon-heart icons"></i></a></li>
											<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')"><i class="icon-handbag icons"></i></a></li>
										</ul>
									</div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['mrp']?></li>
                                            <li><?php echo $list['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->
		<input type="hidden" id="qty" value="1"/>
>>>>>>> 06746b6be5800c79eee298f6566b9a42f5e1d0eb
<?php require('footer.php')?>        