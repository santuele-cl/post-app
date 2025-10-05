<x-layout>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <input class="input" type="text" name="title" placeholder="Title" value="{{ $post->title }}">
        <textarea class="textarea" name="content" placeholder="Content">{{ $post->content }}</textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>


