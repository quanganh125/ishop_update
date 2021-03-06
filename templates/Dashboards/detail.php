<?php
    $item = $product->toArray()[0];
    $profile = $this->request->getSession()->read('User')
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
                                    <a href="/dashboards/product"><i class="icon nalika-home"></i></a>
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
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <!-- <?= $this->Form->create(null, ['url' => 'dashboards/order/'.$temp[$i*3+$j]->id]);?> -->
                            <div class="single-product-details res-pro-tb">
                                <h1><?=$item->name?></h1>
                                <div class="single-pro-price">
                                    <span class="single-regular">$<?=$item->cost;?>.00</span><span class="single-old"><del>$<?=$item->cost*110/100?>.00</del></span>
                                </div>
                                <div class="single-pro-size">
                                    <h6>products of <?=$item->user->name?>'s store</h6>
                                </div>
                                <div class="color-quality-pro">
                                    <div class="color-quality-details">
                                        <h5>remaining number</h5>
                                        <span class="red"><?=$item->total?></span>
                                    </div>
                                    <?=$this->Form->create(null, ['url' => 'orders/add/'])?>
                                    <div class="color-quality">
                                        <h4>Quantity</h4>
                                        <div class="quantity">
                                            <div class="pro-quantity-changer">
                                                <input type="number" value="1" name="quantity" min="1" max="<?=$item->total?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="single-pro-button" style="margin: 2%;">  
                                        <input type="number" value="<?=$item->id?>" name="product_id" hidden>
                                        <input type="number" value="<?=$profile->id?>" name="customer_id" hidden>
                                        <input type="number" value="1" name="status_id" hidden>
                                        <input type="text" value="success" name="description" hidden>                 
                                        <button class="btn-info custom-btn" onclick="return confirm('Are you sure you want to buy this item?');" >Click to buy</button>
                                    </div>
                                    <?=$this->Form->end();?>
                                    <div class="clear"></div>
                                </div>
                                <div class="single-pro-cn">
                                    <h3><b>OVERVIEW</b></h3>
                                    <p><?=$item->description?> </p>
                                </div>

                                <div class="single-pro-cn">
                                    <h3><b>MODIFIED</b></h3>
                                    <p><?=date_format($item->modified, 'g:ia \o\n l jS F Y');?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>