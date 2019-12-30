<!DOCTYPE html>
<html>
<head>

<title>Hüseyin Ali Proxy</title>
<link href="./templates/main.css" type="text/css" rel="stylesheet" />
<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	background-color:#000000;
	
	border:1px solid #818181;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>

<body>
<h1 class = 'text_fade '>Hüseyin Ali</h1>
 <h3 class = 'text_fade '>
   <a href='http://hsynali.herokuapp.com/'>Bum Be</a>
 </h3>
<div></div>
<div></div>
<div></div>
</body>


<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;"Hüseyin Ali </h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
	Powered by Hüseyin Ali <?php echo $version; ?>
</div>


</body>
</html>
