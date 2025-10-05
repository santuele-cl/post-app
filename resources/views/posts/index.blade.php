<div>
    @foreach ($posts as $post)
        <p>Post : {{ $post->title }}</p>
        <a href="{{ route('posts.show', $post->id) }}">View Details</a>
    @endforeach
</div>
