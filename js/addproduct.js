function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btn").disabled=false;
	}
	else{
		document.getElementById("btn").disabled=true;
	}
}	