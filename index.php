<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="jquery-3.7.1.min.js"></script>
		<script src="sartools.js?v=2"></script>
		<title>SAR Tools</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<style>
			body {
				margin: 0;
				display: flex;
				justify-content: center;
				align-items: center;
				min-height: 100vh;
				background-color: #f5f5f5;
				font-family: sans-serif;
			}

			.container {
				text-align: center;
				border-radius: 10px;
				background-color: #f0f0f0;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
				width: 90%;
				max-width: 400px;
			}

			input[type="text"] {
				width: 90%;
				border: 1px solid #ccc;
				border-radius: 5px;
				font-size: 32px;
				text-align: center;
			}

			a {
				text-decoration: none;
				color: #090909;
				font-weight: bold;
			}
		</style>
	</head>
	<body onload="loaded()">
		<div class="container">
			<h2>OS Grid Ref</h2>
			<input type="text" id="osgrid" name="q" size="60" maxlength="255" value="">
			<br>
			<br>
			<div id="link"></div>
			<br>
		</div>
	</body>
</html>
