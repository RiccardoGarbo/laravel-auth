@extends('layouts.app')
@section('title', 'Project Details')
@section('content')
<div class="card">
    <img src="{{$project->image}}" class="{{$project->title}}" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$project->title}}</h5>
        <p class="card-text">{{$project->content}}</p>
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Go to projects</a>
       </div>
   </div>
@endsection