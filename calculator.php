<html>
<head>
<title>Day 4 Work calculator</title>
</head>
<body>
<form name="myform">
	<tr>
			<td><h1 align="center">Calculator Demo</h1></td>
		</tr>
	<table border="1" width="20%" align="center">
		<tr>
			<td><label>Enter Value</label></td>
			<td><input type="text" name="value1" id="value1"></td>
		</tr>
		<tr>
			<td><label>Enter Value</label></td>
			<td><input type="text" name="value2" id="value2"></td>
		</tr>
		<tr align="center">
			
			<td colspan="2"><input type="button" name="Add" value="+" onclick="add()" >
			<input type="button" name="Sub" value="-" onclick="sub()" >
			<input type="button" name="Mul" value="*" onclick="mul()" >
			<input type="button" name="Div" value="/" onclick="div()" ></td>
			
			
		</tr>
		
		<tr>
			<td><label>Answer is</label></td>
			<td><div id="answer"></div></td>
			
			
		</tr>
	</table>
	</form>
	<script type="text/javascript">

	function add() {
		var val1=Number(document.myform.value1.value);
		var val2=Number(document.myform.value2.value);

		var ans=val1 + val2;
			
		document.getElementById('answer').innerHTML=ans;
		
		
	}
	function sub() {
		var val1=Number(document.myform.value1.value);
		var val2=Number(document.myform.value2.value);

		var ans=val1 - val2;
			
		document.getElementById('answer').innerHTML=ans;
		
		
	}
	function mul() {
		var val1=Number(document.myform.value1.value);
		var val2=Number(document.myform.value2.value);

		var ans=val1 * val2;
			
		document.getElementById('answer').innerHTML=ans;
		
		
	}
	function div() {
		var val1=Number(document.myform.value1.value);
		var val2=Number(document.myform.value2.value);

		var ans=val1 / val2;
			
		document.getElementById('answer').innerHTML=ans;
	}
	



	</script>
</body>
</html>
