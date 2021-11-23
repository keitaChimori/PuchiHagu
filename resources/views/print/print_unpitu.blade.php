<!-- ******************************** -->
<!-- ****   うんぴつ印刷ページ   **** -->
<!-- ******************************** -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','うんぴつ ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h2>うんぴつ印刷ページ</h2>

        <p class="text-center">クリックすると印刷ページ(PDFファイル)が開きます</p>

        <h3>かんたん</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <br>

        <h3>チャレンジ</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #baeebe">
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</div>
<!--/#contents-->

@endsection