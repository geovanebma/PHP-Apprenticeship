@extends('layout')

@section('header')
Add a new serie
@endsection

@section('content')
<a href="/series" class="btn btn-dark mb-2">Series page</a>
<form method="post">
  <div class="form-group">
    <label for="name">Serie Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <button class="btn btn-success mt-2">Add</button>
</form>
@endsection