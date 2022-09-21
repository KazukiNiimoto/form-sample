<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>登録画面</title>
</head>
<body>

	@if ($errors->any())
		<div class="alert alert-danger">
				<ul>
						@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
						@endforeach
				</ul><br>
		</div>
	@endif
	<form method='post' action='{{ route('confirm') }}'>
		name:<input type='text' name='name'><br>
		email:<input type='text' name='email'><br>
		request:<input type='text' name='request'><br>
		<button type='submit'>submit</button>
	</form>
</body>
</html>