@extends('layouts.app')

@section('content')
<div class="row d-flex align-items-end">
            @foreach($products as $product)
                <div class="col-4 pt-3">
                    <h1>{{ $product['name'] }}</h1>
                    <p>{{ $product['price'] }}</p>
                    <p>{{ $product['qty'] }}</p>
                </div>
            @endforeach
        </div>
@endsection