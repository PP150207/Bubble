<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble</title>
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
	<textarea type=text name='image_title' class='edit-title' rows='2' cols='10'>{{ $image->image_title }}</textarea>
    <div class='top-content'>
        @foreach($images as $image)
        <div>
            <div class='content-list'></div>
            <img src="{{ Storage::url($image->file_path) }}"  id='edit-item'/>	
        </div>
        @endforeach
    </div>
    <textarea name='title' class='edit-subtitle' rows='3' cols='20'>{{ $image->title }}</textarea>
	<div class='edit-submit'>
        <input type='hidden' name='created_at' value='{{ $image->created_at }}'>
        <input type="submit" value="編集" class='edit-submit'>
    </div>
</form>


<form action='{{ route('delete') }}' method='post'>
    @csrf
    <div class='edit-delete'>
        <input type="hidden" name='id' value='{{ $image->created_at }}'>
        <input type='submit' value='削除' class='edit-delete'>
    </div>
</form>

</body>
</html>