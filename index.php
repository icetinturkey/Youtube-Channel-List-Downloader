<!DOCTYPE html>
<html>
<body>
<h1>Guild Anatolia Panel Project</h1>
<div id="loadedDiv"></div>

</body>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (window.XMLHttpRequest) {xmlhttp=new XMLHttpRequest();}
	else {xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
	xmlhttp.onreadystatechange=function() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    document.getElementById("loadedDiv").innerHTML = xmlhttp.responseText;
    }
	}
	xmlhttp.open("GET","http://api.pathofexile.com/leagues?type=main&compact=1",true);
	xmlhttp.send();
      });
  </script>
</html>
