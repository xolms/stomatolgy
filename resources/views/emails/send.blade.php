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
	<p>
		На вашем сайте {{$_SERVER['SERVER_NAME']}} в {{$data->updated_at}} была отправлена форма. Пожалуйста перезвонить по этому номеру {{$data->phone}} , обращаться можно по имени {{$data->name}} , человек пришел со страницы {{$data->page}}
	</p>
</body>
</html>