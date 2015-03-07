<html>
<head>
<title>Send to RaspberryPi Display</title>
<script src='js/jquery-1.11.1.min.js'></script>
<script src='js/spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css'/>
</head>
<body>
Pick a colour: <input type='text' id='custom'/>
<p/>
<form id="message" autocomplete="off">
  Text:<input type="text" name="txt" id="txt"/>
  Colour:<input type="text" name="rgb" id="rgb" readonly/>
  Duration:<select name="for">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
           </select>
</form>
<a href="javascript:writeJson()">Send To Pi</a>
<div id="result"></div> 
<script>
$("#custom").spectrum({
	color: "#f00",
	preferredFormat: "rgb",
	showInput: true,
	change: function(colour) {
			setRGB(colour);
	}
});
setRGB($("#custom").spectrum("get"));
function setRGB(colour) {
	$("#rgb").val(colour);
}
function writeJson() {
	$.post("post.php", $("#message").serializeArray()).done(function(data) {
		$("#result").show();
		$("#result").html("Thanks!");
		$("#result").fadeOut('slow');
	});
}
</script>
</body>
</html>
