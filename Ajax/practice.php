<html>
	<script>
		function loadDOC(){
			var xhr = new XMLHttpRequest();
			xhr.open("GET","myprofile.php",true);
			xhr.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					get("demo").innerHTML = this.responseText;
				}
			};
			xhr.send();
		}
	</script>
	
		<body>
			<button onclick="loadDoc()">click me</button>
		</body>
</html>