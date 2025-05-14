@extends("layout");

@section('header')
Series
@endsection

@section('content')
<a href="/series/add" class="btn btn-dark mb-2">Add Serie</a>
<ul class="list-group">
  @foreach ($series as $serie)
    <li class="list-group-item">{{ $serie->name }}</li>
  @endforeach
</ul>
@endsection
