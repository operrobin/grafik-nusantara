@extends('layouts.app')

@section('style')

    <style>

        .journal-banner {
            margin-top: 2em;
        }

        .journal-banner img {
            width: 100%;
        }

        .jurnal {
            margin: 0 32px;
        }

        .jurnal .jurnal-item {
            margin: 2em 0;
        }

        .jurnal .jurnal-item .banner {
            width: 100%;
        }

        .jurnal .jurnal-item .banner img {
            width: 100%;
        }

        .jurnal .jurnal-item .title a{
            color: white;
        }

        .jurnal .jurnal-item .title {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: 300;
            font-size: 48px;
            line-height: 150%;

            /* or 72px */
            letter-spacing: 0.03em;

            color: #FFFFFF;



            color: #FFFFFF;
        }

        .jurnal .jurnal-item .date {
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

        .jurnal .jurnal-item .content {
            margin-top: 3em;
            font-family: Lato;
            font-style: normal;
            font-weight: normal;
            font-size: 13pt;
            line-height: 150%;

            /* or 30px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
            margin-bottom: 3em;
        }

        .jurnal .jurnal-item .content img {
            max-width: 100%;
        }

        .horizontal-journal {
            display: flex;
        }

        .horizontal-journal .jurnal-item {
            margin: 0 1em 0;
        }

        .horizontal-journal .jurnal-item .banner {
            width: 100%;
        }

        .horizontal-journal .jurnal-item .banner img {
            width: 100%;
        }

        .horizontal-journal .jurnal-item .title a{
            color: white;
        }

        .horizontal-journal .jurnal-item .title {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 140%;

            /* or 25px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        .horizontal-journal .jurnal-item .date {
            margin-top: 1em;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 140%;

            /* or 25px */
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        .horizontal-journal .jurnal-item .content img {
            max-width: 100%;
        }

        .terkait {
            margin: 0 32px;
        }

        .terkait .jurnal-item .banner .overlay{
            position: absolute;
            z-index: 7;
            background: black;
            width: 29%;
            height: 17vw;
            opacity: 0;
            transition: opacity .5s;
        }

        .terkait .jurnal-item:hover > .banner .overlay {
            opacity: 0.5;
        }

        @media only screen and (min-width: 768px) {
            .journal-banner {
                margin-top: 3em;
            }

            .jurnal .jurnal-item .content {
                margin-top: 1em;
            }

            .horizontal-journal .jurnal-item {
                width: 30%;
            }
        }

        .jurnal-item .content p{
                font-size: 14;
        }
    </style>

@endsection

@section('content')

    <div class="journal-banner mx-sm-5">
        <a href="{{ route('jurnalDetail', $journal->id) }}">
            <img src="{{ !empty($journal->getMedia('gallery')) ? $journal->getMedia('gallery')[0]->getUrl():'' }}"/>
        </a>
    </div>

    <section class="jurnal mx-sm-5">
        <div class="jurnal-item">
            <div class="title">
                <a href="{{ route('jurnalDetail', $journal->id) }}">{{ $journal->title }}</a>
            </div>

            <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="date">
                        {{ date('d F Y', strtotime($journal->published_at)) }}
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <div class="content">
                        {!! $journal->content !!}
                    </div>
                </div>
            </div>




        </div>

    </section>

    <section class="terkait">
        <h4>Artikel Terkait</h4>


        <div class="horizontal-journal mx-md-6">

            @foreach(\App\Models\Journal::orderBy('published_at', 'DESC')->get() as $j)
                <div class="jurnal-item mx-sm-3">
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

            @endforeach

        </div>
    </section>

@endsection
