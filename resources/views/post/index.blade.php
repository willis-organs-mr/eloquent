@foreach ($posts as $post)
    <h4><a href="{{ route('posts.show', $post) }}">{{ $post->body }}</a></h4>
    <p>by {{ $post->user->name }}</p>
@endforeach
