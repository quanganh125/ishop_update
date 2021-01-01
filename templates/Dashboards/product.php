<?php 

// print_r($iphones->toArray());

function printElement($arg){
    $temp = $arg->toArray();
    $rowNumber = floor(count($temp) / 3);  // 1 row contains 3 products
    for ( $i = 0; $i<$rowNumber; $i++){
        echo '<div class="row" style="overflow: auto; margin-top:3rem">';
            for($j=0; $j<3; $j++){
                echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
                echo '<div class="personal-info-wrap personal-info-ano res-mg-t-30 widget-custom">';
                echo '<div class="widget-head-info-box grid-item">
                        <img src="'. $temp[$i*3+$j]->image_link.'" alt="iphone">   
                    </div>';
                echo '<div class="widget-text-box">
                        <h4 style="color:#333">' . $temp[$i*3+$j]->name .'</h4>
                        <div class="m-t-xl">
                            <h1 class="text-warning">$2000</h1>
                        </div>
                        <p class="ellipsis">'. $temp[$i*3+$j]->description .'</p>...
                    </div> <button class="btn btn-success btn-md align-center">See More</button>';
                echo '</div> ';
                echo '</div>';
            }
        echo '</div>';
    } 
}
?>
<div class="single-pro-review-area mt-t-30 mg-b-30" style="margin-top: 3%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTab4" class="tab-review-design">
                        <li class="active"><a href="#iphones">iPhone</a></li>
                        <li><a href="#macbooks">Macbook</a></li>
                        <li><a href="#ipads">iPad</a></li>
                        <li><a href="#watches">Apple Watch</a></li>
                        <li><a href="#airpods">Airpod</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">                 
                        <div class="product-tab-list tab-pane fade active in" id="iphones">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcome-list single-page-breadcome">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="breadcome-heading">
                                                    <form role="search" class="">
                                                        <input type="text" placeholder="Search..." class="form-control">
                                                        <a style="left: 278px;"><i class="fa fa-search"></i></a>
                                                    </form>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                        
                            <?php printElement($iphones);?>
                                <!-- <div class="row" style="overflow: auto; margin-top:3rem">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                                            <div class="widget-head-info-box grid-item">
                                                <img src="/img/iphones/IPX_2.jpg" alt="iphone">      
                                            </div>                         
                                            <div class="widget-text-box">
                                                <h4>Iphone</h4>
                                                <p>Lots to love. Less to spend. <br>
                                                Just the right amount of everything.</p>
                                                <div class="text-right like-love-list">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                                            <div class="widget-head-info-box grid-item">
                                                <img src="/img/macbooks/MB13_2020.jpg" alt="macbook">   
                                            </div>   
                                            <div class="widget-text-box">
                                                <h4>Macbook</h4>
                                                <p>What's an Intel chip doing in a Mac?<br>
                                                A whole lot more than it's ever done in a PC.</p>
                                                <div class="text-right like-love-list">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="personal-info-wrap personal-info-ano res-mg-t-30">
                                            <div class="widget-head-info-box grid-item">
                                                <img src="/img/ipads/ipad.png" alt="ipad">  
                                            </div>    
                                            <div class="widget-text-box">
                                                <h4>Ipad</h4>
                                                <p>Your next computer is not a computer.<br>
                                                It's a whole new world.</p>
                                                <div class="text-right like-love-list">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="macbooks">
                            <div class="row">
                               
                            </div>                        
                        </div>
                        <div class="product-tab-list tab-pane fade" id="ipads">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="review-content-section">
                                        <select class="form-control mg-b-15">
                                                <option>Select Card</option>
                                                <option>ICICI Credit Card</option>
                                                <option>AXIS Credit Card</option>
                                                <option>HSBC Credit Card</option>
                                                <option>KOTAK Credit Card</option>
                                                <option>INDUSIND Credit Card</option>
                                                <option>HDFC Credit Card</option>
                                                <option>ICICI Debit Card</option>
                                                <option>SBI Credit Card</option>
                                                <option>CITIBANK Credit Card</option>
                                                <option>AXIS Credit Card</option>
                                            </select>
                                        <select class="form-control mg-b-15">
                                                <option>Select Duration</option>
                                                <option>1 month</option>
                                                <option>2 year</option>
                                                <option>5 month</option>
                                                <option>3 week</option>
                                                <option>5 year</option>
                                                <option>7 month</option>
                                            </select>
                                        <button type="submit" class="btn bg-btn-cl waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="watches">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <select class="form-control mg-b-15">
                                                        <option>Select Bank</option>
                                                        <option>State bank of india</option>
                                                        <option>Bank of baroda</option>
                                                        <option>Central bank of india</option>
                                                        <option>Punjab national bank</option>
                                                        <option>Yes bank</option>
                                                        <option>Kotak mahindra bank</option>
                                                    </select>
                                                <button type="submit" class="btn bg-btn-cl waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="airpods">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input name="number" type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Pincode">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                            <option>Select country</option>
                                                            <option>India</option>
                                                            <option>Pakistan</option>
                                                            <option>Amerika</option>
                                                            <option>China</option>
                                                            <option>Dubai</option>
                                                            <option>Nepal</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                            <option>Select state</option>
                                                            <option>Gujarat</option>
                                                            <option>Maharastra</option>
                                                            <option>Rajastan</option>
                                                            <option>Maharastra</option>
                                                            <option>Rajastan</option>
                                                            <option>Gujarat</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                            <option>Select city</option>
                                                            <option>Surat</option>
                                                            <option>Baroda</option>
                                                            <option>Navsari</option>
                                                            <option>Baroda</option>
                                                            <option>Surat</option>
                                                        </select>
                                                </div>
                                                <input type="number" class="form-control" placeholder="Mobile no.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress">
                                                    <button type="submit" class="btn bg-btn-cl waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>