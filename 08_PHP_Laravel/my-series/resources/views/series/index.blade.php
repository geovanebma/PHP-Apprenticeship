@extends("layout");

@section('header')
Series
@endsection

@section('content')
@if (!empty($message))
<div class="alert alert-success">
  {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<a href="{{ route('form_add_serie') }}" class="btn btn-dark mb-2">Add Serie</a>
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
      <tr>
        <th scope="col">{{ $serie->id }}</th>
        <td scope="row" id="td-serie-name{{$serie->id}}">{{ $serie->name }}</td>
        <td scope="row" id="edit-serie-name{{$serie->id}}" hidden>
          <div class="input-group w-50">
            <input type="text" name="serie-name{{$serie->id}}" id="serie-name{{$serie->id}}" value="{{$serie->name}}">
            <button class="btn btn-primary" onclick="toggleInput({{ $serie->id }})">
              <i class="bi bi-check-square-fill"></i>
            </button>
            @csrf
          </div>
        </td>
        @if ($serie->watched == 'n')
          <td>Not yet</td>
        @elseif ($serie->watched == 'y')
          <td>Yes</td>
        @elseif ($serie->watched == 'w')
          <td>Watching</td>
        @endif
        <td scope="row">
          <button type="button" class="btn btn-outline-primary" onclick="toggleInput({{$serie->id}})">
            <i class="bi bi-pencil-square"></i>
          </button>
        </td>
        <td>
        <form action="/series/{{ $serie->id }}" method="post" onsubmit="return confirm('Do you have certain to remove the serie {{ addslashes($serie->name) }}?')">
          @csrf
          @method('DELETE')
          <button class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"></path>
            </svg>
            Remove?
          </button>
        </form>
        </td>
      </tr>
    @endforeach
  </tbody>
  <script>
    function editName(id){
      const name  = document.querySelector(`#serie-name${id}`).value;
      const token = document.querySelector(`input[name="_token"]`).value;
      const url = `/series/${id}/editName`;
      let formData = new FormData();

      formData.append('name', name);
      formData.append('_token', token);
      
      fetch(url, {
        body: formData,
        method:'POST'
      }).then(function(){
        var td_name = document.getElementById('td-serie-name'+id);
        var edit_name = document.getElementById('edit-serie-name'+id);
        
        td_name.removeAttribute('hidden');
        edit_name.hidden = true;

        location.reload();
      })
    }

    function toggleInput(serie_id){
      var td_name = document.getElementById('td-serie-name'+serie_id);
      var edit_name = document.getElementById('edit-serie-name'+serie_id);

      if(td_name.hasAttribute('hidden')){
        editName(serie_id);
      }else{
        edit_name.removeAttribute('hidden');
        td_name.hidden = true;
      }
    }
  </script>
</table>
@endsection
