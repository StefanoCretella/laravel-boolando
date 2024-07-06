@extends('layouts.app')

@section('content')
    <div class="products">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ asset('images/' . $product['frontImage']) }}" alt="{{ $product['name'] }}">
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
