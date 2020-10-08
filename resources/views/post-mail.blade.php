@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 {{ $user -> name }}: {{ $action}}
                </div>
                <div class="card-body">
                  {{ $post -> title }} <br>
                  {{ $post -> body }}
                  Likes: {{ $post -> like }} <br>
                  Dislikes: {{ $post -> dislike }} <br>
                  Tag: {{ $post -> tag }} <br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
