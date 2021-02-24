<?php
?>
<html>
<head>
<script> 
function getIp() {
	
 var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {

		if(this.readyState == 4 && this.status == 200) {

			var output = JSON.parse(this.responseText);
			document.getElementById(“ip”).innerHTML = output.ip;

		}


	}
xhttp.open('GET', 'http://ip.jsontest.com/', true);
xhttp.send();

}


</script>

</head>
<body>
<p id=”id”></p>
<button type="button" onclick="getIp()">Click me to get your ip address.</button>
</body>
</html>
