@extends('layouts.app')

@section('content')

    <div class="container-fluid mx-auto w-75 m-5">
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary btn-special">Aggiungi Post</a>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12  d-flex justify-content-center align-items-center">
                    <div class="card mb-3" style="max-width: 740px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$post->image_url}}" class="img-fluid rounded-start" style="width: 100%; height: 100%" alt="post_image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{route('admin.posts.show', $post)}}" class="fs-2">
                                        {{$post->title}}
                                    </a>
                                    <h5 class="card-title">{{Auth::user()['name']}}</h5>
                                    <p class="card-text overflow-auto" style="height: 120px">{{$post->content}}</p>
                                    <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                                    <p class="card-text">
                                        @foreach ($post->categories as $category)
                                            <span class="badge rounded-pill" style="background-color: {{$category->color}}">{{$category->name}}</span>
                                        @endforeach
                                    </p>
                                </div>
                                <div class=" col-12 d-flex justify-content-between">
                                    <a href="{{route('admin.posts.edit' , $post)}}" class="btn btn-info m-3 btn-special">Modifica Post</a>
                                    <form class="d-flex justify-content-center align-items-center m-3" action="{{route('admin.posts.destroy', [$post->id])}}" method="post">
                                        @csrf
    
                                        @method('DELETE')
                                        <input class="btn btn-info" type="submit" value="Cancella Post">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection