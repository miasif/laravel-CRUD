<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid bg-black d-flex justify-content-center ">
                <a class="navbar-brand text-white text-center justify-center align-middle" href="#">Laravel 11
                    Crud</a>
            </div>
        </nav>

        <div class="card">
            <div class="card-header">
                <h5>Category Edit</h5>
            </div>

            <form action="{{ route('category.update', $category->id) }}" method='post'>
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="name" value="{{ $category->name }}" class="form-control" name="name"
                            placeholder="name" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>


    </div>



</body>

</html>
