@extends('layouts.app')

@section('content')

<div class="row d-flex align-items-end">
            @foreach($articles as $article)
                <div class="col-6 pt-3">
                    <a class="productLink" href="article/{{ $article->id }}">
                        <img src="{{ $article->image }}" class="w-100">
                        <h1>{{ $article->name }}</h1>
                        <p>{{ $article->discrapsoin }}</p>
                    </a>
                </div>
            @endforeach
        </div>
@endsection