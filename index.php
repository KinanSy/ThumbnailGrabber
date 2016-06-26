
<?php
// Powered by KinanSY
// www.github.com/KinanSy/ThumbnailGrabber
?>
<html>
	<head>
		<title>Youtube Thumbnail</title>
		<link href='theme.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<center>
			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
				<div class="head"><h1 ><b>Grab Youtube Thumbnails!</b></h1></div>
				<div class="tool"><b>URL : <input id="id" name="id" type="text"></input></div>
				<input type="submit" class="register-title" name="submit" value="Grab!"></input>
				<?php
					if(isset($_POST['submit'])){
						$str = trim(substr($_POST['id'], strpos($_POST['id'],'=')),'=');
						echo '</br><img src="https://i.ytimg.com/vi/'. $str  .'/maxresdefault.jpg" title="E.x : https://www.youtube.com/watch?v=XXXXXXXXXXXX"></img>';
					}
				?>
			</form>
		<center>
	</body>
</html>
