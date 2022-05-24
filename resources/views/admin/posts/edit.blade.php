@extends('layouts.app')

@section('create-post', 'form')

@section('content')
    <main class="bg-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center p-5">

                <form class="row g-3" action="{{route('admin.posts.update', [ $post->id])}}" method="post">
                    @csrf

                    @method('PUT')

                    <div class="col-md-6">
                        <label for="title" class="form-label">Titolo Post</label>
                        <input type="text" class="form-control" name="title" id="title" value=>
                    </div>
                    <div class="col-md-6">
                        <label for="author" class="form-label">Aggiungi autore:</label>
                        <textarea class="form-control" name="author" id="description" cols="500" rows="10" placeholder="...."></textarea>
                    </div>
                    <div class="col-12">
                        <label for="content" class="form-label">Aggiugni Immagine Fumetto</label>
                        <input type="text" class="form-control" name="content" id="thumb" placeholder="aggiungi contenuto post">
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                        <label for="image_url" class="form-label">Aggiungi immagine</label>
                        <input type="text" class="form-control w-25" name="price" id="price" placeholder="inserisci un'immagine">
                    </div>
                    <div class="col-12  text-center mt-5">
                        <button type="submit" class="btn btn-primary">Aggiungi post</button>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
@endsection