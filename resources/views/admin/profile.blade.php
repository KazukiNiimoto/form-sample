<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	@foreach($profile as $data)
		<p>{{ $data->id }}</p>
		<p>{{ $data->name }}</p>
		<p>{{ $data->email }}</p>
		<p>{{ $data->inquiry }}</p>
		<p>{{ $data->created_at }}</p>
		<p>{{ $data->updated_at }}</p>
	@endforeach
</body>
</html>