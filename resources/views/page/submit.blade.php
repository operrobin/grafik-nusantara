@extends('layouts.app')

@section('scripts')
    <script>

        $(function() {

        });

    </script>
@endsection

@section('style')

    <style>
        .submit {
            padding-top: 2em;
            margin: 0 32px;

            margin-bottom: 5em;

            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 28px;
            line-height: 24pt;
            letter-spacing: 0.05em;

            color: #FFFFFF;
        }

        .submit button{
            margin-top: 2em;
        }

        .submit p{
            margin-bottom: 4rem;
        }

        .modal {
            color: #333;

            font-family: Lato;
            font-style: normal;
            font-weight: 300;
            font-size: 12pt;
            outline: none !important;
        }

        .modal-footer button {
            font-size: 9.5pt;
        }

        .choice {
            font-family: Onehunga, sans-serif;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: none !important;
            border-bottom: 1px solid #333 !important;
            border-radius: 0 !important;
            padding-left: 0 !important;
            outline: none !important;
        }

        .choice label {
            font-size: 24pt;
        }

        .btn-arsip {
            background-color: #000;
            border: 1px solid #888 !important;
            padding: 10px 25px !important;
            color: white !important;
        }

        .alert.alert-white {
            background-color: white;
            color: black;
            text-align: center;
            padding: 3em;
            position: fixed;
        }

        .btn-send {
            background-color: #000 !important;
            border: 1px solid #888 !important;
            padding: 10px 25px !important;
            color: white !important;
        }

        .btn-send2 {
            background-color: white !important;
            border: 1px solid black !important;
            padding: 10px 25px !important;
            color: black !important;
        }

        .choice .form-check-custom {
            position: relative;
            padding-left: 1.5em;
        }

        .choice .form-check-custom input {
            display: none;
        }

        .choice .form-check-custom input ~ .checkmark {
            position: absolute;
            left: 0;
            width: 12px;
            height: 12px;
            border: 2px solid black;
            content: ":";
        }

        .choice .form-check-custom input:checked ~ .checkmark {
            position: absolute;
            left: 0;
            width: 12px;
            height: 12px;
            border: 2px solid black;
            background-color: black;
        }

        /* .choice .form-check-custom input:checked ~ .checkmark:before {
            background-color: black;
        } */

        @media only screen and (min-width: 768px) {
            .submit {
                padding-top: 1em !important;
                font-family: Lato;
                font-style: normal;
                font-weight: 200;
                font-size: 48px; 
                line-height: 48px;
                letter-spacing: 0.03em;

                color: #FFFFFF;
                margin-bottom: 4em;
            }

            .submit button{
                font-size: 30pt !important;
            }

            .btn-arsip {
                font-family: Lato, sans-serif !important;
                font-style: normal;
                font-weight: 200;
                font-size: 38pt !important;
                line-height: 48px;

                /* identical to box height */
                letter-spacing: 0.03em;
            }

            .label-story{
                position: absolute;
                top: 100;
                width: 100%;
            }
        }

        .label-story textarea {
            resize: none !important;
        }

        #submit-modal-title {
            font-family: Onehunga, sans-serif;
            letter-spacing: 0.03em
        }

        @media (min-width: 576px) {
            .col-sm-05{
                position: relative;
                width: 100%;
                padding-right: 7.5px !important;
                padding-left: 7.5px !important;
                flex: 0 0 4.1666666666% !important;
                max-width: 4.1666666666% !important;
            }
        }



    </style>

@endsection

