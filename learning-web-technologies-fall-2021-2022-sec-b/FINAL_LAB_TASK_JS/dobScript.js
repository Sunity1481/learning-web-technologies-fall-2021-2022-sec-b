"use strict"

let a =10;
var b = 20;
const c=40;

//let student = ['alamin', 'cs', 'alamin@aiub.edu'];


function action(){
	var obj = document.getElementById('d1');

	if(obj.innerHTML == ""){
		obj.innerHTML = "testing JS code...";
	}else{
		obj.innerHTML = "";
	}
}

function getName(){
	let name = document.getElementById('dob').value;
	alert(dob);
	document.getElementById('head').innerHTML = dob;
}