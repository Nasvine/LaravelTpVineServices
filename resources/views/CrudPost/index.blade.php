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
                 
                  <div class="row">
                    <div class="col-md-9"> LIST OF POSTS</div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Ajouter un Post
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Post</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($variables as $k => $variable)
                        <tr>
                            <th scope="row">{{ $k + 1 }}</th>
                            <td>{{ $variable->titre }}</td>
                            <td>{{ $variable->post }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalModifier_{{ $k + 1 }}">
                                        Modifier
                                    </button>
                                    <form class="px-1 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                        method="POST" action="{{ route('post.destroy', $variable->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                            >
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModalModifier_{{ $k + 1 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Formulaire pour modifier un post</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('post.update', $variable->id) }}" method="post">
                                    @csrf

                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="card-body">
                                              <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Titre</label>
                                                <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" value="{{ $variable->titre }}">
                                              </div>
                                              <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                                                <textarea class="form-control" name="post" id="exampleFormControlTextarea1" rows="3" value="{{ $variable->post }}"></textarea>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Valider</button>
                                        </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulaire pour ajouter un post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" placeholder="Entrer le titre du post">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                        <textarea class="form-control" name="post" placeholder="Entrer le post" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
    
</body>
</html>