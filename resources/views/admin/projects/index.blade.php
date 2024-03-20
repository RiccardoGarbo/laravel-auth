@extends('layouts.app')


@section('title', 'Projects')

@section('content')

<header>
    <h1 class="text-center">Projects</h1>
</header>
<main class="container">

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </tr>
        </thead>
        @foreach ($projects as $project )       
        <tbody>
          <tr>
            <th scope="row">{{$project->title}}</th>
            <td>{{$project->content}}</td>
            <td>{{$project->image}}</td>
            <td>{{$project->created_at}}</td>
            <td>{{$project->updated_at}}</td>
            <td>
            <div class="d-flex gap-2"> 
              <a href="{{route('admin.projects.show' , $project)}}" class="btn btn-primary">Details</a>
              <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
              @csrf
              @method('PATCH')
              <input class="btn btn-warning" type="submit" value="Edit">
              </form>
              <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" value="Delete">
                  </form>
              </div>
            </td>
         </tr>
        </tbody>
        @endforeach
      </table>
        

</main>

@endsection
