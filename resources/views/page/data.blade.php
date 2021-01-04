@extends('layouts.app')

@section('scripts')

    <script>
        $(function() {

            let holder = $("#image-holder");
            let table = $('.table');
            let koleksiItem = $(".koleki-image");

            koleksiItem.mouseenter(function(e) {
                let self = $(this);

                // holder.show(1, function() {
                    holder.attr('src', self.data('url'));
                    holder.show();
                // });

            });

            koleksiItem.click(function(e) {
                let self = $(this)

                window.location.href = self.data('id');
            });

            table.mouseleave(function(e) {
                // setTimeout(function() {
                    holder.hide();
                // }, 100);
            });

        });
    </script>

@endsection

@section('style')

    <style>
        .data {
            padding-top: 2em;
            margin: 0 32px;
            font-family: Lato, sans-serif;
            font-size:14pt;
            position: relative;
        }

        .data .table {
            z-index: 10;
        }

        .data .table th {
            font-size:12pt;
            border: none;
            border-top: 1px solid #4f4f4f;
        }

        .data .table td {
            font-size:12pt;
            border-top: 1px solid #4f4f4f;
        }

        .data .table tr:last-child td {
            border-bottom: 1px solid #4f4f4f;
        }

        .data .table tr {
            border: none;
        }

        .data .table tr:hover td {
            border-top: 1px solid white;
            border-bottom: 1px solid white;
        }

        th{
            text-align: left;
        }

        th:nth-child(3){
            text-align: right;
        }

        tr td:nth-child(3){
            text-align: right;
        }

        @media only screen and (min-width: 768px) {
            .data {
                padding-top: 3em;
                min-height: 60vh;
            }

            .image-background {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 30%;
                transform: translate(-50%,-50%);
                z-index:-1;
            }

            .image-background img {
                width: 100%;
            }

            th{
                text-align: left !important;
            }

            tr td{
                text-align: left !important;
            }

            tr td:nth-last-child(1){
                text-align: right !important;
            }

            th:nth-last-child(1){
                text-align: right !important;
            }
        }
    </style>

@endsection

@section('content')

    <section class="data mx-sm-5">

        <div class="image-background d-none d-sm-block">
            <img id="image-holder" src=""/>
        </div>

        <table class="table">
            <thead>
                <th>NO.</th>
                <th>JUDUL</th>
                <th>KATEGORI</th>
                <th class="d-none d-sm-table-cell">DI KOLEKSI OLEH</th>
                <th class="d-none d-sm-table-cell">TAHUN PEMBUATAN</th>
            </thead>

            <tbody>
            @foreach($collections as $c)

                @php
                    $media = $c->getMedia('gallery');

                    $url = '';

                    if (!empty($media)) {
                        $url = $media[0]->getUrl();
                    }
                @endphp

                <tr class="koleki-image" data-url="{{ url($url) }}" data-id="{{ route('koleksiDetail', $c->id) }}">
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->Category->Type->name }} - {{ $c->Category->name }}</td>
                    <td class="d-none d-sm-table-cell">{{ $c->created_who }}</td>
                    <td class="d-none d-sm-table-cell">{{ $c->created_when }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

    <div class="pagination-footer">
        {{ $collections->links() }}
    </div>

@endsection
