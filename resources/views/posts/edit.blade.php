<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $post->title }}">
    <textarea name="content" placeholder="Content">{{ $post->content }}</textarea>
    <button type="submit">Submit</button>
</form>


