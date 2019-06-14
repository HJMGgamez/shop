@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

        </div>
    </div>
    <div class="row d-flex align-items-start">
        <div class="col-8 pt-3">
            
            
        </div>
        <div class="col-4 pt-3">
            <h4>{{ $article->name }}</h4>
            <p>€ {{ $article->price }}</p>
            <br>
            <p>{{ $article->description }}</p>
            <form action="addToCart/{{ $article->id }}" class="mt-3">
                <input class="number" type="number" value="1" min="1" name='qty'>
                <input class="btn add-btn" type="submit" value="Add to cart">
            </form>
        </div>
    </div>
</div>
@endsection