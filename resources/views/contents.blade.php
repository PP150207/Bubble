<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Document</title>
</head>
<body>
<div >
	<div class='top-wrapper'>
		<div class='title-content'>
			@foreach($contents as $content)
			<h1><a href='/edit/{{$content->created_at}}'>{{ $content->image_title }}</a></h1>
			@break
			@endforeach
		</div>	
		<div class='top-content'>
			@foreach($contents as $content)
			<div>
				<div class='content-list'></div>
				<img src="{{ Storage::url($content->file_path) }}"  id='item'/>	
			</div>
			@endforeach
		</div>
		<div>
			<p><a href='/edit/{{$content->created_at}}'>{{ $content->title }}</a></p>
		</div>
		<a href='/home'>Home</a>
		<form action='{{ route('delete') }}' method='post'>
			@csrf
			<input type='hidden' name='id' value='{{ $content->created_at }}'>
			<input type='submit' value='削除'>
		</form>
		<p></p>

		

	</div>
</div>

</body>
</html>

