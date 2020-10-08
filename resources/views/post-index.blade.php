@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                  <ul>
                    @auth
                      <a class="btn btn-dark" href="{{ route('post.create') }}">CREATE NEW POST</a>                      
                    @endauth
                    <br>
                    @foreach ($posts as $post)
                      <li>
                        <a href="{{ route('post.show', $post -> id) }}">
                          <h1>
                            {{ $post -> title }}
                          </h1>
                        </a>
                        <p>
                          {{ $post -> body }}
                        </p>
                      </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
