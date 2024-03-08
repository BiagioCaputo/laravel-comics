@extends('layouts.main')

@section('title', 'Comics_details')


@section('main-content')
<div class="blu-separator">
    <div class="container">
        <figure class="comic-figure">
            <img src=" {{ $comics['thumb'] }}" alt="adv">
            <div class="comic-type">{{ $comics['type'] }}</div>
            <div class="vg">View gallery</div>
        </figure>
    </div>
</div>
<section id="comic-details" class="container">
    <div class="upper-comic-details">
        <div class="comic-generics">
            <h1>{{ $comics['title'] }}</h1>
            <div class="availability">
                <div class="availability-left">
                    <h4>U.S. Price:  <span>{{ $comics['price'] }}</span></h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="availability-right">
                    <h4>Check availability<h4>
                </div>
            </div>
            <p>{{ $comics['description'] }}</p>
        </div>
        <figure class="advertisement">
            <img src=" {{ asset('images/adv.jpg')}}" alt="adv">
        </figure>
    </div>
</section>



@endsection