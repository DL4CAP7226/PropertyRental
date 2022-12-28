@extends('website/layout/master')
@section('title','careers')
@section('body')

<style>
    .dreamBannerWrapper {
    background-color:yellow;
    padding-top: 60px;
    padding-bottom: 50px;
}

.dreamBannerContainer {
    width: 100%;
    max-width: 1024px;
    margin: 0 auto;
    padding: 0 15px;
}
.dreamBannerWrapper .dreamBannerContainer .dreamText {
    font-size: 80px;
    text-align: left;
    color: #000;
  
}
.PrimeButton {
    background-color: #000;
    border: 1px solid #000;
    color: #fff;
    padding: 12px 18px;
    text-transform: uppercase;
}
.Button {
    cursor: pointer;
    display: inline-block;
    transition: all .3s ease;
    border-radius: 2px;
}

.openingPositionsWrapper .openingPositionsContainer {
    width: 100%;
    max-width: 1024px;
    margin: 0 auto;
    padding: 0 15px;
    position: relative;
}

.openingPositionsContainer .positionHeader {
    margin: 32px 0;
    font-size: 16px;
}
.openingPositionsWrapper .openingPositionsContainer .position {
    padding: 30px 0;
    border-top: 1px dotted #eee;
    border-bottom: 1px dotted #eee;
    cursor: pointer;
    margin-top: -1px;
}
.openingPositionsWrapper .openingPositionsContainer .position .title {
    color: #fc7982;
    font-size: 16px;
}
.openingPositionsWrapper .openingPositionsContainer .position .location {
    margin-top: 7px;
    font-size: 14px;
    color: #282828;
}
.openingPositionsWrapper .openingPositionsContainer .position .tag {
    border: 1px solid #ddd;
    padding: 3px 5px;
    border-radius: 4px;
    margin-top: 12px;
    color: #282828;
    font-size: 12px;
    display: inline-block;
}

.cool{
    color:grey;
}

</style>

@php

$career = DB::table('careers')->get();

@endphp

<div class="dreamBannerWrapper"><div class="dreamBannerContainer"><div class="dreamText">Make dreams with Nestray</div><div class="Button PrimeButton openingButton">view open positions </div></div></div>

<div class="openingPositionsWrapper">
    <div class="openingPositionsContainer">
        <h1 class="positionHeader">Open Positions at Nestray</h1>
        @foreach($career as $items)
        <div class="position">
            <div class="title">{{ $items->postName }}  </div>
            <div class="cool"><small>{{ $items->jobDesc }}</small></div>
            <div class="location">{{ $items->location }}</div>
            <div class="tag">{{ $items->postType }}</div>


        </div>
        @endforeach

        <!-- <div class="position">
                <div class="title">Area Property Manager</div>
                <div class="location">Location: Bengaluru, Karnataka, India</div>
                <div class="tag">Contract</div>
        </div> -->
    </div>
</div>

   

@endsection