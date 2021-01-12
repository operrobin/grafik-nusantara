@extends('layouts.app')

@section('style')
    <style>
        .tentang {

        }

        .custom {
            font-family: Lato;
            font-style: normal;
            font-weight: 300;
            font-size: 28px;
            line-height: 34px;
            letter-spacing: 0.03em;

            color: #FFFFFF;

            margin-bottom: 1.2rem;
        }

        .custom2 {
            font-family: Lato;
            font-style: normal;
            font-weight: 300;
            font-size: 18px;
            line-height: 22px;
            letter-spacing: 0.03em;

            color: #FFFFFF;
        }

        #about-note{
            margin-top: 12px;
        }


        @media only screen and (min-width: 768px) {
            .custom {
                font-family: Lato;
                font-style: normal;
                font-weight: 200;
                font-size: 48px;
                line-height: 58px;
                letter-spacing: 0.03em;

                color: #FFFFFF;

                margin-bottom: 2rem;
            }

            .custom2 {
                font-family: Lato;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 17px;
                letter-spacing: 0.03em;

                color: #FFFFFF;
            }
        }

        /* .footer{
            margin-top: -10px;
        } */
    </style>
@endsection

@section('content')

    <section class="tentang mx-sm-5">
        <style>
            .tentang {
                padding-top: 3em;
                margin: 0 32px;
                font-family: Lato, sans-serif;
            }

            .mobile-left {
                padding-bottom: 2em;
            }

            .mobile-left img {
                width: 50%;
            }


            @media only screen and (min-width: 768px) {
                .tentang {
                    padding-top: 1em;
                }

                .mobile-left {
                    position: relative;

                }

                .mobile-left img {
                    position: absolute;
                    right: 0;
                    bottom: 1.5em;
                    width: 40%;

                }
            }
        </style>

        <p class="custom">Grafis Nusantara merupakan media pengarsipan label dan stiker Indonesia yang rata-rata dibuat di era 70-90an. Dimana di dalamnya terdapat berbagai macam label maupun stiker, Pada label sendiri terdapat label rokok, batik, hingga teh dan pada stiker terdapat stiker-stiker himbauan, religi, kartun, dan lain sebagainya.</p>

        <br>

        <p class="custom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus ornare mi sed laoreet vitae id suscipit ante nulla. Nisl id rhoncus sit molestie cursus. Amet egestas eget dolor amet eget erat purus diam, dignissim. Leo leo arcu egestas.</p>

        <br />
        <br />

        <div class="row">
            <div id="about-note" class="col-12 col-sm-6">
                <p class="custom2">
                    Initiator: Rakhmat Jaka Perkasa
                    <br />Web Design: Hendri Siman Santosa
                    <br />Programming: Simon Malz
                    <br />Thanks to: Kamengski
                    <br />Running on: Expression Engine
                    <br />Developed by: Kuasa World
                </p>

                <p class="custom2">
                    All materials on Grafis Nusantara are being made available 
                    <br />for noncommercial and educational use only. 
                    <br />All rights belong to the authors.
                    <br><br>© 2020 Grafis nusantara. All Rights Reserved.
                    <br>Indonesia +62 852 5113 5666<br>info@grafisnusantara.com<br><br>
                </p>
            </div>

            <div class="col-12 col-sm-6 mobile-left">
                <img src="/uploads/1601876627image (2) 1.png"><br>
            </div>
        </div>
    </section>

@endsection
