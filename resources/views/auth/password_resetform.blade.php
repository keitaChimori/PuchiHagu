<!-- パスワード再設定フォーム -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','パスワード再設定 ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')
<!-- ログインorパスワードを忘れた方or新規登録 -->
<div id="contents" class="pass_resetform">
  <section class="box1">
    <h2>パスワード再設定</h2>

    <form action="{{ route('exePasswordReset') }}" method="post">
      @csrf
      <div class="form">

        <!-- エラーメッセージ -->
        @if(session('message'))
          <p>{{ session('message') }}</p>
        @endif

        <!-- 新しいパスワード -->
        <div class="usernameWrapper">
          <label for="password"><strong>新しいパスワード</strong></label>
          <input type="password" name="password" id="password" required>
          <!-- バリデーションエラー -->
          @error('password')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div><br>

        <!-- 新しいパスワード【確認用】 -->
        <div class="usernameWrapper">
          <label for="password_confirmation"><strong>新しいパスワード【確認用】</strong></label>
          <input type="password" name="password_confirmation" id="password_confirmation" required>
          <!-- バリデーションエラー -->
          @error('password_confirmation')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div><br>

        <div class="btnWrapper text-center">
          <input type="hidden" name="email" value="{{ $email }}">
          <input type="submit" name="btn_submit" value="変更">
        </div>

      </div>
    </form>
  </section>

</div><!-- /#contents -->
@endsection