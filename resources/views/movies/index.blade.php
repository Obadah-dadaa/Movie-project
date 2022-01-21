@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">All Movies</h1>




<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Rating</th>
        <th>Discreption</th>
        <th>Duration</th>
        <th>Language</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
@foreach($types as $type)
@foreach($type->movies as $movie)


      <tr>
        <td>{{$movie->id}}</td>
        <td>{{$movie->name}}</td>
        <td>{{$type->name}}</td>
        <td>{{$movie->rating}}</td>
        <td>{{$movie->discreption}}</td>
        <td>{{$movie->duration}}</td>
        <td>{{$movie->language->name}}</td>
        
        <td>         
          <a href="/movies/delete/{{ $movie->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
       @endforeach 
      
 @endforeach
    </tbody>
  </table>








@endsection
