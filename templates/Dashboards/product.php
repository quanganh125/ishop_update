<?php

use App\View\AppView;

function printElement($arg,$obj){   

    $temp = $arg->toArray();
    $rowNumber = floor(count($temp) / 3);  // 1 row contains 3 products
    for ( $i = 0; $i<= $rowNumber; $i++){
        echo '<div class="row" style="overflow: auto; margin-top:3rem">';
            for($j=0; $j<3; $j++){
                if(array_key_exists($i*3+$j,$temp)){
                    echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
                    echo '<div class="personal-info-wrap personal-info-ano res-mg-t-30 widget-custom">';
                    echo '<div class="widget-head-info-box grid-item">
                            <img src="'. $temp[$i*3+$j]->image_link.'" alt="iphone">   
                        </div>';
                    echo '<div class="widget-text-box">
                            <h4 style="color:#333">' . $temp[$i*3+$j]->name .'</h4>
                            <div class="m-t-xl">
                                <h1 class="text-warning">$'. $temp[$i*3+$j]->cost .'</h1>
                            </div>
                            <p class="ellipsis">'. $temp[$i*3+$j]->description .'</p>...
                        </div>';
                    echo $obj->Form->create(null, ['url' => 'dashboards/detail/'.$temp[$i*3+$j]->id]);
                    echo $obj->Form->button('Seemore',array( 'class' => 'btn btn-success btn-md')).'</form>';
                    echo '</div>';
                    echo '</div>';
                }
            }
        echo '</div>';
        // <form method="post" action="/dashboards/detail/'. $temp[$i*3+$j]->id .'"> 
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
                                
                                <?php printElement($iphones,$this);?>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="macbooks">
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
                                <?php printElement($macbooks,$this);?>
                            </div>                     
                        </div>
                        <div class="product-tab-list tab-pane fade" id="ipads">
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
                                <?php printElement($ipads,$this);?>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="watches">
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
                            
                                <?php printElement($watches,$this);?>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="airpods">
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
                            
                                <?php printElement($airpods,$this);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>