var xhttp =new XMLHttpRequest();
xhttp.open('GET','');
xhttp.onload=function(){
	var ourData="123";
	console.log(ourData);
}
xhttp.send();