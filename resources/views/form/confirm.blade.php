<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>確認画面</title>
</head>
<body>
	<form method='post' action='{{ route('thanks') }}'>
		@csrf
		<input type="hidden" name="name" value={{ $name }}>
		<input type="hidden" name="email" value={{ $email }}>
		<input type="hidden" name="request" value={{ $request }}>
		name:{{ $name }}<br>
		email:{{ $email }}<br>
		request:{{ $request }}<br>
		<button type="submit">submit</button>
	</form>
</body>
</html>