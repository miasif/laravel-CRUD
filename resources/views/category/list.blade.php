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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid bg-black d-flex justify-content-center">
                <a class="navbar-brand text-white" href="#">Laravel 11 CRUD</a>
            </div>
        </nav>

        <div class="col-md-10 mt-3 d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-dark">Create</a>
        </div>

        <div class="col-md-10 mt-3 d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-dark">Products</a>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Category List</h5>
            </div>



            <form action="{{ route('category.store') }}" method='post'>
                @csrf
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        @foreach ($categories as $category)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td> {{ $category->created_at }} </td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            class="btn btn-dark">Edit</a>


                                        <form action="{{ route('category.destroy', $category->id) }}" method="post"
                                            style=" display:inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure want to delete?')">Delete</button>

                                        </form>


                                    </td>
                                </tr>

                            </tbody>
                        @endforeach
                    </table>

                </div>
            </form>
        </div>


    </div>



</body>

</html>
