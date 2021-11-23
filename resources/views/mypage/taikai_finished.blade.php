<!-- 退会完了ページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','退会完了 ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h1 class="contCaption">THAK YOU</h1>
        <h2 class="contSubCaption">退会完了</h2>
        <p class="message-user-kaiin">ご利用ありがとうございました。</p>

        <div class="container">
            <a href="{{ route('showTop') }}" class="reset-submit">HOMEへ</a><br>
        </div>

    </section>

</div><!--/#contents-->
@endsection