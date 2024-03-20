@extends('layouts.app')
@section('title','Create Form')
@section('content')
<h1>Create a new project!</h1>
<form>
    <div class="mb-3">
      <label for="title" class="form-label">Title project</label>
      <input type="text" class="form-control">
      <div class="form-text">Add title for new project.</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Title project</label>
      <input type="text" class="form-control">
      <div class="form-text">Add title for new project.</div>
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Title project</label>
      <input type="text" class="form-control">
      <div  class="form-text">Add title for new project.</div>
    </div>
    
    <button type="submit" class="btn btn-primary">Crea</button>
  </form>
@endsection
