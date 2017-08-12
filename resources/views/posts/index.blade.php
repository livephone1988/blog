<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
<ul>
	
@foreach ($posts as $post)
	<h3>
		<a href="posts/{{ $post->id}}">	
			<li>{{ $post->title }}</li>&nbsp;&nbsp;
		</a>{{ $post->created_at->diffForHumans() }}
		<p>
			{{ $post->body }}
		</p>
	</h3>

@endforeach
</ul>
</body>
</html>