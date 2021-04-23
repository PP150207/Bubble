<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Bubble</title>
</head>
<body>

<header>
	<a href="{{ route('upload_form') }}" class='left-item'>Upload</a>
	<a href="{{ route('image_list') }}" class='center-item'>List</a>
	<a href="{{ route('my') }}" class='right-item'>My</a>
</header>
<div class='under-the-grid'></div>

<div class='grid'>
	@foreach($images as $image)
		<div>
			<a href='/list/{{$image->id}}'><img src="data:image/png;base64,{{ $image->image }}" /></a>
			<p class='grid-title'>{{ $image->image_title }}</p>
		</div>
	@endforeach
</div>
</body>
</html>