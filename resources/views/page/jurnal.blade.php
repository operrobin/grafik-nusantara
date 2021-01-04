@extends('layouts.app')

@section('style')

    <style>
        .jurnal {
            margin: 0 32px;
            padding-top: 2em;
        }

        .jurnal .jurnal-item {
            margin: 2em 0;
        }

        .jurnal .jurnal-item .banner {
            width: 100%;
        }

        .jurnal .jurnal-item .banner img {
            width: 100%;
            height: 13rem;
        }

        .jurnal .jurnal-item:hover{
            cursor: pointer;
        }

        .jurnal .jurnal-item:hover > .title a {
            width: 100%;

            text-decoration: underline;
            text-underline-offset: 2px;
        }

        .banner .overlay{
            position: absolute;
            z-index: 7;
            background: black;
            width: 100%;
            height: 78.75%;
            opacity: 0;
            transition: opacity .5s;
        }

        @media only screen and (max-width: 768px){
            .banner .overlay{
                height: 60%;
            }
        }

        .jurnal .jurnal-item:hover > .banner .overlay {
            opacity: 0.5;
        }

        .jurnal .jurnal-item .title a{
            color: white;
        }

        .jurnal .jurnal-item .title {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 140%;
            z-index: 8;


            /* or 25px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        .jurnal .jurnal-item .date {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 140%;
            z-index: 8;


            /* or 25px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        @media only screen and (min-width: 768px) {
            .jurnal {
                margin: 0 32px;
                padding-top: 1em;
            }

            .jurnal .jurnal-item .banner img {
                width: 100%;
                height: 30rem;
            }
        }
    </style>

@endsection

@section('content')

    <section class="jurnal mx-sm-5">
        <div class="row">
            @foreach(\App\Models\Journal::orderBy('published_at', 'DESC')->get() as $j)
            <div class="col-12 col-sm-6">
                <div class="jurnal-item">
                    <div class="banner">
                        <a href="{{ route('jurnalDetail', $j->id) }}">
                            <div class="overlay"></div>
                            <img src="{{ !empty($j->getMedia('gallery')) ? $j->getMedia('gallery')[0]->getUrl():'' }}"/>
                        </a>
                    </div>

                    <div class="title">
                        <a href="{{ route('jurnalDetail', $j->id) }}">{{ $j->title }}</a>
                    </div>

                    <div class="date">
                        {{ date('d F Y', strtotime($j->published_at)) }}
                    </div>
                </div>

            </div>

            @endforeach

        </div>

    </section>

@endsection
