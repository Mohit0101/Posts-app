<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Post!</h1>

    <form method="POST" action= "{{ route('posts.edit', '$post->id') }}">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value=" {{ old('title', $post->title) }}">
        <br>
        <br>
        <label>Body:</label>
        <textarea name="description">{{ old('description', $post->description) }}</textarea>
        <br>
        <br>
        <button type="Update">Save</button>
    </form>

        @if($errors->any())
        <ul>
            @foreach($errors as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
</body>
</html>