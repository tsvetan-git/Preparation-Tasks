<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title></title>
<script type="text/javascript" src="ajax.js"></script>
</head>
<body>
	<div id="box">
		<img id="image" src="">
	</div>
	<button id='button'>Click to Start</button>
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function() {	
	var data = [];
	   var button = document.getElementById('button');
	   var imageBox = document.getElementById('image');   
	   var i = 0;
	   
	   button.addEventListener('click', function () {
        	
		    Ajax.request('GET', 'server.php', true, function(response) {
	            data = JSON.parse(response); 
	           
	        });
		}, false);    
        
 		setInterval(function() {
            if (data[i]) {
                imageBox.src = data[i];
                i++;                
            }         
            i == 3 ? i = 0 : false;    
        }, 500);
    
}, false);
</script>

