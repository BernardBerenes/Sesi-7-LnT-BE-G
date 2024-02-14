<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>View Page</title>
</head>
<body>
    @foreach ($book as $b)    
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title">{{ $b->title }}</h1>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $b->author }}</h6>
                <p class="card-text">{{ $b->release_date }}</p>
                <p class="card-text">{{ $b->isbn }}</p>
                <div class="d-flex">
                    <a href="{{ route('editPage', ['id'=>$b->id]) }}" class="btn btn-warning">See Details & Edit</a>
                    <form method="POST" action="{{ route('deleteBook', ['id'=>$b->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</body>
</html>