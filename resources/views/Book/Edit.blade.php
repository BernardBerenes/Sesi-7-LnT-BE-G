<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Book</title>
</head>
<body>
    <h1 class="mx-5">Edit Book</h1>
    <form class="p-5" method="POST" action="{{ route('updateBook', ['id'=>$book->id]) }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ $book->title }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="author" value="{{ $book->author }}">
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="publisher" value="{{ $book->publisher }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="isbn" value="{{ $book->isbn }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="release_date" value="{{ $book->release_date }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Page</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="page" value="{{ $book->page }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stock</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="stock" value="{{ $book->stock }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>