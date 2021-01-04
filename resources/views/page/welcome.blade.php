@extends('layouts.app')
@section('content')
    <style>
        .footer{
            margin-top: 5rem;
        }
    </style>
    
    <section class="section-one">
        <div id="carousel-engine" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                @php
                    $count = 0;
                @endphp
                @foreach(\App\Models\Collection::all() as $c)
                <div class="carousel-item @if($count == 0) active @endif">
                    <img class="d-block w-100" src="{{ $c->getMedia('gallery')[0]->getUrl() }}" alt="{{ $c->name }}">
                </div>
                    @php
                    $count++;
                    @endphp
                @endforeach
            </div>
        </div>
        <div class="title">
            ARSIP LABEL DAN STIKER NUSANTARA
        </div>
    </section>

{{--    <div class="row content-container">--}}
{{--        @foreach($collections as $c)--}}

{{--            <div class="col-6 col-sm-3">--}}
{{--                <a href="{{ route('koleksiDetail', $c->id) }}">--}}
{{--                    <div class="square">--}}
{{--                        <img src="{{ $c->getMedia('gallery')[0]->getUrl() }}"/>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
@endsection
