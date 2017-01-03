@foreach ($posts as $post)
    <h4><a href="{{ route('posts.show', $post) }}">{{ $post->body }}</a></h4>
    <p>{{ $post->created_at->diffForHumans() }}</p>
    <p>Belongs to <a href="{{ route('topics.show', $post->topic) }}">{{ $post->topic->title }}</a></p>
@endforeach
