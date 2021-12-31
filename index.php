<html>
<style>
body {
	background-color: white;
	text-align: center;
	margin: 0;
	padding: 0;
	height: 100vh;
}

input[type="file"] {
	display: none;
}

input[type="submit"] {
	display: none;
}

label {
	font-size: 20px;
	border: 5px solid #252525;
	line-height: 1;
	border-radius: 30px;
	padding: 12px 17px;
	cursor: pointer;
	margin: auto;
	transition: 0.4s;
	position: relative;
	overflow: hidden;
}

label:hover {
	border: 5px solid #252525;
	color: white;
	background-color: #252525;
}

a {
	color: #252525;
	text-decoration: underline;
}
</style>

<head>
	<title>Files Uploader - By Afnan</title>
</head>

<body text="#252525">
	<br/>
	<h1><strong><code>Upload your files!</code></strong></h1>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<form name="uploader" method="post" action="upload.php" enctype="multipart/form-data">
		<input type="file" id="file" name="file" /> <strong><code><label for="file"> Choose a file </label></code></strong>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<input type="submit" id="submit" name="submit" value="Upload file" /> <strong><code><label for="submit"> Upload the file </label></code></strong> </form>
	<br/>
	<br/>
	<h1><a href="./files/index.php"><strong><code>View your files!</code></strong></a></h1> </body>

</html>
