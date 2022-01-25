function checkPasswords(){
	if (document.getElementById("pwd").value !=document.getElementById("rpwd").value){
		alert("Passwords are missmatched!!");
		return false;
	}
	else{
		alert("Passwords are matched");
		return true;
	}

}

function enableButton(){
	if(document.getElementById("ppt").checked){
		document.getElementById("btn1").disabled=false;
	}
	else{
		document.getElementById("btn1").disabled=true;
	}
}

function errorButton() {
  var txt;
  var b = confirm("Sorry Page not linked yet!Click OK to Reload Home Page or Press Cancel");
  if (b == true) {
    txt = "Subscribe to Newsletter";
  } else {
    txt = "Subscribe to Newsletter";
  }
  document.getElementById("sButton").innerHTML = txt;
}

function errorButton2() {
 
  var c = confirm("Sorry Page not linked yet!Try again later");
  if (c == true) {
   
  } else {
    
  }
  document.getElementById("main").innerHTML = txt;
}

function errorButton3() {
 
  var d = confirm("Sorry Page not linked yet!Try again later");
  if (d == true) {
   
  } else {
    
  }
  document.getElementById("main2").innerHTML = txt;
}