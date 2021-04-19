<div>
	@foreach($contents as $content)
	<div>
		<img src="{{ Storage::url($content->file_path) }}" style="width:100%;"/>	
	</div>
	@endforeach
	<div>
		<p>{{ $content->title }}</p>
	</div>
</div>

