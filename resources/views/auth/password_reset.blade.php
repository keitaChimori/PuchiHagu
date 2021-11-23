<!-- パスワード再設定メール送信フォーム -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','パスワード再設定メール ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')
<!-- ログインorパスワードを忘れた方or新規登録 -->
<div id="contents" class="pass_reset">
  <section class="box1">
    <h2>パスワード再設定メールの送信</h2>

    <p class="center">ログインは<a href="{{ route('showLogin') }}">こちら</a>から</p>

    <form action="{{ route('exePasswordResetMail') }}" method="post">
      @csrf
      <div class="form">

        <!-- エラーメッセージ -->
        @if(session('message'))
          <p class="text-center text-danger">{{ session('message') }}</p>
        @endif

        <div class="usernameWrapper">
          <!-- メールアドレス -->
          <label for="email"><strong>メールアドレス</strong></label>
          <input type="email" name="email" id="email" required>
        </div>
        <p style="text-align:center;">ご登録いただいたメールアドレス宛にパスワードの再設定フォームを送信します</p>

        <div class="btnWrapper text-center">
          <input type="submit" name="btn_submit" value="パスワード再発行メール送信">
        </div>

      </div>
    </form>
  </section>

</div><!-- /#contents -->
@endsection