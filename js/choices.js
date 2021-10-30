//show and hide choices menu
document.getElementById('buttonAdd').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

//placeholders for total payment
var total = [];
var placeholder = 0;
var drinks = [];
var drinksCounter = 0;

//get choice then show
var counter = 0;
function showChoice(alink, cost){
	var sum = 0;
	//var link = document.getElementById("first").src;
	if(counter==0){
		document.getElementById("layer1").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price").style.display="flex";
		document.getElementById("price").innerHTML = cost;
		
	}
	
	else if(counter==1){
		document.getElementById("layer2").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price1").style.display="flex";
		document.getElementById("price1").innerHTML = cost;
		
	}
	
	else if(counter==2){
		document.getElementById("layer3").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price2").style.display="flex";
		document.getElementById("price2").innerHTML = cost;
	}
	
	else if(counter==3){
		document.getElementById("layer4").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price3").style.display="flex";
		document.getElementById("price3").innerHTML = cost;
	}
	
	else if(counter==4){
		document.getElementById("layer5").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price4").style.display="flex";
		document.getElementById("price4").innerHTML = cost;
	}
	
	else if(counter==5){
		document.getElementById("layer6").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price5").style.display="flex";
		document.getElementById("price5").innerHTML = cost;
	}
	
	else if(counter==6){
		document.getElementById("layer7").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price6").style.display="flex";
		document.getElementById("price6").innerHTML = cost;
	}
	
	else if(counter==7){
		document.getElementById("layer8").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price7").style.display="flex";
		document.getElementById("price7").innerHTML = cost;
	}
	
	else if(counter==8){
		document.getElementById("layer9").src = alink;
		document.getElementById("buttonMinus").style.display="inline";
		document.getElementById("buttonAdd").style.display="none";
		total.push(cost);
		placeholder+=total[counter];
		counter++;
		console.log(counter);
		document.getElementById("price8").style.display="flex";
		document.getElementById("price8").innerHTML = cost;
	}
	
	document.getElementById("total").innerHTML = placeholder;
	
}
	
//removes the choice 
function removeChoice(){
	if(counter==9){
		document.getElementById("layer9").src = "";
		document.getElementById("buttonAdd").style.display="inline";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price8").style.display="none";
	}
	
	else if(counter==8){
		document.getElementById("layer8").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price7").style.display="none";
	}
	
	else if(counter==7){
		document.getElementById("layer7").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price6").style.display="none";
	}
	
	else if(counter==6){
		document.getElementById("layer6").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price5").style.display="none";
	}
	
	else if(counter==5){
		document.getElementById("layer5").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price4").style.display="none";
	}
	
	else if(counter==4){
		document.getElementById("layer4").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price3").style.display="none";
	}
	
	else if(counter==3){
		document.getElementById("layer3").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price2").style.display="none";
	}
	
	else if(counter==2){
		document.getElementById("layer2").src = "";
		placeholder-=total[counter-1];
		total.pop();
		counter--;
		console.log(counter);
		document.getElementById("price1").style.display="none";
	}
	
	else if(counter==1){
		document.getElementById("layer1").src = "";
		document.getElementById("buttonMinus").style.display="none";
		placeholder-=total[counter-1];
		total.pop();
		counter=0;
		console.log(counter);
		document.getElementById("price").style.display="none";
	}
	document.getElementById("total").innerHTML = placeholder;
}

//add drinks
function addDrinks(choice){
	console.log(choice);
	if(drinksCounter==0){
		drinks.push(choice);
		placeholder+=drinks[0];
		drinksCounter++;
	}
	
	else if(drinksCounter==1){
		placeholder-=drinks[0];
		drinks.pop();
		drinks.push(choice);
		placeholder+=drinks[0];
	}
	document.getElementById("total").innerHTML = placeholder;
}

//adds the data to the database
function addToCartF(){
	document.getElementById("payment").value = placeholder;
	
}
