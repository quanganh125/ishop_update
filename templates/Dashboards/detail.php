<?php
    $item = $product->toArray()[0];
?>
 <div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="icon nalika-home"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Product Details</h2>
                                    <p>Welcome to iShop</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-tab-area mg-t-0 mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-product-pr">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div id="myTabContent1" class="tab-content">
                                <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                    <img src="<?=$item->image_link?>" alt="" />
                                </div>
                                <div class="product-tab-list tab-pane fade" id="single-tab2">
                                    <img src="/img/product/bg-2.jpg" alt="" />
                                </div>
                                <div class="product-tab-list tab-pane fade" id="single-tab3">
                                    <img src="/img/product/bg-3.jpg" alt="" />
                                </div>
                                <div class="product-tab-list tab-pane fade" id="single-tab4">
                                    <img src="/img/product/bg-1.jpg" alt="" />
                                </div>
                                <div class="product-tab-list tab-pane fade" id="single-tab5">
                                    <img src="/img/product/bg-2.jpg" alt="" />
                                </div>
                            </div>
                            <ul id="single-product-tab">
                                <li class="active">
                                    <a href="#single-tab1"><img src="/img/product/1.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#single-tab2"><img src="/img/product/2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#single-tab3"><img src="/img/product/3.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#single-tab4"><img src="/img/product/1.jpg" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-product-details res-pro-tb">
                                <h1><?=$item->name?></h1>
                                <!-- <span class="single-pro-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span> -->
                                <div class="single-pro-price">
                                    <span class="single-regular">$<?=$item->cost;?>.00</span><span class="single-old"><del>$<?=$item->cost*110/100?>.00</del></span>
                                </div>
                                <div class="single-pro-size">
                                    <h6>Size</h6>
                                    <span>S</span> <span>M</span> <span>L</span> <span>XL</span> <span>XXL</span>
                                </div>
                                <div class="color-quality-pro">
                                    <div class="color-quality-details">
                                        <h5>Color</h5>
                                        <span class="red"></span> <span class="green"></span> <span class="yellow"></span> <span class="black"></span> <span class="white"></span>
                                    </div>
                                    <div class="color-quality">
                                        <h4>Quality</h4>
                                        <div class="quantity">
                                            <div class="pro-quantity-changer">
                                                <input type="text" value="1" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="single-pro-button">
                                        <div class="pro-button">
                                            <a href="#">ADD TO Cart</a>
                                        </div>
                                        <!-- <div class="pro-viwer">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-eye"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="clear"></div>
                                    <!-- <div class="single-social-area">
                                        <h3>share this on</h3>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-feed"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="single-pro-cn">
                                    <h3>OVERVIEW</h3>
                                    <p><?=$item->description?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>