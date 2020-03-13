<?php
    //receiveing of post
    $id = $_POST['id'];

    //specifying criteria
    $findCriteria = [
        "customer_id" => $id
    ];

    //connection to database
    require __DIR__ . '/vendor/autoload.php';

    $mongoClient = (new MongoDB\Client);
    
    $db = $mongoClient->ecommerceweb;

    $collection = $db->orders;

    $cursor = $collection->find($findCriteria);

    //echoing of retrieved data
    foreach($cursor as $order) {
        $orderId = $order['_id'];
        $address = $order['address'];
        $locality = $order['locality'];
        $country = $order['country'];
        $orders = $order['orders'];
        $total = $order['total_cost'];

        echo '
        <li>
            <div class="collapsible-header"><i class="material-icons">chevron_right</i>Order number: '.$orderId.'</div>
            <div class="collapsible-body">
                <span class="collapsibleTitles">Delivery address:</span><br/>
                <span>'.$address.'</span><br/>
                <span>'.$locality.'</span><br/>
                <span>'.$country.'</span><br/><br/>';

                $totalPrice = 0;

                for($i = 0; $i < count($orders); $i++){
                    echo'
                    <span class="collapsibleTitles">Product:</span><br/>
                    <span>Name: '.$orders[$i]->name.'</span><br/>
                    <span>Price: £'.$orders[$i]->price.'</span><br/>
                    <span>Quantity: '.$orders[$i]->count.'</span><br/>
                    <span>Platform: '.$orders[$i]->platform.'</span><br/><br/>';
                }

        echo '
                <span class="collapsibleTitles">Order total: £'.$total.'</span>
            </div>
        </li>';
    }
?>
