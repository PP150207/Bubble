<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Bubble</title>
</head>
<body>
<div >
	<div class='top-wrapper'>
		<div class='title-content'>
			@foreach($contents as $content)
			<h1><a href='/home'>{{ $content->image_title }}</a></h1>
			@break
			@endforeach
		</div>	
		<div class='top-content'>
			@foreach($contents as $content)
			<div>
				<div class='content-list'></div>
				<img src="data:image/png;base64,{{ $image->image }}" id='item' />
			</div>
			@endforeach
		</div>
		<div>
			<p><a href='/edit/{{$content->created_at}}'>{{ $content->title }}</a></p>
		</div>

	</div>
</div>

</body>
</html>

