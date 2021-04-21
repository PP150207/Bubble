<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Document</title>
</head>
<body>
<header>
	<a href="{{ route('upload_form') }}">Upload</a>
	<a href="{{ route('image_list') }}">List</a>
	<a href="{{ route('my') }}">My</a>

</header>
<div class='under-the-grid'></div>
<div class='grid'>
	@foreach($images as $image)
		<div>
			<a href='/list/{{$image->id}}'><img src="{{ Storage::url($image->file_path) }}" /></a>
			<!-- <p>{{ $image->title }}</p> -->
		</div>
	@endforeach
</div>
</body>
</html>