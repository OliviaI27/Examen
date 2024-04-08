<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sarcini</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sarcini.index')}}">sarcini</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<h1 class="text-center">Gestionarea sarcinilor
</h1>
<div class="container">
  <div class="row">
    <a href="{{ route('sarcini.create') }}" class="btn btn-success btn-sm my-3">Adauga</a>
    <div class="row">
      <h4>Lista proiectelor</h4>
      <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Completed</th>

              </tr>
            </thead>
          <tbody>
            @foreach($sarcini as $sarcini)
            <tr>
              <td>{{$sarcini->id}}</td>
              <td>{{$sarcini->title}}</td>
              <td>{{$sarcini->description}}</td>
              <td>{{$sarcini->completed}}</td>

              <td>
                <a href="{{route('sarcini.edit',['sarcini'=> $sarcini->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{route('sarcini.show', ['sarcini'=> $sarcini->id]) }}" class="btn btn-info btn-sm">Show</a>

              </td>
            </tr>
            @endforeach

          </tbody>
          </table>
      </div>


    </div>
  </div>
</div>
<footer>

</footer>

</body>
</html>
