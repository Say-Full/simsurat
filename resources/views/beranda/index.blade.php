<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIM-Surat Digital</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<body>
	Berhasil login

	<form method="POST" action="{{ route('logout') }}">
		@csrf
		<button type="submit" class="btn btn-danger">
			Logout
		</button>
	</form>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>