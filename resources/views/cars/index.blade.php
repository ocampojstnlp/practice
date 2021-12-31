@extends('layouts.app')

@section('content')
<section class="mt-5 section">
    <div class="container jumbotron">
        <h1 class="text-center">
            CARS
        </h1>
    </div>
</section>

<section class="section mb-1">
    <div class="container p-0">
        @foreach($cars as $car)
            <div class="col-12 p-0 mx-auto">
                <h6 class="text-primary"><i>Founded: </i>{{ $car->founded }}</h6>
                <h2 class="py-1">{{$car->name}}</h2>
                <p>{{ $car->description }}</p>
                <hr>
            </div>
        @endforeach
    </div>
</section>



@endsection