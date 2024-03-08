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
<section id="comic-details" >
    <div class="upper-comic-details container" >
        <div class="upper-comic-generics">
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
    <div class="bottom-comic-details">
        <div class="container">
            <div class="bottom-comic-generics">
                <div class="talents">
                    <h2>Talents</h2>
                    <div class="talents-box">
                        <h5>Art by:</h5>
                        <div class="artists-list">
                            @foreach ($comics['artists'] as $artist)
                            <span><a>{{$artist}}</a>@if(!$loop->last),@endif</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="talents-box">
                        <h5>Written by:</h5>
                        <div class="writers-list">
                            @foreach ($comics['writers'] as $artist)
                            <span><a>{{$artist}}</a>@if(!$loop->last)</a>,@endif</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h2>Specs</h2>
                    <div class="specs-box">
                        <h5>Series:</h5>
                        <h4>{{$comics['series']}}</h4>
                    </div>
                    <div class="specs-box">
                        <h5>U.S. Price:</h5>
                        <h4>{{$comics['price']}}</h4>
                    </div>
                    <div class="specs-box">
                        <h5>On Sale Date:</h5>
                        <h4>{{$comics['sale_date']}}</h4>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>



@endsection