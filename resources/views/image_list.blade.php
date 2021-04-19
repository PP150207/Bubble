<a href="{{ route('upload_form') }}">Upload</a>
<hr />

@foreach($images as $image)
<div>
	<img src="{{ Storage::url($image->file_path) }}" style="width:100%;"/>
	<p>{{ $image->title }}</p>
</div>
@endforeach

