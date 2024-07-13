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
                <h5>Product Create</h5>
            </div>

            <form enctype="multipart/form-data" action="{{ route('products.store') }}" method='post'>
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="name" class="form-control" name="name" placeholder="name" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="sku" class="form-label">Sku</label>
                        <input type="sku" class="form-control" name="sku" placeholder="sku" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="price" class="form-control" name="price" placeholder="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="description" class="form-control" name="description" placeholder="description" cols="30"
                            rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
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
