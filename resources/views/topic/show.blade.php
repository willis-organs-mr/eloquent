<h3>{{ $topic->title }}</h3>

@if ($topic->posts->count())
    @foreach ($topic->posts as $post)
        <a href="{{ route('posts.show', $post) }}"><h4>{{ $post->body }}</h4></a>
        <p>by {{ $post->user->name }}</p>
    @endforeach
@else
    <p>No posts</p>
@endif
