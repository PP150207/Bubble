<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Bubble</title>
</head>
<body>

<header class='titlebar'>
	<a href='#'class='left-item' id='white'>left</a>
	<a href='#'class='left-item' id='white'>Center</a>
	<a href="{{ route('home') }}" class='right-item'>Home</a>
</header>
<div class='under-the-grid'></div>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class='upload-form'>
	<div class='space'></div>
	<form 
		method="post"
		action="{{ route('encode') }}"
		enctype="multipart/form-data"
	>
		@csrf
	<div class='form-flex'>
		<textarea type='text' name="title" class='upload-title' wrap='soft' required></textarea>
		<label><input type="file" name="image[]" accept="image/png, image/jpeg" multiple class='upload-file' required></label>
	</div>
</div>
	<div>
		<textarea name='subtitle' class='upload-subtitle' rows='1' required></textarea>
		<input type="submit" value="送信するます。" class='upload-submit'>
	</div>
	</form>

</body>
</html>