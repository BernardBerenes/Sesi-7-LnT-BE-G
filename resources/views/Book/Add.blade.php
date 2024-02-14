<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Add Book</title>
</head>
<body>
    <form class="p-5" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="author">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="publisher">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="isbn">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="release_date">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Page</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="page">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stock</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="stock">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>