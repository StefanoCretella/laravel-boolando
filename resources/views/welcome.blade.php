@extends('layouts.app')

@section('content')
    <div class="products">
        @foreach($products as $product)
            <div class="product">
                <div class="product-image">
                    <img class="front-image" src="{{ asset('images/' . $product['frontImage']) }}" alt="{{ $product['name'] }}">
                    <img class="back-image" src="{{ asset('images/' . $product['backImage']) }}" alt="{{ $product['name'] }}">
                </div>
                <h2>{{ $product['name'] }}</h2>
                <p>{{ $product['brand'] }}</p>
                <p class="price">{{ $product['price'] }}€</p>
                <div class="badges">
                    @foreach($product['badges'] as $badge)
                        <span class="badge {{ $badge['type'] }}">{{ $badge['value'] }}</span>
                    @endforeach
                </div>
                @if($product['isInFavorites'])
                    <span class="favorite">♥</span>
                @endif
            </div>
        @endforeach
    </div>
@endsection
