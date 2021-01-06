
<div class="product-status mg-b-30" style="margin-top: 2%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Products List</h4>
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Total</th>
                            <th>Cost</th>
                            <th>Modified</th>
                            <th>Description</th>
                            <th>Setting</th>
                        </tr>
                        <?php foreach($products as $item){
                        echo '<tr>';
                        echo '<td><img src="'. $item->image_link .'" alt="" /></td>';
                        echo '<td>' . $item->name .'</td>';
                        echo '<td>' . $item->category .'</td>';
                        echo '<td>' . $item->total .'</td>';
                        echo '<td>$' . $item->cost .'</td>';
                        echo '<td>' . $item->modified .'</td>';
                        echo '<td style="max-width: 300px">' . $item->description .'</td>';
                        echo '<td>'; 
                        
                        echo '<button data-toggle="tooltip" title="Edit" class="pd-setting-ed" style="background:#f0ad4e;padding: 2px 5px 2px 5px; margin-bottom:3px">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>';
                        echo $this->Form->create();
                        echo '<button formaction="/products/delete/'.$item->id.'" onclick="return confirm(`Are you sure you want to delete this item?`)" 
                                title="Trash" class="pd-setting-ed" style="background:#d9534f;padding: 2px 5px 2px 5px;width:26px">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>';
                        echo '</form></td>';                  
                        echo '</tr>';}?>              
                    </table>
                </div>

                <div class="button-style-four btn-mg-b-10" style="margin-top: 20px;">
                    <button type="button" class="btn btn-custon-four btn-primary aligncenter" onclick="$('.review-tab-pro-inner').slideToggle();">
                    Add Product</button>
                </div>        
    
                <div class="single-product-tab-area mg-b-30">
                    <div class="single-pro-review-area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-tab-pro-inner" style="display: none;">
                                        <ul id="myTab3" class="tab-review-design">
                                            <li class="active"><a href="#profile"><i class="icon nalika-chat" aria-hidden="true"></i> Product</a></li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="profile">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div class="card-block">
                                                                <div class="text-muted f-w-400" style="margin-bottom: 4%;">
                                                                    <p>You can add new product below:</p>
                                                                </div>
                                                                <div class="m-t-10"></div>
            
                                                                <?= $this->Form->create(null, ['type'=>'file',
                                                                                                'url' => ['controller' => 'Products',
                                                                                                        'action' => 'add']]);?>
                                                                <div class="input-group mg-b-15">
                                                                    <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Product Name" name="name" required>
                                                                </div>
                                                                <select name="category" class="form-control pro-edt-select form-control-primary mg-b-15">
                                                                    <option value="macbook">Macbook</option> 
                                                                    <option value="iphone">Iphone</option>
                                                                    <option value="ipad">Ipad</option>
                                                                    <option value="airpod">Airpod</option>
                                                                    <option value="watch">Apple Watch</option>
                                                                </select>
                                                                <div class="input-group mg-b-15">
                                                                    <span class="input-group-addon"><i class="icon nalika-picture" aria-hidden="true"></i></span>
                                                                    <input type="file" class="form-control" placeholder="Picture" name="image_link">
                                                                 
                                                                </div>
                                                                <div class="input-group mg-b-15 mg-t-15">
                                                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                                    <input type=number class="form-control" placeholder="Price" name="cost" min="1" required>
                                                                </div>
                                                                <div class="input-group mg-b-15">
                                                                    <span class="input-group-addon"><i class="icon nalika-pie-chart icon-wrap" aria-hidden="true"></i></span>
                                                                    <input type="number" class="form-control" name="total" placeholder="Quantity" min='1' required>
                                                                </div>
                                                                <div class="input-group mg-b-15">
                                                                    <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Description" name="description">
                                                                </div>  
                                                                <input type="text" class="form-control" name="user_id" value="<?=$user_id?>" style="display:none">
                                                                <div class="button-style-four btn-mg-b-10 aligncenter">
                                                                    <button type="submit" class="btn btn-custon-four btn-primary aligncenter">
                                                                        <i class="fa fa-info-circle adminpro-informatio " aria-hidden="true"></i> Save Change
                                                                    </button>
                                                                </div>
                                                                </form>                                                     
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
        </div>
    </div>
</div>