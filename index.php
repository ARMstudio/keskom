<!DOCTYPE html>
<html>
<body>

<form method="post" name="myform" action="readme2.txt">
	<p id="p">Soallllll</p>
	<input type="radio" name="a" value="male" onclick="cthFungsi()">A<br>
	<input type="radio" name="b" value="female">B<br>
	<input type="radio" name=" " value="female">Kosong<br>
</form> 

<script>
	function cthFungsi(){
		document.getElementById("p").innerHTML="Hello World";
		document.myform.submit();
	}
</script>
</body>
</html> 