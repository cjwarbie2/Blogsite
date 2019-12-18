@extends('app')

@section('title', 'Home')

@section('content')
  <p> Users Posts </p>
  <ul>
    @foreach ($posts as $post):
      <li>{{$post->user_id}}</li>
      <li>{{$post->title}}</li>
      <li>{{$post->content}}</li>
    @endforeach
  </ul>
@endsection
