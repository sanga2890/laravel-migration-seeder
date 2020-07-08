@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row d-flex text-center">
            <p class="col-md-3"><strong>ID</strong></p>
            <p class="col-md-3"><strong>Name</strong></p>
            <p class="col-md-3"><strong>Type</strong></p>
            <p class="col-md-3"><strong>Price</strong></p>
            @foreach ($products_list as $product)


            <p class="col-md-3">{{ $product->id}}</p>
            <p class="col-md-3">{{ $product->name}}</p>
            <p class="col-md-3">{{ $product->type}}</p>
            <p class="col-md-3">{{ $product->price}}</p>

            @endforeach
        </div>

    </div>

@endsection
