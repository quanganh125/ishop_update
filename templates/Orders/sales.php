<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<!-- <div class="orders index content">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('status_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pending_orders as $order): ?>
               
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= $order->product->name ?></td>
                    <td><?= $order->user->name?></td>
                    <td><?= $order->status->id?></td>
                    <td><?= $this->Number->format($order->quantity) ?></td>
                    <td><?= h($order->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div> -->

<?php
// debug($pending_orders->toArray()[0]);
function printOrders($orders,$obj,$flag){   
    echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
    echo '<div class="product-status-wrap">';
    if (count($orders) >0 ){                                
    echo '<h4>Sales Orders</h4>';
    echo '<table><tr>';
    echo "<th> ID </th>";
    echo "<th> Product </th>";
    echo "<th> Image </th>";
    echo "<th> Customer </th>";
    echo "<th> Quantity </th>";
    echo "<th> Created</th>";
    if ($flag == 4) echo "<th> Status </th>";
    else if ($flag == 1 || $flag == 2) echo "<th> Action </th>";
    echo "</tr>";

    foreach($orders as $order){
        echo '<tr>';
        echo '<td>'. $obj->Number->format($order->id). '</td>';
        echo '<td><a href="/dashboards/detail/'.$order->product->id.'">' . $order->product->name .'</a></td>';
        echo '<td><img src="'. $order->product->image_link .'" alt="" /></td>';
        echo '<td>' . $order->user->name .'</td>';
        echo '<td>' . $obj->Number->format($order->quantity) .'</td>';
        echo '<td>' . h($order->created) .'</td>';
        if ($flag == 1){
            echo '<td>'. $obj->Form->create(null, ['url' => 'orders/seller_reject/'. $order->id]);
            echo '<button formaction="/orders/seller_accept/'. $order->id.'" onclick="return confirm(`Are you sure you want to accept this order booked by '. $order->user->name.'?`)" 
            title="Accept" class="pd-setting-ed" style="background:#5bc0de;padding: 2px 5px 2px 5px;width:26px">
            <i class="fa fa-tag" aria-hidden="true"></i></button>';
            echo '<button onclick="return confirm(`Are you sure you want to reject this order booked by '. $order->user->name.'?`)" 
                    title="Reject" class="pd-setting-ed" style="background:#d9534f;padding: 2px 5px 2px 5px;width:26px">
                    <i class="fa fa-trash-o" aria-hidden="true"></i></button>';
            echo '</form></td>';  
        } else if ($flag == 4){
            echo '<td style="color:red">' . $order->description .'</td>';
        } else if ($flag == 2){
            echo '<td>'. $obj->Form->create(null, ['url' => 'orders/success_delivery/'. $order->id]);
            echo '<button title="Successful Delivery" class="pd-setting-ed" style="background:#5bc0de;padding: 2px 5px 2px 5px;width:26px">
                    <i class="fa fa-check" aria-hidden="true"></i></button>';
            echo '</form></td>';  
        }                      
        echo '</tr>';
    }
    echo '</table>';
    } else { ?>
        <div class="empty-order">
            <img src="/img/empty-order.png" alt="Empty Order" style="width:125px">
            <div class='photo-name'>No orders yet</div>
        </div>
    <?php }
    echo '</div></div>';
}
?>

<div class="single-pro-review-area mt-t-30 mg-b-30" style="margin-top: 3%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTab4" class="tab-review-design">
                        <li class="active"><a href="#pending" onclick="clearSearchForm()">Wait for confirmation</a></li>
                        <li><a href="#delivered" onclick="clearSearchForm()">Being Delivered</a></li>
                        <li><a href="#success" onclick="clearSearchForm()">Delivered </a></li>
                        <li><a href="#cancelled" onclick="clearSearchForm()">Cancelled Orders</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">   
             
                        <div class="product-tab-list tab-pane fade active in" id="pending">
                            <div class="row">;
                                <?php printOrders($pending_orders,$this,1);?>                                                                        
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="delivered">
                            <div class="row">;
                                <?php printOrders($delivered_orders,$this,2)?>   
                            </div>               
                        </div>
                        <div class="product-tab-list tab-pane fade" id="success">
                            <div class="row">;
                                <?php printOrders($success_orders,$this,3)?>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="cancelled">
                            <div class="row">;
                                <?php printOrders($cancelled_orders,$this,4)?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>