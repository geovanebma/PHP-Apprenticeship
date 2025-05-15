@extends('layout')

@section('header')
Add a new serie
@endsection

@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>  
      @endforeach
    </ul>
  </div>
@endif
<a href="/series" class="btn btn-dark mb-2">Series page</a>
<form method="post">
  <!-- @csrf - token verification to see if is yourself even -->
  @csrf
  <div class="form-group">
    <label for="name">Serie Name:</label>
    <input type="text" class="form-control" name="name" id="name">
    <label for="watched">Watched?</label>
    <select name="watched" id="watched">
      <option value="y">Yes</option>
      <option value="n">No</option>
      <option value="w">Watching</option>
    </select>
  </div>
  <button class="btn btn-success mt-2">Add</button>
</form>
@endsection