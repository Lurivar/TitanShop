@extends('templates.default')

@section('page.title', 'Mon panier - ' . App\Setting::valueOrNull('SHOP_NAME'))

@section('page.content')
    <h1 class="text-center h3">Mon panier</h1>

    <div class="row">
        <div class="col-12 col-lg-8 d-flex flex-column">
            @foreach ($cart->items as $item)
            <div class="cart-item bg-light shadow-sm p-3 @if(! $loop->last) mb-3 @endif">
                <p>{{ $item->product->title }}</p>
            </div>
            @endforeach
        </div>
        <div class="col-12 col-lg-4">
            <div class="bg-light shadow-sm p-3">
                <p>{{ $cart->totalQuantity }} articles : {{ $cart->totalPriceFormatted }}</p>
                <p>Frais de port : {{ \App\Setting::valueOrNull('SHIPPING_COSTS') }}</p>
                <p>Total : {{ $cart->totalPrice }}</p>

                <a class="btn btn-primary w-100 mt-3" href="{{ route('cart.delivery') }}" role="button">Valider le panier</a>
            </div>
        </div>
    </div>
@endsection
