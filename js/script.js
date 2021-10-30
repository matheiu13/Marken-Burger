/*window.addEventListener("scroll", function(){
  if(window.scrollY!=0){
    //user is at the top of the page; no need to show the back to top button
    navigationBarMenu.style.backgroundColor="rgba(240, 240, 240,0.8)";
  } 
  else
  {
  navigationBarMenu.style.backgroundColor="rgba(240, 240, 240)";
  }
});*/

/*
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navigationBarMenu").style.top = "0";
  } else {
    document.getElementById("navigationBarMenu").style.top = "-85px";
  }
  prevScrollpos = currentScrollPos;
}*/

var senderName = document.getElementById('senderName');
var senderEmail = document.getElementById('senderEmail');
var senderMessage = document.getElementById('senderMessage');
var userSearch = document.getElementById('userSearch');
var userColor = document.getElementById('userColor');
var parseCheck1 = false;
var parseCheck2 = false;
var parseCheck3 = false;
var parseCheck4 = false;

$(document).ready(function () {
	$(".modal a").not(".dropdown-toggle").on("click", function () {
		$(".modal").modal("hide");
	});
});
	
$(".js-scroll-trigger").click(function () {
     $(".navbar-collapse").collapse("hide");
});

function ColorFunction()
{
  var userColorValue = userColor.value.trim();

  if(userColorValue == "ON DELIVERY")
  {
    document.getElementById('statusColor').classList.add('text-success');
  }
}

function FormValidate()
{

  NameChecker();
  EmailChecker();
  MessageChecker();

  if(parseCheck1 == false || parseCheck2 == false || parseCheck3 == false)
  {
    return false;
  }
  else
  {
    return true;
  }
}

function TrackChecker()
{
  var userSearchValue = userSearch.value.trim();

  if(userSearchValue == "")
  {
    document.getElementById("trackError").innerHTML = "*Please type in your order ID.";
    document.getElementById('userSearch').classList.add("border-error");
    return false;
  }
  else
  {
    document.getElementById("trackError").innerHTML = "";
    document.getElementById('userSearch').classList.remove("border-error");
    return true;
  }
}


function NameChecker()
{
  var senderNameValue = senderName.value.trim();

  if(senderNameValue=="")
  {
  document.getElementById("nameError").innerHTML = "*Please type in your name.";
  document.getElementById('senderName').classList.add("border-error");
  parseCheck1 = false;
  
  }
  else if(!isFirstName(senderNameValue))
  {
    document.getElementById("nameError").innerHTML = "*No numbers allowed.";
    document.getElementById('senderName').classList.add("border-error");
    parseCheck1 = false;
  }
  else if(senderNameValue.length < 6)
  {
  document.getElementById("nameError").innerHTML = "*Name is too short.";
document.getElementById('senderName').classList.add("border-error");
parseCheck1 = false;
  }
  else
  {
    document.getElementById("nameError").innerHTML = "";
    document.getElementById('senderName').classList.remove("border-error");
    parseCheck1 = true;
  }
}

function EmailChecker()
{
  var senderEmailValue = senderEmail.value.trim();

  if(senderEmailValue=="")
  {
  document.getElementById("emailError").innerHTML = "*Please type in your email.";
  document.getElementById('senderEmail').classList.add("border-error");
  parseCheck2 = false;
  }
  else if(!isEmail(senderEmailValue))
  {
    document.getElementById("emailError").innerHTML = "*Your email address is invalid.";
    document.getElementById('senderEmail').classList.add("border-error");
    parseCheck2 = false;
  }
  else
  {
    document.getElementById("emailError").innerHTML = "";
    document.getElementById('senderEmail').classList.remove("border-error");
    parseCheck2 = true;
  }

}

function MessageChecker()
{
  var senderMessageValue = senderMessage.value.trim();

  if(senderMessageValue=="")
  {
  document.getElementById("messageError").innerHTML = "*Please type in your message/issue.";
  document.getElementById('senderMessage').classList.add("border-error");
  parseCheck3 = false;
  }
  else if(senderMessageValue.length < 10)
  {
  document.getElementById("messageError").innerHTML = "*Message is too short.";
document.getElementById('senderMessage').classList.add("border-error");
parseCheck3 = false;
  
  }
  else
  {
    document.getElementById("messageError").innerHTML = "";
    document.getElementById('senderMessage').classList.remove("border-error");
    parseCheck3 = true;
  }
}




function isFirstName(senderName) {
	return /^[a-zA-Z-,](\s{0,1}[a-zA-Z-, ])*[^\s]$/.test(senderName);
}

function isEmail(senderEmail) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(senderEmail);
}
