<!-- *********************************** -->
<!-- *******   すうじ印刷ページ   ****** -->
<!-- *********************************** -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','すうじ ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')
<div id="contents">
    <section class="box1">

        <h2>すうじ印刷ページ</h2>

        <p class="text-center">クリックすると印刷ページ(PDFファイル)が開きます</p>

        <h3>0～4</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字0" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字1" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字2" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字3" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字4" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <br>

        <h3>5～9</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字5" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字6" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字7" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字8" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="数字9" hspace="10" vspace="10" style="border:solid 5px #c6ecf0">
                        </a>
                    </td>
                </tr>
            </table>
        </div><!-- /.box -->
    </section>
</div><!--/#contents-->
@endsection