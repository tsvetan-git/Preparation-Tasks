<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<script type="text/javascript" src ="ajax.js"></script> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="list">
			<ul>
			</ul>
		</div>
	</body>
</html>
<script>
	function createList() {	
		
		var list = document.querySelector('#list');	
		
		for (var i = 0; i < items.length; i++) { 
			
			var item = items[i];
			
			var li = document.createElement('li');
			var innerValue = document.createElement('div');		
			innerValue.innerHTML = item;
			
			list.appendChild(li);		
			li.appendChild(innerValue);
			
			//li.style.display = "block"; //go to css file
			//li.style.backgroundColor= "blue"; // go to css file
			
			var widthL= item*5;
			li.style.width= widthL+"px";				   
		}
	}

	function loadData() {
		Ajax.request('GET', 'server.php', true,function (response) {
			items = JSON.parse(response);	
			createList(); 
		});
	}
	loadData();
</script>