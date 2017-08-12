<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
</head>
<body>
<h1>{{ $post->title }}</h1> &nbsp;&nbsp;{{ $post->created_at->diffForHumans() }}
<hr>
<p>
	{{ $post->body }}
</p>
</body>
</html>