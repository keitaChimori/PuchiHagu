<!-- 退会確認ページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','退会確認 ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h1 class="contCaption">WITHDRAWAL</h1>
        <h2 class="contSubCaption">退会</h2>
        <p class="message-user-kaiin">退会されますと、お預かりしているご登録情報を全て消去いたします。<br>「退会する」ボタンを押して退会ページへお進みください。</p>

        <!-- 退会処理エラーメッセージ -->
        @if(session('message'))
        <p class="text-danger">{{ $message }}</p>
        @endif

        <div class="container">
            <a href="{{ route('exeDelete',Auth::user()->id) }}" class="add-submit">退会する</a><br>
        </div>
        <div class="container ">
            <a href="{{ route('showMypage') }}" class="reset-submit">戻る</a><br>
        </div>

    </section>

</div><!--/#contents-->
@endsection