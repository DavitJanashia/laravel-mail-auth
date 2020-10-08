@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Post:
                  {{ $post -> title }}
                </div>
                <div class="card-body">
                  Likes: {{ $post -> like }} <br>
                  Dislikes: {{ $post -> dislike }} <br>
                  Tag: {{ $post -> tag }} <br><br>

                  @auth
                    <a class="btn btn-dark" href="{{ route('post.create') }}">CREATE NEW POST</a>
                    <a class="btn btn-primary" href="{{ route('post.edit', $post -> id) }}">EDIT</a>
                    <a class="btn btn-danger" href="{{ route('post.delete', $post -> id) }}">DELETE</a>
                  @else
                    <a class="btn btn-primary" href="{{ route('login') }}">LOGIN</a>
                  @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
