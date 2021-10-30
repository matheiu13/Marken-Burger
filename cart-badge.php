<?php

$numms = 0;
if(isset($_COOKIE["shopping_cart"]))
	{
		$cookie_data = stripslashes($_COOKIE['shopping_cart']);
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
			{
				
				$numms = $numms + ($values["item_quantity"]);
			}
	}

?>