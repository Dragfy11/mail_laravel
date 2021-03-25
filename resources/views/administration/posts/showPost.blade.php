@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Posts</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                  
            <div class="card-body border">
                <h5 class="card-title">{{$post->titre}}</h5>
                <p class="card-text">{{$post->texte}}</p>
                <h6 class="text-muted">{{$post->user->name}}</h6>
                <a href="{{route('post.show',$post)}}" class="btn btn-success btn-sm">Show</a>
            </div>

            </div>

        </div>
    </div>
@stop
