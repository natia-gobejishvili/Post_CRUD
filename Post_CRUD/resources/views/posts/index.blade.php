<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width:auto; padding: 20px; margin-top: 50px;" class="container max-w-full mx-auto pt-4" >
        <h1 class="text-4xl font-bold mb-4">My Posts Page</h1>

        <a href="/posts/create" class="bg-green-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Create Post</a>

        @foreach($posts as $post)
            <article class="mb-2">
                <a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold text-blue-500">{{ $post->title }}</a><br>
                <small> Post Format: {{ $post->post_format }}</small><br>
                <small> Post Status: {{ $post->post_status }}</small><br>
                <p class="text-md text-gray-600">{{ $post->body }}</p><br>
                <p class="text-md text-gray-500">{{ $post->author }}</p><br>
                <p class="text-md text-gray-500">{{ $post->category }}</p><br>
              <!--  <p>Published At: {{date('Y-m-d', strtotime($post->published_at))}}</p> -->
                <small> Published At: {{ $post->published_at }}</small><br>
                <small> View: {{ $post->view }}</small>
                <small> Like: {{ $post->like }}</small>
                <small> Unlike: {{ $post->unlike }}</small>
                <small> Share: {{ $post->share }}</small>
                <hr class="mt-2"><br>
            </article>
        @endforeach
    </div>
</body>
</html>