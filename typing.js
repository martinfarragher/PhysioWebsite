var xmlHttp = createXmlHttpRequestObject(); // object responsible for communicating with server behind the scenes

function createXmlHttpRequestObject() { //create object for communication
	var xmlHttp;
	
	if(window.ActiveXObject) { //internet explorer
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}else{ //firefox, google chrome
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}	
	}
	
	if(!xmlHttp) //if equal to false 
		alert("Cannot create object");
	else
		return xmlHttp;
}

function process() { //responsible for sending request to server using object, communicates with server)
	if(xmlHttp.readyState==0 || xmlHttp.readyState==4){ //if object is free/busy its ready to communicate with server
		email = encodeURIComponent(document.getElementById("userInput").value); //get the user input
		xmlHttp.open("GET","typing.php?email=" + email, true); //creates request to server
		xmlHttp.onreadystatechange = handleServerResponse; //when it responds this is what I want to do
		xmlHttp.send(null); //send request, parameters only used with post
	}else{
		setTimeout('process()',1000); //if its busy, time out for 1 second
	}
}

function handleServerResponse(){ //what to do with response from server
	if(xmlHttp.readyState==4){ //if object done communicating, if response is ready
		if(xmlHttp.status==200){ //200 means communication session went ok
			xmlResponse = xmlHttp.responseXML; //store response
			xmlDocumentElement = xmlResponse.documentElement; //root element of xml file
			message = xmlDocumentElement.firstChild.data; //message equal to data in typing.php, want to put out on screen
			document.getElementById("inputText").innerHTML =  '<span style="color:blue">' + message + '</span>'; //make inputText equal message
			setTimeout('process()',1000); //not going to be flat out trying to communicate, waste of server space
		}else{
			alert('Something went wrong'); //happens when you don't successfully communicate
		}
		
	}
}

//XMLhttp responsible for communicating with server behind scenes, powerful object