@section('content')

    @if(Session::has('message'))
    <div class="container">
        <div class="alert alert-white alert-dismissible fade show" role="alert">

            <h3>Selamat. This website is all about presenting the books of others: authors, artists or designers, </h3>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    </div>
    @endif

    @if($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <section class="submit">
        <div class="row no-gutters">
            <div class="col-2 col-sm-05 col-sm-1">
                <p>1.</p>
            </div>
            <div class="col-10 col-sm-11">
                <p>Website ini menyajikan arsip label dan stiker lawas Indonesia yang dibuat di era 90an ke bawah.</p>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-2 col-sm-05 col-sm-1">
                <p>2.</p>
            </div>
            <div class="col-10 col-sm-11">
                <p>Harap megirimkan arsip pribadi Anda sendiri bukan orang lain.</p>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-2 col-sm-05 col-sm-1">
                <p>3.</p>
            </div>
            <div class="col-10 col-sm-11">
                <p> Data Pengarsip dan Arsip:
                    <ul>
                        <li>Data Pengarsip: Nama Kolektor, Nomer Telepon, Alamat Email, Akun Instagram. </li>
                        <li>Data Arsip: Judul / Kategori (Ex: Label-Obat, Stiker-Religi) / Tahun Pembuatan (Jika diketahui) / Desainer (Jika diketahui)</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="row no-gutters mt-2">
            <div class="col-2 col-sm-05 col-sm-1">
                <p>4.</p>
            </div>
            <div class="col-10 col-sm-11">
                <p>
                    Format Arsip:
                    <ul style="column-count: 1;">
                        <li>Arsip di scan atau di foto dan harus terlihat jelas</li>
                        <li>Latar harus berwarna Hitam</li>
                        <li><i>Media Square</i> dengan ukuran 1080 x 1080 pixel</li>
                    </ul>

                </p>
            </div>
        </div>
    
        <button data-toggle="modal" data-target="#arsipSend" class="btn btn-arsip">
            Kirimkan Arsip
        </button>
    </section>

    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="arsipSend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-sm-5">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 mb-sm-4">
                                <h2 id="submit-modal-title">Formulir Pengarsipan</h2>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-12 col-sm-6 offset-sm-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="name" class="form-control mt-sm-3" required placeholder="Nama Lengkap"/>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="text" name="phone" class="form-control mt-sm-3" required placeholder="08xxxxxxxxx"/>
                                    </div>

                                    <div class="form-group mt-sm-3">
                                        <label>Alamat Email</label>
                                        <input type="text" name="email" class="form-control mt-sm-3" required placeholder="Email@kamu"/>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Akun Instagram</label>
                                        <input type="text" name="instagram" class="form-control mt-sm-3" required placeholder="@akunkamu"/>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 offset-sm-12">
                                    <div class="choice">
                                        <div class="form-check-custom form-check-inline">
                                            <input class="form-check-input-custom" required type="radio" name="type" id="inlineRadio1" value="Label">
                                            <label class="form-check-label-custom" for="inlineRadio1">Label</label>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="form-check-custom form-check-inline">
                                            <input class="form-check-input-custom" required type="radio" name="type" id="inlineRadio2" value="Sticker">
                                            <label class="form-check-label-custom" for="inlineRadio2">Sticker</label>
                                            <span class="checkmark"></span>
                                        </div>
                                    </div>

                                    <div class="form-group label-story">
                                        <label>Data Arsip</label>
                                        <textarea name="story" rows="9" style="height: 14.97em;" class="form-control mt-sm-3" required placeholder="Judul / Kategori (Ex: Label-Obat, Stiker-Religi) / Tahun Pembuatan (Jika diketahui) / Desainer (Jika diketahui)"></textarea>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-sm-5 d-none">
                                    <label>Lampirkan File</label>
                                    <input type="file" multiple name="file[]" accept='image/*' class="image_click" required/>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" class="btn btn-secondary btn-send2" onclick="$('.image_click').click()">Lampirkan Foto</button>
                        <button type="submit" class="btn btn-primary btn-send">Kirim Arsip</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        let checkmarks = document.getElementsByClassName('checkmark');
        checkmarks[0].addEventListener('click', () => {
            document.getElementById('inlineRadio1').dispatchEvent(
                new MouseEvent('click', {
                        bubbles: true,
                        cancelable: true,
                        view: window,
                })
            );
        });

        checkmarks[1].addEventListener('click', () => {
            document.getElementById('inlineRadio2').dispatchEvent(
                new MouseEvent('click', {
                        bubbles: true,
                        cancelable: true,
                        view: window,
                })
            );
        });

    </script>
@endsection
