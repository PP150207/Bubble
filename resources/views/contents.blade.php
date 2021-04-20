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
	<div>
		<div class='content-title'>
			<h1>図書館の大魔術師</h1>
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
			<p class='hoge'>{{ $content->title }}</p>
		</div>
	</div>
</div>

</body>
</html>