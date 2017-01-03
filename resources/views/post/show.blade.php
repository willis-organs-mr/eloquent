<h3>{{ $post->body }}</h3>
<p>Belongs to <a href="{{ route('topics.show', $post->topic) }}">{{ $post->topic->title }}</a></p>
