<html> 
	<head></head>
		<body>
			<form>
				<input id="uname" onkeyup="getVal(this)" type="text" placeholder="Username"><br>
				<span id="op"></span> <br>
				<input type="password" placeholder="password"><br>
				</form>
				<button id="btn_g" onclick="viewGoogle()">Login with Google</button>
				<span onmouseover="viewInfo" onmouseout="hideInfo()">aiub</span>
				<p id="aiub_info" style="display:none;">
					American International University-Bangladesh, commonly kniwn by its acronym AIUB, is an accridited private
				</p>
				<form id="g_form" style="display:none;">
					<input type="text" placeholder="gmail"><br>
					<input type="password" placeholder="gmail password"><br>
				</form>
				<script src="myjs.js"></script>
		</body>
</html>