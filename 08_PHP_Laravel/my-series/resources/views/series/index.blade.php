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
      <th scope="col">Remove?</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($series as $key => $serie)
      <tr>
        <th scope="col">{{ $serie->id }}</th>
        <td>{{ $serie->name }}</td>
        @if ($serie->watched == 'n')
          <td>Not yet</td>
        @elseif ($serie->watched == 'y')
          <td>Yes</td>
        @elseif ($serie->watched == 'w')
          <td>Watching</td>
        @endif
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
</table>
@endsection
