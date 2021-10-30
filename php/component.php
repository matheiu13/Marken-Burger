<?php

function component($productname, $productprice, $productimg){
	$element='
				<div class="col-md-3 col-sm-6 my-md-0">
					<form action="burgerpresets.php" method="post">
						<div class="card shadow">
							<div>
								<img src="'.$productimg.'" alt="Image 1" class="img-fluid card-img-top">
							</div>
							<div class="card-body">
								<h5 class="card-title">'.$productname.'</h5>
								<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>															
								</h6>
								<p class="card-text">
									Som quick example text to build on the card.
								</p>
								<h5>
									<small><s>$600</s></small>
									<span class="price">$'.$productprice.'</span>
								</h5>
								<button type="submit" class="btn btn-warning" name="add">Add to cart<i class="fas fa-shopping-cart"></i></button>
							</div>
						</div>
					</form>
				</div>
	';
	
	echo$element;
	
}