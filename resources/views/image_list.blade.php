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
<a href="{{ route('upload_form') }}">Upload</a>
<a href="{{ route('home') }}">Home</a>
<hr />
<div>
	@foreach($images as $image)
		<div class='timeline'>
			<a href='/list/{{$image->id}}'><img src="{{ Storage::url($image->file_path) }}" id='items'/></a>
			<p>{{ $image->title }}</p>
		</div>
	@endforeach
</div>
</body>
</html>