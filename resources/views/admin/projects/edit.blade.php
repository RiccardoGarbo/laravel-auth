@extends('layouts.app')
@section('title', 'edit project')
@section('content')
<form action="{{route('admin.projects.update', $project)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title project</label>
      <input name="title" type="text" class="form-control" value="{{old('title', '')}}">
      <div class="form-text">Add title for new project.</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Content project</label>
      <input name="content" type="text" class="form-control" value="{{old('content', '')}}">
      <div class="form-text">Add content for new project.</div>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image project</label>
      <input type="text" name="image"  class="form-control" value="{{old('image', '')}}">
      <div  class="form-text">Add image for new project.</div>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

@endsection