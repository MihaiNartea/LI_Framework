<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        {{-- Return Button --}}
        <a href="{{ route('posts.home') }}" class="btn btn-primary mb-4">Back to Home</a>

        {{-- Post's Card --}}

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    
                    <a class="text-black text-decoration-none" href={{ route('posts.show', $post) }}>{{ $post->title }}</a>
                </h5>
                <p class="card-text">{{ $post->description }}</p>
                <div class="d-flex align-items-end justify-content-between">
                    <small class="text-body-secondary">Category: {{ $post->category->name ?? 'None' }}</small>
                    <small class="text-body-secondary">{{ $post->published_at }}</small>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
