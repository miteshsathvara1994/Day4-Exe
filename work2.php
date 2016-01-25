<html>
<head>


<script src="jquery-1.11.3.min.js"></script>

<script src="jquery.cookie.js"></script>
<script type="text/javascript">
$('document').ready(function(){
    $("#reg").click(function(){
        var x = $("form").serializeArray();
        
        $.each(x, function(i, field){
        	$("#result").append("Register."+field.name + ":" + field.value + "," );
        });
    });
	$('div#counter').text($.cookie('cookies123'));
	$("#c").click(function () {
		$('#counter').html(function(i, val) { return rr=val*1+1 });
		   //var ww= $('#counter').text();
		  $.cookie('cookies123',rr);
	 });
	 
	$("#reset").click(function () {
		$('#counter').html(function(i, val) { return ans=0 });
		   //var ww= $('#counter').text();
		  $.removeCookie('cookies123');
	 });

	document.getElementById("sub").onclick=function() {
		var div = document.getElementById("mydiv");
		var input = document.createElement("input");
		input.type = "text";
	    input.name = "Subject[]";
	    div.appendChild(input);
		div.appendChild(document.createElement("br"));
		

	}
});
</script>
</head>
<body>
	<form action="">
		<table border="1" align="center" id="myTable">
			<tr>
				<td><label>First Name</label></td>

				<td><input type="text" name="fname"></td>

			</tr>
			<tr>
				<td><label>Last Name</label></td>

				<td><input type="text" name="lname"></td>

			</tr>

			<tr>
				<td><label>subject</label></td>

				<td><div id="mydiv"></div> <input type="text" name="Subject[]"
					id="Subject"> <input type="button" name="sub" id="sub"
					value="Add Textbox"></td>





			</tr>

			<tr>
				<td><label>color</label></td>

				<td><input type="text" name="color1" id="color1"></td>


			</tr>

			<tr>

				<td><input type="button" id="reg" value="Register"></td>
				<td><input type="button" name="change_color" id="change_color"
					value="Chage back color" onclick="changeBackground()"></td>
				<td><input type="button" id="c" value="Count">
					<input type="button" id="reset" value="reset"></td>
			</tr>
			<div id="result"></div>

			<div id="counter">0</div>

		</table>

	</form>
</body>
<script type="text/javascript">









function changeBackground() {
    var color = document.getElementById("color1").value; // cached

    // The working function for changing background color.
    document.bgColor = color;

    // The code I'd like to use for changing the text simultaneously - however it does not work.
    document.getElementById("ccc").style.color = color;
}






</script>

</html>

