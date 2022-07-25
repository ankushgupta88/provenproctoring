<?php include_once("../config.php");
$product_id = $_POST['product_id'];
$product_quantity = 1;

$status="";
//add item in cart
if($_POST['action'] == 'add_to_cart'){
    //Call Api For Product List
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, APIURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    $parameters = array(
        'user_auth' => array(
            'auth_user' => CRMUSER,
            'auth_user_password' => CRMPASSWORD,
            'product_id' => $product_id
        ),
    );
    $json = json_encode($parameters);
    $postArgs = array(
        'method' => 'showSingleProductDetail',
        'input_type' => 'JSON',
        'response_type' => 'JSON',
        'rest_data' => $json,
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
    $product_output = json_decode(curl_exec($ch));
    //echo "<pre>"; print_r($product_output); echo "</pre>"; exit;
    
    if(count($product_output->data) >= 1){
        //Check session is set or not
        if(isset($_SESSION["shopping_cart"])){
    		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    		if(!in_array($product_id, $item_array_id)){
    			$count = count($_SESSION["shopping_cart"]);
    			$item_array = array(
    				'item_id' => $product_id,
        			'id' =>	$product_output->data[0]->product_id,
        			'name'	=>	$product_output->data[0]->name,
        			'price'	=>	$product_output->data[0]->price,
        			'cost'	=>	$product_output->data[0]->cost,
        			'product_code'	=>	$product_output->data[0]->product_code,
        			'part_number'	=>	$product_output->data[0]->part_number,
        			'type'	=>	$product_output->data[0]->type,
        			'description'	=>	$product_output->data[0]->description,
        			'product_image_name'	=>	$product_output->data[0]->product_image_name,
        			'product_image'	=>	$product_output->data[0]->product_image,
        			'quantity'	=>	$product_quantity,
    			);
    			$_SESSION["shopping_cart"][$count] = $item_array;
    			$status = "<div class='view-cart-page'><a href='".WEBSITEURL."cart.php"."'>View Cart</a></div><p class='msg-success'>Product is added to your cart!</p>";
    		} else {
    		    $status = "<p class='msg-unsuccess'>Product is already added to your cart!</p>";	
    		}
    	} else {
    		$item_array = array(
    			'item_id' => $product_id,
    			'id' =>	$product_output->data[0]->product_id,
    			'name'	=>	$product_output->data[0]->name,
    			'price'	=>	$product_output->data[0]->price,
    			'cost'	=>	$product_output->data[0]->cost,
    			'product_code'	=>	$product_output->data[0]->product_code,
    			'part_number'	=>	$product_output->data[0]->part_number,
    			'type'	=>	$product_output->data[0]->type,
    			'description'	=>	$product_output->data[0]->description,
    			'product_image_name'	=>	$product_output->data[0]->product_image_name,
    			'product_image'	=>	$product_output->data[0]->product_image,
    			'quantity'	=>	$product_quantity,
    		);
    		$_SESSION["shopping_cart"][0] = $item_array;
    		//message
    		$status = "<div class='view-cart-page'><a href='".WEBSITEURL."cart.php"."'>View Cart</a></div><p class='msg-success'>Product is added to your cart!</p>";
    		
    	}
    } else {
        //message
		$status = "<p class='msg-unsuccess'>Oops Somthing Wrong With API Call!</p>";
    }
    echo $status;
}

//Remove product item from cart
if($_POST["action"] == "remove_cart_item"){
    $item_id = $_POST["product_id"]; 
	foreach($_SESSION["shopping_cart"] as $keys => $values){
		if($values["item_id"] == $item_id){
			unset($_SESSION["shopping_cart"][$keys]);
			echo "<p class='msg-success'>Product Item Removed From Cart.</p>";
		}
	}
}