<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
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
	<input type="submit" value="Upload"　onclick="disabled = true;">
    <p></p>
	<input type='text' name="image_title" placeholder='漫画のタイトル'>
	<p></p>
    <textarea name='title'>discription</textarea>
</form>

</body>
</html>