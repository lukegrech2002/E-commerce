<?php 
    //connection to database
    require __DIR__ . '/vendor/autoload.php';

    $mongoClient = (new MongoDB\Client);
  
    $db = $mongoClient->ecommerceweb;

  //list all products function
  function allProducts($db){
    $collection = $db->inventory;

    $cursor = $collection->find();
    
    //echoing of retrieved data
    foreach($cursor as $prod) {
      $id = $prod['_id'];
      $title = $prod['product_name'];
      $price = $prod['price'];
      $path = $prod['image'];
      $platform = $prod['platform'];

      echo '<div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
          <img src="'.$path.'">
        </div>
        <div class="card-content">
          <span class="card-title">'.$title.'</span>
          <span class="price">Price: </span>
          <p class="pricep">£'.$price.'</p>
          <span class="platform">Platform: </span>
          <p class="platformp">'.$platform.'</p>
          <a class="waves-effect waves-light btn modal-trigger" href="#'.$id.$platform.'">Read more</a>
        </div>
      </div>
    </div>';
    detMod($id, $title, $path, $platform, $price);
    }
  }

  //product details modal
  function detMod($id, $title, $image, $platform, $price){
    echo '<div id="'.$id.$platform.'" class="modal">';
    echo '<div class="modal-content">';
    echo '<span class="details-title">'.$title.'</span>';
    echo '<p class="prodDetails">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu vulputate nisi, sit amet finibus enim. Morbi molestie iaculis placerat. Proin cursus enim a justo lobortis aliquet. Curabitur nec purus in eros mattis condimentum non et libero. Praesent nec libero porta, dapibus tortor quis, venenatis augue. </p>';
    echo '<p class="pricep">Platform: '.$platform.'</p>';
    echo '<p class="pricep">£'.$price.'</p>';
    echo '<div class="addtobasket">';
    echo '<a class="waves-effect waves-light btn" onclick=\'addToCart("' . $id . '", "' . $title . '", "' . $image . '","' . $price .'","' . $platform . '")\'>Add to Cart</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
?>