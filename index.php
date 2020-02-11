<?php
	$greeting = 'hello world from php';
	?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

	<button class="fetch-data__button"><?php echo $greeting ?></button>
    <button class="send-data">click</button>

</body>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="./js/main.js?<?=filemtime("./js/main.js")?>"></script>
</html>