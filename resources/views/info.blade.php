@extends('layouts.app')

@section('content')
<div class="container">
    <form action="shopingcart/info" class="mt-3 d-flex">
        <div class="inputNames col-3">
            <h2>country:</h2>
            <h2>city:</h2>
            <h2>zipCode:</h2>
            <h2>street:</h2>
            <h2>houseNumber:</h2>
            <h2>phoneNumber:</h2>
        </div>
        <div class="inputs col-4">
            <input class="text mb-3" type="text" name="country">
            <input class="text mb-3" type="text" name="city">
            <input class="text mb-3" type="text" name="zipCode">
            <input class="text mb-3" type="text" name="street">
            <input class="text mb-3" type="text" name="houseNumber">
            <input class="text mb-3" type="text" name="phoneNumber">
            <input class="number" type="hidden" name="userId">
            <input class="btn add-btn" type="submit" value="buy">
        </div>
    </form>
</div>
@endsection