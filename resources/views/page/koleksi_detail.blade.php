@extends('layouts.app')

@section('style')

    <style>

        .koleksi-banner {
            margin-top: 3em;
            text-align: center;
        }

        .koleksi-nav {
            display: none;
        }

        .koleksi-banner img {
            max-width: 50%;
            min-width: 30%;
            min-height: 30%;
            max-height: 80%;
            margin: 0 auto;
        }

        .koleksi {
            margin: 0 32px;
        }

        .koleksi .koleksi-item {
            margin: 4em 0;
        }

        .koleksi .koleksi-item .banner {
            width: 100%;
        }

        .koleksi .koleksi-item .banner img {
            width: 70%;
        }

        .koleksi .koleksi-item .title a{
            color: white;
            text-transform: uppercase;
        }

        .koleksi .koleksi-item .title {
            margin-top: 1em;
            /*font-family: Lato, sans-serif;*/
            font-style: normal;
            font-weight: normal;
            font-size: 24pt;
            line-height: 140%;

            /* or 25px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        .koleksi .koleksi-item .date {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 12pt;
            line-height: 140%;

            /* or 25px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        .koleksi .koleksi-item .content {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-size:13pt;
        }

        .koleksi .koleksi-item .content img {
            max-width: 100%;

        }

        .koleksi .koleksi-item .content p {
            margin: 0 !important;
            padding: 0;
        }

        .horizontal-koleksi {
            margin: 7em 0;
        }

        /*.horizontal-koleksi .koleksi-item {*/
        /*    margin: 2em 0;*/
        /*    width: 150px;*/
        /*    height: 100px;*/
        /*}*/

        /*.horizontal-koleksi .koleksi-item .banner {*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    position: relative;*/
        /*}*/

        .horizontal-koleksi .koleksi-item .banner img {
            width: 50%;
            /*position: absolute;*/
            /*top: 50%;*/
            /*left: 50%;*/
            /*transform: translate(-50%, -50%);*/
        }

        .terkait {
            margin: 0 32px;
            margin-top:5em;
        }

        .terkait .divider {
            background-color: #aaa;
        }

        @media only screen and (min-width: 768px) {
            .koleksi {
                position: absolute;
                top: 20%;
                left:0;
            }

            .koleksi-nav {
                position: absolute;
                top: 30%;
                height: 50%;
                width: 10%;

                transform: translateY(-50%);
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .koleksi-nav.koleksi-left {
                left: 10%;
            }

            .koleksi-nav.koleksi-right {
                right: 10%;
            }

            .koleksi-nav a {
                color: white;
                width: 100%;
                opacity: 0;
                transition: opacity .5s;
            }

            .koleksi-nav:hover a {
                opacity: 1;
            }

            .koleksi-nav a img{
                width: 100%;
            }

            .koleksi-banner {
                min-height:50vh;
                margin-top: 14em;
                text-align: center;
                position: relative;
            }

            .koleksi-banner img {
                max-width: 45%;
                min-width: 25%;
                min-height: 30%;
                max-height: 60%;
                margin: 0 auto;
            }
        }
    </style>

@endsection

@section('content')

    <div class="koleksi-banner">

        @if($next)
            <div class="koleksi-nav koleksi-left">
                <a href="{{ route('koleksiDetail', $next->id) }}">
                    <img src="{{ url('images/left.png') }}"/>
                </a>
            </div>
        @endif

        @if($prev)
            <div class="koleksi-nav koleksi-right">
                <a href="{{ route('koleksiDetail', $prev->id) }}">
                    <img src="{{ url('images/right.png') }}"/>
                </a>
            </div>
        @endif


        <a href="{{ route('koleksiDetail', $koleksi->id) }}">
            <img src="{{ !empty($koleksi->getMedia('gallery')) ? $koleksi->getMedia('gallery')[0]->getUrl():'' }}"/>
        </a>
    </div>


    <section class="koleksi mx-sm-5">
        <div class="koleksi-item">
            <div class="title">
                <a href="{{ route('koleksiDetail', $koleksi->id) }}">{{ $koleksi->name }}</a>
            </div>

            <div class="content">
                <p><span class="font-bold">Kategori</span> : {{ $koleksi->Category->Type->name }} - {{ $koleksi->Category->name }} </p>
                <p><span class="font-bold">Disumbit Oleh</span> : {{ $koleksi->created_who }}</p>
                <p><span class="font-bold">Tahun Produksi</span> : {{ $koleksi->created_when }}</p>
            </div>
        </div>

    </section>

    <section class="terkait">

        <hr class="divider mb-5"/>

        <div class="horizontal-koleksi">

            <div class="row">
            @foreach(\App\Models\Collection::all() as $j)

                <div class="col-6 col-sm-3 justify-content-center align-self-center text-center">
                    <div class="koleksi-item">
                        <div class="banner image-hover-state">
                            <a href="{{ route('koleksiDetail', $j->id) }}">
                                <img src="{{ !empty($j->getMedia('gallery')) ? $j->getMedia('gallery')[0]->getUrl():'' }}"/>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>

        </div>

        <hr class="divider my-5"/>
    </section>

@endsection
