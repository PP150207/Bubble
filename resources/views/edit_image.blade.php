<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($images as $image)
    @endforeach
<form 
	method="post"
	action="{{ route('edit_contents') }}"
	enctype="multipart/form-data"
>
	@csrf
	<input type='text' name="image_title" value='{{ $image->image_title }}'>
	<p></p>
    <textarea name='title' id='textform'>{{ $image->title }}</textarea>
	<p></p>
    <input type='text' name='created_at' value='{{ $image->created_at }}'>
	<input type="submit" value="Update">
	<p></p>
	<a href="/home">Home</a>
</form>
</body>
</html>