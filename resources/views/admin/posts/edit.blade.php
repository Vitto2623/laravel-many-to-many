@extends('layouts.app')

@section('create-post', 'form')

@section('content')
    <main class="bg-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center p-5">

                <form class="row g-3" action="{{route('admin.posts.update', [ $post->id])}}" method="post">
                    @csrf

                    @method('PUT')

                    <div class="col-12 text-center">
                        <label for="title" class="form-label">Titolo Post</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
                    </div>
                    <div class="col-12 d-flex flex-column">
                        <label for="content" class="form-label">Aggiugni Contenuto Post</label>
                        <textarea name="content" id="content" cols="30" rows="10" >
                            {{$post->content}}"
                        </textarea>
                    </div>

                    <div class="col-6">
                        <select style="border: 2px solid blue" name="category">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                @if ($post->categories[0]->id === $category->id)
                                @endif selected>    
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                        <label for="image_url" class="form-label">Aggiungi immagine</label>
                        <input type="text" class="form-control w-25" name="image_url" id="price" placeholder="inserisci un'immagine" value="{{$post->image_url}}">
                    </div>

                    <div class="col-12  text-center mt-5">
                        <button type="submit" class="btn btn-primary">Modifica il post</button>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
@endsection