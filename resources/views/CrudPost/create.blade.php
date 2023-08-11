<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD POST</title>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Creation d'un POST
                </div>
                <form action="{{ route('post.create') }}" method="post" >
                    <div class="card-body">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" placeholder="Entrer le titre du post">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                            <textarea class="form-control" name="post" placeholder="Entrer le post" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                          </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    
</body>
</html>