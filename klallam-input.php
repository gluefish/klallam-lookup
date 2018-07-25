<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Klallam Lookup</title>
   <!-- KeymanWeb script --> 
    <script src="https://s.keyman.com/kmw/engine/2.0.473/keymanweb.js"></script>
    <script src="https://s.keyman.com/kmw/engine/2.0.473/kmwuitoggle.js"></script>
    <script>
      (function(kmw) {
        kmw.init();
        kmw.addKeyboards('@eng');
        kmw.addKeyboards('@clm');
      })(tavultesoft.keymanweb);
    </script>
	<script>tavultesoft.keymanweb.addKeyboards('klallam2@clm');</script>
	<script>
		function onSubmit() {
    		document.getElementById("lookup").src = "http://www.gluefish.com/klallam.php?en=salmon";
			
		}
	</script>
</head>

<body>
	<!--<input placeholder="Hello World"/></p> -->
	<form>
		<!--<input type="radio">English</input>
		<input type="radio">Klallam</input><br>-->
		Word:
		<input type="text" id=/>
		<input type="radio" id="language" name="english">English</input>
		<input type="radio" id="language" name="klallam">Klallam</input>
		<input type="checkbox">Leading Spaces</input>
		<input type="checkbox">Trailing Spaces</input>
		<button type="submit" onClick="onSubmit()">Submit</button><br>
        <!--<label title="p̕áʔət kʷi tiə ƛ̕úyəqs.">
        	<textarea name="KlText" id="KlText"  cols="58" rows="4"  style="font-family:Lucida Sans Unicode,Times New Roman" ></textarea>
        </label>-->
	</form><br>
	
	<iframe id="lookup" src="" style="width:100%; height=600px"></iframe>

</body>
</html>