<!DOCTYPE html>
<html>
<head>
	<title>How to add content to new window using JavaScript</title>
</head>
<body>
	<h1>You can open a new window on click below button with specific content.</h1>
	
	 
	<script type="text/javascript">	
		var win = window.open(); 
		var content ='';
		content += '<div style="width:100%;min-height:685px;"><iframe width="800" height="585" src="URL WILL GO HERE" frameborder="0" allowfullscreen style="width:100%;height:100%;"></iframe> </div>'; 				  	
		win.document.write(content);
		win.document.location.hash = 'Address bar link'; 
	</script>	 
</body>
</html>