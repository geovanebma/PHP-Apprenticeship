<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series to watch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h2>Series</h2>
      </div>
      <a href="/series/add" class="btn btn-dark mb-2">Add Serie</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Watched?</th>
            <th scope="col">Edit?</th>
            <th scope="col">Remove?</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($series as $key => $serie)
            <tr class="list-group-item">
              <td scope="row" id="td-serie-name{{$serie->id}}">{{ $serie->id }}</td>
              <td scope="row" id="edit-serie-name{{$serie->id}}">
                <div class="input-group w-50">
                  <input type="text" name="serie-name{{$serie->id}}" id="serie-name{{$serie->id}}" value="{{$serie->name}}">
                </div>
              </td>
              <td scope="row">{{ $serie->name }}</td>
              <td scope="row">{{ $serie->watched }}</td>
              <td scope="row">
                <button type="button" onclick="toggleInput({{$serie->id}})">
                  <i class="fas fa-edit"></i>
                </button>
              </td>
              <td scope="row">
              <button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"></path>
                </svg>
                Button
              </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>