<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <h1 class="text-4xl font-bold text-green-800 mb-10">Edit Your Post </h1>
        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{ $post->title }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="body">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="body" name="body">{{ $post->body }}</textarea>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="author">Author: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="author" name="author" value="{{ $post->author }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="category">Category: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="category" name="category" value="{{ $post->category }}">
            </div>

            <div class="mb-4">
                <label for="published-at">Publish At: </label>
                <input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d', strtotime($post->published_at)) }}">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>

            <form action="/posts/{{ $post->id }}">
                @csrf
                @method('DELETE')

                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
            </form>
        </form>
    </div>
</body>
</html>