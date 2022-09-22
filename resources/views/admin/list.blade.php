<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
	<table border="1">
		<thead>
			<tr>
				<th>name</th>
				<th>email</th>
				<th style="width:200px">inquiry</th>
			</tr>
		</thead>
		<tbody>
			@foreach($forms as $form)
				<tr>
					<td>{{ $form->name }}</td>
					<td>{{ $form->email }}</td>
					<td>{{ $form->inquiry }}</td>
					<td>
						<form method="post" action="{{ route('profile') }}">
							@csrf
							<input type="hidden" name='id' value={{ $form->id }}>
							<button type="submit">詳細</button>
						</form>
				</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>