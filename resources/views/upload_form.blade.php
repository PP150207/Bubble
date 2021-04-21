<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Document</title>
</head>
<body>
	
<header class='titlebar'>
	<a href='#'class='left-item' id='white'>left</a>
	<a href="{{ route('home') }}" class='center-item'>Home</a>
	<a href="{{ route('my') }}" class='right-item'>My</a>
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
<form 
	method="post"
	action="{{ route('upload_image') }}"
	enctype="multipart/form-data"
>
	@csrf
	<input type="file" name="image[]" accept="image/png, image/jpeg" multiple>
    <p></p>
	<input type='text' name="image_title" placeholder='タイトル'>
	<p></p>
    <textarea name='title' id='textform' placeholder='サブタイトル'></textarea>
	<p></p>
	<input type="submit" value="Upload">
</form>

</body>
</html>