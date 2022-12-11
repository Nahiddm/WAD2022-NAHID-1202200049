
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
        .toast {
            position: absolute;
            bottom: 3rem;
            right: 3rem;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="product">Mycar</a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="product/create" class="btn btn-light bg-white">Add Car</a>
                    </li>
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <h1>My Show Room</h1>
            <p>List Show Room Nahid - 1202200049</p>
            <div class="row mb-5">
               @foreach ($products as $car)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="/image/{{$car->image}}" class="img-thumbnail">
                            <h4 class="mt-3">{{$car->name}}</h4>
                            <div class="mb-4">{{$car->description}}</div>
                            <form action="{{ route('product.destroy', $car->id) }}" method="post">
                            <div class="modal-body">
                            @csrf
                            @method('DELETE')
                            <h5 class="text-center"></h5>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger px-5 rounded-pill">Delete Car</button>
                                <a href="/car/{{$car-> id}}" class="btn btn-primary px-5 rounded-pill">Detail</a>
                            </div>
                        </form>
                           
                        </div>
                    </div>
                    
                </div>
                
               
   
@endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>