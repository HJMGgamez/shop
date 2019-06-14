@extends('layouts.app')
    @section('content')

        <div class="row d-flex align-items-end">
            @foreach($articles as $article)
                <div class="col-4 pt-3">
                    <a class="productLink" href="producten/{{ $article->id }}">
                        <img src="{{ $article->image }}" class="w-100">
                        <h1>{{ $article->name }}</h1>
                        <p>{{ $article->discrapsoin }}</p>
                </div>
            @endforeach
        </div>
    @endsection
