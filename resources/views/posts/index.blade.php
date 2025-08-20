    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>All Posts!</h1>

        <a href= "{{ route('posts.create') }}">Create a Post</a>

        @foreach($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
            <p>{{$post->description}}</p>

            <a href= "{{ route('posts.edit', $post->id) }}">Edit</a>
            <form method="POST" name="delete" action=" {{ route('posts.destroy', $post->id) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick=" return confirm('Are you sure want to delete this post?')">Delete</button>
            </form>
        </div>
        @endforeach

    </body>
    </html>