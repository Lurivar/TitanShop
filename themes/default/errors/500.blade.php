@extends('default.templates.public')

@section('page.content')
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center pt-3">
            <h2>Oups... Le contenu auquel vous essayé d'accéder a planté.</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <img src="{{asset('images/utils/500.svg')}}" alt="500">
        </div>
    </div>
@endsection
