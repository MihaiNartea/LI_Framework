<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    {{-- Navbar --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid align-items-start">
          <a class="navbar-brand" href={{ route('posts.home') }}>Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex flex-wrap">
                @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{ route('categories.filter', $category->id) }}>{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
          </div>
        </div>
      </nav>

      {{-- Post's Card --}}

    <main class="p-5">
        @foreach ($posts as $post)
            
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    
                    <a class="text-black text-decoration-none" href={{ route('posts.show', $post) }}>{{ $post->title }}</a>
                </h5>
                <p class="card-text">{{ Str::limit($post->description, 100) }}</p>
                <div class="d-flex align-items-end justify-content-between">
                    <small class="text-body-secondary">Category: {{ $post->category->name ?? 'None' }}</small>
                    <small class="text-body-secondary">{{ $post->published_at }}</small>
                </div>
            </div>
        </div>
        @endforeach


        {{-- Pagination --}}

        <div class="Pagination">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
