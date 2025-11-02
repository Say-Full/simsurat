<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIM-Surat</title>
</head>
<body>
	Berhasil login

	<form method="POST" action="{{ route('logout') }}">
		@csrf
		<button type="submit" class="btn btn-danger">
			Logout
		</button>
	</form>
</body>
</html>