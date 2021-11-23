<!-- ******************************** -->
<!-- *****   点つなぎ印刷ページ  **** -->
<!-- ******************************** -->
<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','てんつなぎ ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h2>てんつなぎ印刷ページ</h2>

        <p class="text-center">クリックすると印刷ページ(PDFファイル)が開きます</p>

        <h3>15まで</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                </tr>
            </table>
        </div><!-- /.box -->
        <br>
        <h3>30まで</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #eceb8d">
                        </a>
                    </td>
                </tr>
            </table>
        </div><!-- /.box -->
</div>
<!--/#contents-->
@endsection