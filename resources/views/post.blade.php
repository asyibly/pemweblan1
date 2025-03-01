<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <div class="container mt-3">
        @csrf
        <h2 class="mb-4">Daftar Post</h2>
        
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    
                    <h6>Komentar:</h6>
                    <ul>
                        @foreach($post->comments as $comment)
                            <li>{{ $comment->comment }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
