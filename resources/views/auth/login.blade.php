<!-- ログインページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','ログイン ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<!-- ログインorパスワードを忘れた方or新規登録 -->
<div id="contents" class="login">
    <section class="box1">
        <h2><span>ログイン</span></h2>

        <div class="center">
            <p>会員登録がおすみでない方は<a href="{{ route('showSignup') }}">こちら</a>から</p>
        </div>
        
        <form action="{{ route('exeLogin') }}" method="post">
            @csrf
            <div class="form">
                <!-- 登録完了メッセージ -->
                <!-- ログインエラーメッセージ -->
                @if(session('message'))
                    <p class="text-danger">{{ session('message') }}</p>
                @endif

                <div class="mailWrapper">
                    <div class="form-group">
                        <label for="email"><strong>ご登録のメールアドレス</strong></label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                        <!-- バリデーション -->
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="passwordWrapper">
                        <label for="password"><strong>パスワード</strong></label>
                        <input type="password" name="password" id="password" required>
                        <!-- バリデーション -->
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="c">
                    <input type="submit" name="btn_submit" value="ログイン">
                </div>

            </div><!-- /.form -->
        </form>

        <div class="center">
            <p>パスワードを忘れた方は<a href="{{ route('showPasswordReset') }}">こちら</a>から</p>
        </div>
    </section><!-- /.box1 -->
</div><!-- /#content -->

@endsection